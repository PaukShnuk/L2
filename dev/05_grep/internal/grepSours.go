package grep

import (
	"bufio"
	"fmt"
	"io"
	"io/ioutil"
	"log"
	"os"
	"regexp"
	"strings"
	"sync"
)

// Filter структура, хранящая в себе весь grep-запрос
type Filter struct {
	source string
	Config *Config
	wg     *sync.WaitGroup
	lines  []string
}

// NewFilter ф-я созданея Filter
func NewFilter(conf *Config, wg *sync.WaitGroup, src string) *Filter {
	return &Filter{
		source: src,
		Config: conf,
		wg:     wg,
	}
}

// RunFilter - метод, отвечающий за запуск утилиты в зависимости от источника строк (файл или консоль)
func (f *Filter) RunFilter() {
	defer f.wg.Done()
	if f.source != "" {
		err := f.ReadFile()
		if err != nil {
			log.Fatal(err)
		}
		err = f.Filter(os.Stdout)
		if err != nil {
			log.Fatal(err)
		}
	} else {
		f.ReadStd()
		err := f.Filter(os.Stdout)
		if err != nil {
			log.Fatal(err)
		}
	}
}

// ReadFile метод чтения всех строк из файла и запись в структуру Filter
func (f *Filter) ReadFile() error {
	file, err := os.Open(f.source)
	if err != nil {
		return fmt.Errorf("open file error: %v", err)
	}
	defer file.Close()

	bytes, err := ioutil.ReadAll(file)
	if err != nil {
		return fmt.Errorf("read file error: %v", err)
	}
	f.lines = strings.Split(string(bytes), "\n")
	return nil
}

// ReadStd метод чтения строк из консоли и записи в структуру Filter. Окончанием ввода считается пустая строка
func (f *Filter) ReadStd() {
	src := bufio.NewScanner(os.Stdin)
	for src.Scan() {
		f.lines = append(f.lines, src.Text())
		if src.Text() == "" {
			return
		}
	}
}

// PrintLine метод, печатающий строку. С флагом N выводится её порядковый номер.
func (f *Filter) PrintLine(w io.Writer, i int) error {
	if len(f.lines) > i && i >= 0 {
		line := f.lines[i]
		if f.Config.N {
			line = fmt.Sprintf("%v:%v", i+1, line)
		} else {
			line = fmt.Sprintf("%v", line)
		}
		_, err := fmt.Fprintln(w, line)
		if err != nil {
			return err
		}
	}
	return nil
}

// PrintAfter метод, печатающий count кол-во строк после строки с индексом ind
func (f *Filter) PrintAfter(w io.Writer, ind int, count int) error {
	for i := ind + 1; i <= ind+count; i++ {
		err := f.PrintLine(w, i)
		if err != nil {
			return err
		}
	}
	return nil
}

// PrintBefore метод, печатающий count кол-во строк до строки с индексом ind
func (f *Filter) PrintBefore(w io.Writer, ind int, count int) error {
	for i := ind - count; i < ind; i++ {
		err := f.PrintLine(w, i)
		if err != nil {
			return err
		}
	}
	return nil
}

// CheckLine метод проверки строки по паттерну и по F, I, V флагам
func (f *Filter) CheckLine(line string) bool {
	pattern := f.Config.Pattern
	if f.Config.F {
		if f.Config.I { // точное совпадение с игнорированием регистра
			pattern = strings.ToLower(pattern)
			line = strings.ToLower(line)
		}
		//if strings.Contains(line, pattern) {
		if line == pattern {
			return !f.Config.V
		}
	} else {
		if f.Config.I { // ингорирование регистра при неточном совпадении
			pattern = "(?i)" + pattern
		}
		val, _ := regexp.MatchString(pattern, line)
		if val {
			return !f.Config.V
		}
	}
	return f.Config.V
}

// Filter основной метод отвечающий, за вывод строк и работающий с флагами A, B, C, c
func (f *Filter) Filter(w io.Writer) error {

	var count int

	for index, line := range f.lines {
		if f.CheckLine(line) {
			if f.Config.CO {
				count++
			} else if f.Config.A > 0 {
				err := f.PrintLine(w, index)
				if err != nil {
					return err
				}
				err = f.PrintAfter(w, index, f.Config.A)
				if err != nil {
					return err
				}
			} else if f.Config.B > 0 {
				err := f.PrintBefore(w, index, f.Config.B)
				if err != nil {
					return err
				}
				err = f.PrintLine(w, index)
				if err != nil {
					return err
				}
			} else if f.Config.C > 0 {
				err := f.PrintBefore(w, index, f.Config.C)
				if err != nil {
					return err
				}
				err = f.PrintLine(w, index)
				if err != nil {
					return err
				}
				err = f.PrintAfter(w, index, f.Config.C)
				if err != nil {
					return err
				}
			} else {
				err := f.PrintLine(w, index)
				if err != nil {
					return err
				}
			}
		}
	}
	if f.Config.CO {
		_, err := fmt.Fprintln(w, count)
		if err != nil {
			return err
		}
	}
	return nil
}

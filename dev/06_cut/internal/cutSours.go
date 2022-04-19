package cut

import (
	"fmt"
	"io"
	"log"
	"os"
	"sort"
	"strconv"
	"strings"
)

// Cut основная структура, хранящая конфиг, колонки и
type Cut struct {
	*Config
	Columns map[int][]string
	FRange  []int
}

// NewCut - Cut-конструктор
func NewCut(config *Config) *Cut {
	return &Cut{
		Config:  config,
		Columns: make(map[int][]string),
		FRange:  nil,
	}
}

// GetColumns метод для получения колонок из строк в виде мапки, где ключ - номер колонки,
// а значение - слайс слов в колонке
func (cu *Cut) GetColumns() {
	for _, line := range cu.Lines {
		for index, str := range strings.Split(line, cu.D) {
			if cu.S {
				if len(strings.Split(line, cu.D)) != 1 {
					cu.Columns[index] = append(cu.Columns[index], str)
				}
			} else {
				cu.Columns[index] = append(cu.Columns[index], str)
			}
		}
	}
}

// GetFRange метод для получения интексов выводимых столбцов
func (cu *Cut) GetFRange(str string) {
	var num1, num2 int
	var err error
	nums := strings.Split(strings.TrimSpace(str), "-")
	if len(nums) == 2 {
		if nums[0] == "" {
			num1 = 1
		} else {
			num1, err = strconv.Atoi(strings.TrimSpace(nums[0]))
			if err != nil || num1 < 1 {
				log.Fatalf("bad first -f range value")
			}
		}
		if nums[1] == "" {
			num2 = len(cu.Columns)
		} else {
			num2, err = strconv.Atoi(strings.TrimSpace(nums[1]))
			if err != nil || num2 < 1 || num2 < num1 {
				log.Fatalf("bad second -f range value")
			}
		}
		for i := num1 - 1; i <= num2-1; i++ {
			cu.FRange = append(cu.FRange, i)
		}
	}
}

// GetEnumeration получение индексов столбцов через перечисление
func (cu *Cut) GetEnumeration() {
	for _, value := range strings.Split(cu.Config.F, ",") {
		if strings.Contains(value, "-") {
			cu.GetFRange(value)
		} else {
			if value == "" {
				break
			}
			num, err := strconv.Atoi(strings.TrimSpace(value))
			if err != nil || num < 1 {
				log.Fatalf("bad -f value")
			}
			cu.FRange = append(cu.FRange, num-1)
		}
	}
}

// GetPrintColumnsIndex метод получения индексов выводимых колонок
func (cu *Cut) GetPrintColumnsIndex() {
	if strings.Contains(cu.Config.F, ",") { // обработка перечисления колонок
		cu.GetEnumeration()
	} else if strings.Contains(cu.Config.F, "-") { // обработка перечислений колонок
		cu.GetFRange(cu.Config.F)
	} else { // если нет разделителей - одиночная колонка
		num, err := strconv.Atoi(cu.Config.F)
		if err != nil || num < 1 {
			log.Fatalf("bad -f range value")
		}
		cu.FRange = append(cu.FRange, num)
	}
}

// CheckColumnsForF метод определения, существуют ли колонки с введёнными индексами
func (cu *Cut) CheckColumnsForF() bool {
	for _, rowNum := range cu.FRange {
		if _, ok := cu.Columns[rowNum]; !ok {
			return false
		}
	}
	return true
}

// CheckMaxLen получение максимальной длинны колонок
func (cu *Cut) CheckMaxLen() int {
	max := 0
	for _, val := range cu.FRange {
		if len(cu.Columns[val]) > max {
			max = len(cu.Columns[val])
		}
	}
	return max
}

// DelDuplicates удаление дублирующихся индексов колонок для вывода
func (cu *Cut) DelDuplicates() {
	j := 1
	for i := 1; i < len(cu.FRange); i++ {
		if cu.FRange[i] != cu.FRange[i-1] {
			cu.FRange[j] = cu.FRange[i]
			j++
		}
	}
	cu.FRange = cu.FRange[:j]
}

// Print вывод в консоль колонок
func (cu *Cut) Print(w io.Writer) {
	sort.Ints(cu.FRange)
	cu.DelDuplicates()
	max := cu.CheckMaxLen()
	for i := 0; i < max; i++ {
		for _, j := range cu.FRange {
			for len(cu.Columns[j]) < max {
				cu.Columns[j] = append(cu.Columns[j], "")
			}
			fmt.Fprintf(w, "%v\t", cu.Columns[j][i])
		}
		fmt.Fprint(w, "\n")
	}
}

// PrintColumns см. Print
func (cu *Cut) PrintColumns() {
	w := io.Writer(os.Stdout)
	cu.Print(w)

}

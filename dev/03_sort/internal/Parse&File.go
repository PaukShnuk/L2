package internal

import (
	"flag"
	"fmt"
	"io/ioutil"
	"log"
	"os"
	"strings"
)

type Flag struct {
	K int
	R bool
	U bool
	N bool
	M bool
	B bool
	C bool
	H bool
}

func NewFlag() *Flag {
	return &Flag{}
}

func (f *Flag) ParseFlags() {
	flag.IntVar(&f.K, "k", 1, "указание строки для соритровки")
	flag.BoolVar(&f.R, "r", false, "сортировка в обратном порядке")
	flag.BoolVar(&f.N, "n", false, "сортировка по числовому значению")
	flag.BoolVar(&f.U, "u", false, "не выводить повторяющиеся строки")
	flag.BoolVar(&f.M, "M", false, "сортировка по названию месяца")
	flag.BoolVar(&f.B, "b", false, "игнорировать хвостовые пробелы")
	flag.BoolVar(&f.C, "c", false, "проверять отсортированы ли данные")
	flag.BoolVar(&f.H, "h", false, "сортировать по числовому значению с учётом суффиксов")
	flag.Parse()
}

type TextFile struct {
	*Flag
	dateStr []string
	Sorted  bool
	inPath  string
	outPath string
}

func NewTextFile() *TextFile {
	return &TextFile{
		Flag: NewFlag(),
	}
}

func (t *TextFile) Read() {
	file, err := os.Open(t.inPath)

	if err != nil {
		log.Fatal("open file error: ", err)
	}
	defer file.Close()

	dataBytes, err := ioutil.ReadAll(file)
	if err != nil {
		log.Fatal("read file error: ", err)
	}

	t.dateStr = strings.Split(string(dataBytes), "\n")
}

func (t *TextFile) Write() {
	if !t.C {
		file, err := os.Create(t.outPath)
		if err != nil {
			log.Fatal("create file error: ", err)
		}
		defer file.Close()

		for _, line := range t.dateStr {
			if _, err = file.WriteString(line + "\n"); err != nil {
				log.Fatal("write file error: ", err)
			}
		}
	} else {
		fmt.Println(t.Sorted)
	}
}

func (t *TextFile) SetInputPath() {
	t.inPath = flag.Arg(0)
}

func (t *TextFile) SetOutputPath() {
	t.outPath = flag.Arg(1)
}
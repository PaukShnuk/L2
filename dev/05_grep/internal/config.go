package grep

import (
	"errors"
	"flag"
)

// Flags структура хранения флагов
type Flags struct {
	A  int
	B  int
	C  int
	CO bool
	I  bool
	V  bool
	F  bool
	N  bool
}

// Config структура, хранящая флаги, искомую строку и файл
type Config struct {
	Flags
	Pattern string
	File    []string
}

// NewConfig сохдание нового конфига
func NewConfig() *Config {
	return &Config{}
}

// SetFlag установка флагов, паттерна и пути до файла если есть
func (c *Config) SetFlag() error {
	flag.IntVar(&c.A, "A", 0, "печатать +N строк после совпадения")
	flag.IntVar(&c.B, "B", 0, "печатать +N строк до совпадения")
	flag.IntVar(&c.C, "C", 0, "печатать ±N строк вокруг совпадения")
	flag.BoolVar(&c.CO, "c", false, "количество строк")
	flag.BoolVar(&c.I, "i", false, "игнорировать регистр")
	flag.BoolVar(&c.V, "v", false, "вместо совпадения, исключать")
	flag.BoolVar(&c.F, "F", false, "точное совпадение со строкой, не паттерн")
	flag.BoolVar(&c.N, "n", false, "напечатать номер строки")
	flag.Parse()
	if len(flag.Args()) < 1 {
		return errors.New("no pattern")
	}
	c.Pattern = flag.Arg(0)
	for i := 1; i < len(flag.Args()); i++ {
		c.File = append(c.File, flag.Arg(i))
	}

	return nil
}

package cut

import (
	"bufio"
	"flag"
	"log"
	"os"
)

// Flags структура, хранящая значения флагов
type Flags struct {
	F string
	D string
	S bool
}

// Config структура, хранящая флаги и введённые строки
type Config struct {
	Flags
	Lines []string
}

// NewConfig создание нового конфига
func NewConfig() *Config {
	return &Config{}
}

// SetFlag метод чтения значений флагов
func (c *Config) SetFlag() {
	flag.StringVar(&c.F, "f", "", "выбрать поля (колонки)")
	flag.StringVar(&c.D, "d", "\t", "использовать другой разделитель")
	flag.BoolVar(&c.S, "s", false, "только строки с разделителем")
	flag.Parse()
	if c.F == "" {
		log.Fatalln("you must use flag 'f'")
	}
	c.GetLines()

}

// GetLines метод для чтения введённых строк из коммандной строки
func (c *Config) GetLines() {
	src := bufio.NewScanner(os.Stdin)
	for src.Scan() {
		if src.Text() == "" {
			return
		}
		c.Lines = append(c.Lines, src.Text())
	}
}

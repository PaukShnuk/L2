package telnet

import (
	"flag"
	"log"
	"time"
)

// Config - структура с конфигом
type Config struct {
	TimeOutDuration time.Duration
	Host            string
	Port            string
}

// NewConfig - новый конфиг
func NewConfig() *Config {
	return &Config{}
}

// InitConfig - инициализация конфига данными
func (c *Config) InitConfig() {
	flag.DurationVar(&c.TimeOutDuration, "timeout", 10*time.Second, "timeout duration")
	flag.Parse()
	if len(flag.Args()) != 2 {
		log.Fatal("entered more or less then 2 arguments")
	}
	c.Host, c.Port = flag.Arg(0), flag.Arg(1)
}

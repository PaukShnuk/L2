package telnet

import (
	"flag"
	"log"
	"time"
)

type Config struct {
	TimeOutDuration time.Duration
	Host            string
	Port            string
}

func NewConfig() *Config {
	return &Config{}
}

func (c *Config) InitConfig() {
	flag.DurationVar(&c.TimeOutDuration, "timeout", 10*time.Second, "timeout duration")
	flag.Parse()
	if len(flag.Args()) != 2 {
		log.Fatal("entered more or less then 2 arguments")
	}
	c.Host, c.Port = flag.Arg(0), flag.Arg(1)
}

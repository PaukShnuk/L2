package wget

import (
	"github.com/gocolly/colly"
	"net/url"
)

// Config - основная структура программы
type Config struct {
	colly   *colly.Collector
	Dir     string
	Domain  *url.URL
	isVisit map[string]bool
}

// NewConfig - сознание конфига
func NewConfig() *Config {
	return &Config{
		isVisit: make(map[string]bool),
	}
}

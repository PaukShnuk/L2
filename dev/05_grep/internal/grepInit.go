package grep

import (
	"sync"
)

// Grep основная структура утилиты grep
type Grep struct {
	config *Config
	wg     *sync.WaitGroup
}

//NewGrep ф-я создания структуры Grep
func NewGrep() *Grep {
	return &Grep{
		config: &Config{},
		wg:     &sync.WaitGroup{},
	}
}

// InitGrep инициализация Grep введёнными аргументами
func (g *Grep) InitGrep() error {
	if err := g.config.SetFlag(); err != nil {
		return err
	}
	return nil
}

//Start центровая ф-я запуска
func (g *Grep) Start() {
	if len(g.config.File) == 0 {
		filter := NewFilter(g.config, g.wg, "")
		g.wg.Add(1)
		filter.RunFilter()
		//g.wg.Done()
	} else {
		for _, file := range g.config.File {
			filter := NewFilter(g.config, g.wg, file)
			g.wg.Add(1)
			go filter.RunFilter()
		}
	}
	g.wg.Wait()
}

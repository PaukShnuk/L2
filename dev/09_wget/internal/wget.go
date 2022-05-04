package wget

import (
	"bufio"
	"fmt"
	"github.com/gocolly/colly"
	"log"
	"net/url"
	"os"
	"path"
	"strings"
)

// Run - запуск утилиты
func Run() {
	c := NewConfig()
	c.Init()
	c.MakeDir()
	c.VisitPage()
	c.SavePage()
	c.isVisit[c.Domain.String()] = true
	err := c.colly.Visit(c.Domain.String())
	if err != nil {
		log.Fatal(err)
	}
	c.colly.Wait()
	fmt.Printf("Save [%v] complete\n", c.Domain.String())
}

// Init - инициализация с базовыми настройками
func (c *Config) Init() {
	reader := bufio.NewReader(os.Stdin)
	input, err := reader.ReadString('\n')
	if err != nil {
		log.Fatal(err)
	}
	c.Domain, err = url.ParseRequestURI(strings.TrimSuffix(input, "\n"))
	if err != nil {
		log.Fatal(err)
	}
	c.Dir = "test_sites/"
	c.colly = colly.NewCollector(colly.AllowedDomains(c.Domain.Host))
}

// MakeDir - создание базовой директории
func (c *Config) MakeDir() {
	domain := c.Domain.Hostname()
	if err := os.MkdirAll(c.Dir+domain, os.ModePerm); err != nil {
		log.Fatal(err)
	}
	err := os.Chdir(c.Dir + domain)
	if err != nil {
		log.Fatal(err)
	}

}

// VisitPage - посещение страниц по ссылкам типа <a>
func (c *Config) VisitPage() {
	c.colly.OnHTML("a[href]", func(e *colly.HTMLElement) {
		link := e.Attr("href")
		absLink := e.Request.AbsoluteURL(link)
		if !c.isVisit[absLink] {
			err := c.colly.Visit(absLink)
			if err != nil {
				fmt.Printf("error page [%v]: %v\n", absLink, err)
			}
			c.isVisit[absLink] = true
		}

	})
}

// GetPath - получение пути для схранения файлов
func (c *Config) GetPath(currentPath string) (pathDir string, fullPath string) {
	fullPath = c.Dir + c.Domain.Host + currentPath
	pathDir = fullPath

	if path.Ext(currentPath) == "" { // если путь без расширения, то добавляем '/'
		if fullPath[len(fullPath)-1] != '/' {
			fullPath += "/"
		}
		fullPath += "index.html"
	}
	if index := strings.LastIndex(fullPath, "/"); index != -1 {
		pathDir = fullPath[:index]
	}
	return
}

// SavePage - сохранение страницы в нужные пути
func (c *Config) SavePage() {
	c.colly.OnResponse(func(r *colly.Response) {
		pathDir, fullPath := c.GetPath(r.Request.URL.Path)
		fmt.Printf("save: [%v] to [%v]\n", r.Request.URL.Path, pathDir)
		//if _, err := os.Stat(pathDir); err != nil {
		if err := os.MkdirAll(pathDir, os.ModePerm); err != nil {
			log.Fatalln(err, 1)
		}
		//}
		err := r.Save(fullPath)
		if err != nil {
			return
		}
	})
}

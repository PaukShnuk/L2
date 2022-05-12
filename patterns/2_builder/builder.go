package main

// уменьшения размера конструктора создаваемого объекта;
// создания немного отличающихся в значениях, но одинаковых в конструкции объектов.
/*
 Паттерн Строитель предлагает вынести конструирование объекта за пределы его собственного класса, поручив это дело
 отдельным объектам, называемым строителями.
плюсы:
 Создание объекта пошаговое.
 Позволяет использовать один и тот же код для создания различных но схожих объектов.
минусы:
 Усложняет код программы из-за введения дополнительных классов.
*/

import "fmt"

// картина, которую может нарисоватьь художник
type Picture struct {
	genBack  string
	rearBack string
	main     string
	details  string
	style    string
}

func NewPicture(gb string, rb string, m string, d string, s string) *Picture {
	return &Picture{gb, rb, m, d, s}
}

// интерфейс абстрактного художника
type Artist interface {
	paintGeneralBackground(g string)
	paintRearBackground(r string)
	paintMainPart(m string)
	paintDetails(d string)
	setStyle()
	draw() *Picture
}

func NewArtist(i int) Artist {
	if i == 0 {
		return NewRealistArtist()
	} else {
		return NewImpressionArtist()
	}
}

// художник-реалист
type RealistArtist struct {
	genBack  string
	rearBack string
	main     string
	details  string
	style    string
}

func NewRealistArtist() *RealistArtist {
	return &RealistArtist{}
}

// реализация поведений для художника-реалиста
func (r *RealistArtist) paintGeneralBackground(g string) {
	r.genBack = g
}

func (r *RealistArtist) paintRearBackground(ra string) {
	r.rearBack = ra
}

func (r *RealistArtist) paintMainPart(m string) {
	r.main = m
}

func (r *RealistArtist) paintDetails(d string) {
	r.details = d
}

func (r *RealistArtist) setStyle() {
	r.style = "realistic"
}

// завершение карины
func (r *RealistArtist) draw() *Picture {
	return NewPicture(r.genBack, r.rearBack, r.main, r.details, r.style)
}

// художник-импрессионист
type ImpressionistArtist struct {
	genBack  string
	rearBack string
	main     string
	details  string
	style    string
}

func NewImpressionArtist() *ImpressionistArtist {
	return &ImpressionistArtist{}
}

// опять же реализация поведения художника-импрессиониста как художника в целом
func (r *ImpressionistArtist) paintGeneralBackground(g string) {
	r.genBack = g
}

func (r *ImpressionistArtist) paintRearBackground(ra string) {
	r.rearBack = ra
}

func (r *ImpressionistArtist) paintMainPart(m string) {
	r.main = m
}

func (r *ImpressionistArtist) paintDetails(d string) {
	r.details = d
}

func (r *ImpressionistArtist) setStyle() {
	r.style = "impression"
}

func (r *ImpressionistArtist) draw() *Picture {
	return NewPicture(r.genBack, r.rearBack, r.main, r.details, r.style)
}

func main() {
	a1 := NewArtist(1)
	a1.paintGeneralBackground("so realistic back")
	a1.paintRearBackground("true rear back")
	a1.paintMainPart("just a portrait")
	a1.paintDetails("nice details")
	a1.setStyle()
	p1 := a1.draw()
	fmt.Println(p1)

	a2 := NewArtist(2)
	a2.paintGeneralBackground("non realistic back")
	a2.paintRearBackground("interesting rear back")
	a2.paintMainPart("lines and squares")
	a2.paintDetails("non detail")
	a2.setStyle()
	p2 := a2.draw()
	srt := []string{
		p2.genBack,
		p2.rearBack,
		p2.main,
		p2.details,
		p2.style,
	}
	for _, value := range srt {
		fmt.Println(value)
	}
}

package main

import "fmt"

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

func (r *RealistArtist) draw() *Picture {
	return NewPicture(r.genBack, r.rearBack, r.main, r.details, r.style)
}

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

package main

import "fmt"

type computerComponent interface {
	getName() string
	accept(Visitor)
}

type cpu struct {
	name           string
	productionData string
	kernels        uint
}

func NewCpu(n string, pd string, k uint) *cpu {
	return &cpu{n, pd, k}
}

func (c *cpu) getName() string {
	return c.name
}

func (c *cpu) accept(v Visitor) {
	v.visitCpu(c)
}

type gpu struct {
	name           string
	productionData string
	memoryGb       uint
}

func NewGpu(n string, pd string, m uint) *gpu {
	return &gpu{n, pd, m}
}

func (g *gpu) getName() string {
	return g.name
}

func (g *gpu) accept(v Visitor) {
	v.visitGpu(g)
}

type Visitor interface {
	visitCpu(*cpu)
	visitGpu(*gpu)
}

type dataCheck struct {
	data string
}

func NewDataCheck() *dataCheck {
	return &dataCheck{}
}

func (d *dataCheck) visitCpu(c *cpu) {
	d.data = c.productionData
}

func (d *dataCheck) visitGpu(g *gpu) {
	d.data = g.productionData
}

type detailCheck struct {
	detail uint
}

func NewDetailCheck() *detailCheck {
	return &detailCheck{}
}

func (d *detailCheck) visitCpu(c *cpu) {
	d.detail = c.kernels
}

func (d *detailCheck) visitGpu(g *gpu) {
	d.detail = g.memoryGb
}

func main() {

	c1 := NewCpu("i7", "march 2021", 12)
	g1 := NewGpu("3090ti", "march 2022", 24)

	fmt.Println(c1.getName())
	fmt.Println(g1.getName())

	dataCpu := NewDataCheck()
	dataGpu := NewDataCheck()

	dataCpu.visitCpu(c1)
	fmt.Println(dataCpu.data)
	dataGpu.visitGpu(g1)
	fmt.Println(dataGpu.data)

	detailCpu := NewDetailCheck()
	detailGpu := NewDetailCheck()

	detailCpu.visitCpu(c1)
	fmt.Println(detailCpu.detail)
	detailGpu.visitGpu(g1)
	fmt.Println(detailGpu.detail)
}

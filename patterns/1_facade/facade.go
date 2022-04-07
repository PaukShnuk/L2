package main

import "fmt"

type PSU struct {
}

func (p *PSU) startPsu() string {
	return "psu is started"
}

type MotherBoard struct {
}

func (m *MotherBoard) startMotherBoard() string {
	return "motherboard is started"
}

type CPU struct {
}

func (c *CPU) startCpu() string {
	return "cpu is started"
}

type GPU struct {
}

func (g *GPU) startGpu() string {
	return "gpu is started"
}

type startComputer struct {
	psu PSU
	mb  MotherBoard
	cpu CPU
	gpu GPU
}

func NewStart() *startComputer {
	return &startComputer{
		psu: PSU{},
		mb:  MotherBoard{},
		cpu: CPU{},
		gpu: GPU{}}
}

func (s *startComputer) startingComputer() []string {
	arg := []string{
		s.psu.startPsu(),
		s.mb.startMotherBoard(),
		s.cpu.startCpu(),
		s.gpu.startGpu(),
	}
	return arg
}

func main() {
	start := NewStart()
	i := 1
	for _, value := range start.startingComputer() {
		fmt.Println("stage", i, ":", value)
		i++
	}
}

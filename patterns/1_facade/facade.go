package main

//скрывает за фасадом сложность инициализации отдельных служб для клиента

/*
	Плюсы:
	- меньше кода, меньше ошибок, быстрее разработка.
	- упрощение работы с подсистемой для клиента
	Минусы:
	- дополнительная разработка.
	- Нужно хорошо продумать реализуемый набор интерфейсов для клиента
	Реальные примеры:
	Используя паттерн «Фасад», реализуем унифицированный интерфейс к некоторой подсистеме авторизации пользователей.
	Сама подсистема авторизации (в данном примере), безусловно не претендует на «сложную систему»
*/

import "fmt"

type PSU struct {
}

// запуск PSU
func (p *PSU) startPsu() string {
	return "psu is started"
}

type MotherBoard struct {
}

// запуск MotherBoard
func (m *MotherBoard) startMotherBoard() string {
	return "motherboard is started"
}

type CPU struct {
}

// запуск CPU
func (c *CPU) startCpu() string {
	return "cpu is started"
}

type GPU struct {
}

// запуск GPU
func (g *GPU) startGpu() string {
	return "gpu is started"
}

// запуск компьютера в целом
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

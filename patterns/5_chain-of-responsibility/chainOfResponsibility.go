package main

/*
Идея шаблона заключается в организации рекуррентного конвейера из обработчиков, в котором каждый обработчик
может либо обработать поступившее сообщение (например, только сообщения определенного типа), либо
делегировать обработку следующему в конвейере обработчику. Возможен еще вариант обработки и последующей передачи.
При этом, клиенту, чтобы инициировать обработку того или иного сообщения достаточно лишь передать
его первому в конвейере обработчику.
Плюсы:
	- Разнесение клиента и обработчиков, уменьшение их зависимости
	- Реализация принципа единственной ответственности
Минусы:
	- Создание дополнительных объектов, усложнение кода
	- Запрос может быть не обработан
*/

import (
	"fmt"
	"time"
)

// TripAroundSun - времена года. Пример заключается в последоватльной смене времён года, переходя к разным сезонам,
// которые ссылаются на следующий сезон
type TripAroundSun struct {
	summerPass bool
	autumnPass bool
	winterPass bool
	springPass bool
}

func NewTAS() *TripAroundSun {
	return &TripAroundSun{}
}

// поведение сезонов
type Season interface {
	Execute(*TripAroundSun)
	Next(Season)
}

type Summer struct {
	next Season
}

func (s *Summer) Next(se Season) {
	s.next = se
}

func (s *Summer) Execute(tas *TripAroundSun) {
	if tas.summerPass == false {
		time.Sleep(time.Second)
		fmt.Println("Summer: Summer begins successfully")
		tas.summerPass = true
	} else {
		fmt.Println("Summer: The year is over")
		return
	}
	time.Sleep(time.Second)
	fmt.Println("Summer: Summer has ended successfully")
	s.next.Execute(tas)
}

type Autumn struct {
	next Season
}

func (a *Autumn) Next(se Season) {
	a.next = se
}

func (a *Autumn) Execute(tas *TripAroundSun) {
	if tas.autumnPass == false {
		time.Sleep(time.Second)
		fmt.Println("Autumn: Autumn begins successfully")
		tas.autumnPass = true
	}
	time.Sleep(time.Second)
	fmt.Println("Autumn: Autumn has ended successfully")
	a.next.Execute(tas)
}

type Winter struct {
	next Season
}

func (w *Winter) Next(se Season) {
	w.next = se
}

func (w *Winter) Execute(tas *TripAroundSun) {
	if tas.winterPass == false {
		time.Sleep(time.Second)
		fmt.Println("Winter: Winter begins successfully")
		tas.winterPass = true
	}
	time.Sleep(time.Second)
	fmt.Println("Winter: Winter has ended successfully")
	w.next.Execute(tas)
}

type Spring struct {
	next Season
}

func (s *Spring) Next(se Season) {
	s.next = se
}

func (s *Spring) Execute(tas *TripAroundSun) {
	if tas.springPass == false {
		time.Sleep(time.Second)
		fmt.Println("Spring: Spring begins successfully")
		tas.springPass = true
	}
	time.Sleep(time.Second)
	fmt.Println("Spring: Spring has ended successfully")
	s.next.Execute(tas)
}

func main() {
	t1 := NewTAS()
	s1 := &Summer{}
	s2 := &Autumn{}
	s3 := &Winter{}
	s4 := &Spring{}

	s1.Next(s2)
	s2.Next(s3)
	s3.Next(s4)
	s4.Next(s1)

	s1.Execute(t1)
}

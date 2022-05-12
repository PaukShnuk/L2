package main

/*
  Стратегия - это поведенческий паттерн проектирования, который определяет семейство схожих алгоритмов и помещает каждый из них в собственный класс,
  после чего алгоритмы можно взаимозаменять прямо во время исполнения программы.
  Плюсы:
	- Возможность замены алгоритмов в рантайме
	- Отделение алгоритмов от остальной логики, сокрытие самих алгоритмов
  Минусы:
	- Усложнение кода, засчет введения дополнительных объектов
	- Клиент должен знать в чем состоит отличие алгоритмов, чтобы выбрать нужный
*/

import "fmt"

// действие поставить фурнитуру в квартиру
type Furniture interface {
	SetTo(*Apartment)
}

// дорогая мебель
type SomeExpensiveFurniture struct {
	cost int
}

func NewExpensiveFurnuture() Furniture {
	return &SomeExpensiveFurniture{240000}
}

func (s *SomeExpensiveFurniture) SetTo(a *Apartment) {
	a.totalCost += s.cost
}

// дешёвая мебель
type SomeCheapFurniture struct {
	cost int
}

func NewCheapFurnuture() Furniture {
	return &SomeCheapFurniture{25000}
}

func (s *SomeCheapFurniture) SetTo(a *Apartment) {
	a.totalCost += s.cost
}

// параметры квартиры куда будет ставится мебель
type Apartment struct {
	address   string
	furniture Furniture
	totalCost int // общая строимость, которая изменяется, когда устанавливается новая мебель
}

func (a *Apartment) SetNewFurniture() {
	a.furniture.SetTo(a)
}

func NewApartment(s string, c int) *Apartment {
	return &Apartment{
		address:   s,
		furniture: nil,
		totalCost: c,
	}
}

func (a *Apartment) BuyFurniture(f Furniture) {
	a.furniture = f
}

func (a *Apartment) GetInfo() string {
	return fmt.Sprintf("Addres: %v\nTotal cost: %v\n", a.address, a.totalCost)
}

func main() {
	f1 := NewExpensiveFurnuture()
	f2 := NewCheapFurnuture()
	a1 := NewApartment("пр-кт Кадырова, 1/16", 17000000)

	fmt.Println(a1.GetInfo())

	a1.BuyFurniture(f2)
	a1.SetNewFurniture()
	fmt.Println(a1.GetInfo())

	a1.BuyFurniture(f1)
	a1.SetNewFurniture()
	fmt.Println(a1.GetInfo())
}

package main

import "fmt"

type Furniture interface {
	SetTo(*Apartment)
}

type SomeExpensiveFurniture struct {
	cost int
}

func NewExpensiveFurnuture() Furniture {
	return &SomeExpensiveFurniture{240000}
}

func (s *SomeExpensiveFurniture) SetTo(a *Apartment) {
	a.totalCost += s.cost
}

type SomeCheapFurniture struct {
	cost int
}

func NewCheapFurnuture() Furniture {
	return &SomeCheapFurniture{25000}
}

func (s *SomeCheapFurniture) SetTo(a *Apartment) {
	a.totalCost += s.cost
}

type Apartment struct {
	address   string
	furniture Furniture
	totalCost int
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

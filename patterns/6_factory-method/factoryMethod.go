package main

/*
	Фабричный метод —это класс, в котором есть один метод с большим условным оператором, выбирающим создаваемый продукт.
	Применимость:
	- Когда заранее неизвестны типы и зависимости объектов, с которыми должен работать ваш код.
	Фабричный метод отделяет код производства продуктов от остального кода, который эти продукты использует.
	- Когда вы хотите дать возможность пользователям расширять части вашего фреймворка или библиотеки.
	Преимущества:
	- Выделяет код производства продуктов в одно место, упрощая поддержку кода.
	- Упрощает добавление новых продуктов в программу.
	Кросс-платформенная программа может показывать одни и те же элементы интерфейса, выглядящие чуточку по-другому в
	различных операционных системах. В такой программе важно, чтобы все создаваемые элементы всегда соответствовали
	текущей операционной системе. Вы бы не хотели, чтобы программа, запущенная на Windows, вдруг начала показывать
	чекбоксы в стиле macOS.
*/

import "fmt"

// интерфейс получения информации об оружии
type Weapon interface {
	Get() string
}

// ракета как класс
type Missile struct {
	name     string
	effRange int
	load     int
	speed    int
}

func (m *Missile) Get() string {
	return fmt.Sprintf("Rocket: %v\nEffective range: %v\nTNT load: %v\nSpeed: %v\n", m.name, m.effRange, m.load, m.speed)
}

// ракета земля-земля как подкрасс ракет
type EarthEarth struct {
	Missile
}

// заранее приготовленные данных о создаваемых объектах
func NewEarthEarthRocket() Weapon {
	return &EarthEarth{Missile{
		name:     "P-36M",
		effRange: 16000,
		load:     8800,
		speed:    11000,
	}}
}

// ракета воздух-воздух как подкрасс ракет
type AirAir struct {
	Missile
}

// заранее приготовленные данных о создаваемых объектах
func NewAirAirRocket() Weapon {
	return &AirAir{Missile{
		name:     "P-27",
		effRange: 110,
		load:     39,
		speed:    5600,
	}}
}

// само "производство" ракет
func Factory(s string) Weapon {
	if s == "air-air" {
		return NewAirAirRocket()
	} else if s == "earth-earth" {
		return NewEarthEarthRocket()
	}
	return nil
}

func main() {
	m1 := Factory("earth-earth")
	m2 := Factory("air-air")

	fmt.Println(m1.Get())
	fmt.Println(m2.Get())
}

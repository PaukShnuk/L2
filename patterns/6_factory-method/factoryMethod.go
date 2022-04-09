package main

import "fmt"

type Weapon interface {
	Get() string
}

type Missile struct {
	name     string
	effRange int
	load     int
	speed    int
}

func (m *Missile) Get() string {
	return fmt.Sprintf("Rocket: %v\nEffective range: %v\nTNT load: %v\nSpeed: %v\n", m.name, m.effRange, m.load, m.speed)
}

type EarthEarth struct {
	Missile
}

func NewEarthEarthRocket() Weapon {
	return &EarthEarth{Missile{
		name:     "P-36M",
		effRange: 16000,
		load:     8800,
		speed:    11000,
	}}
}

type AirAir struct {
	Missile
}

func NewAirAirRocket() Weapon {
	return &EarthEarth{Missile{
		name:     "P-27",
		effRange: 110,
		load:     39,
		speed:    5600,
	}}
}

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

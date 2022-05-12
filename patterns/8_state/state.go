package main

/*
	Паттерн позволяет менять объектам свое поведение, исходя из состояния
	в котором они находятся. Возможные состояния объекта выделяются
	в отдельные объекты-состояния и базовому объекту потребуется ссылаться
	только на текущее состояния и иметь возможность его изменять на другое.
	Так можно удобно добавлять новые состояния и изменять старые не
	внося изменения в код базового объекта. Большой условный оператор
	заменяется разными объектами-состояниями и ссылкой на них в базовом объекте.
	Плюс:
	- Уход от больших громоздких условных операторов
	- Код, относящийся к определенному состоянию находится в одном месте
	Минусы:
	- Может неоправдано усложнять код из-за введения дополнительных объектов,
	если состояний небольшое количество
	паттерн Состояние изменяет функциональность одних и тех же элементов управления музыкальным
	проигрывателем, в зависимости от того, в каком состоянии находится сейчас проигрыватель.
*/

import (
	"fmt"
)

// 3д-модель, которая должна производится по шагам

type Model3d struct {
	formCreate state
	texture    state
	setLight   state
	render     state

	current state
	name    string
}

func New3dModel(s string) *Model3d {
	m := Model3d{}
	m.formCreate = &formCreate{&m}
	m.texture = &texturing{&m}
	m.setLight = &lightingSetting{&m}
	m.render = &rendering{&m}

	m.name = s
	m.current = m.formCreate
	return &m
}
/*
	различные манипуляции с шагами производства 3д-можели, например, если модель на этапе настройки света, то запрашивая
	текстурирование программа выведет, что текстурирование уже прошло, либо, если на этапе создания модели запросить
	рендеринг модели программа выведет, что сначала требуется текстурирование
*/
type state interface {
	formCreating() error
	texturing() error
	lightingSetting() error
	rendering() error
}

type formCreate struct {
	model *Model3d
}

func (f *formCreate) formCreating() error {
	return fmt.Errorf("form is already being creating")
}

func (f *formCreate) texturing() error {
	f.model.current = f.model.texture
	fmt.Println("Start texturing model")
	return nil
}

func (f *formCreate) lightingSetting() error {
	return fmt.Errorf("first you need to texture")
}

func (f *formCreate) rendering() error {
	return fmt.Errorf("first you need to texture")
}

type texturing struct {
	model *Model3d
}

func (f *texturing) formCreating() error {
	return fmt.Errorf("model has already been created")
}

func (f *texturing) texturing() error {
	return fmt.Errorf("model is already texturing")
}

func (f *texturing) lightingSetting() error {
	f.model.current = f.model.setLight
	fmt.Println("start light setting")
	return nil
}

func (f *texturing) rendering() error {
	return fmt.Errorf("first you need to set light")
}

type lightingSetting struct {
	model *Model3d
}

func (f *lightingSetting) formCreating() error {
	return fmt.Errorf("model has already been created")
}

func (f *lightingSetting) texturing() error {
	return fmt.Errorf("model has already been texturing")
}

func (f *lightingSetting) lightingSetting() error {
	return fmt.Errorf("light is already setting")
}

func (f *lightingSetting) rendering() error {
	f.model.current = f.model.render
	fmt.Println("Start rendering")
	return nil
}

type rendering struct {
	model *Model3d
}

func (f *rendering) formCreating() error {
	return fmt.Errorf("model has already been created")
}

func (f *rendering) texturing() error {
	return fmt.Errorf("model has already been texturing")
}

func (f *rendering) lightingSetting() error {
	return fmt.Errorf("light has already been setting")
}

func (f *rendering) rendering() error {
	return fmt.Errorf("model has already been rendered")
}

func main() {
	model1 := New3dModel("testModel")

	if err := model1.current.formCreating(); err != nil {
		fmt.Println(err)
	}
	if err := model1.current.texturing(); err != nil {
		fmt.Println(err)
	}
	if err := model1.current.lightingSetting(); err != nil {
		fmt.Println(err)
	}
	if err := model1.current.formCreating(); err != nil {
		fmt.Println(err)
	}
	if err := model1.current.rendering(); err != nil {
		fmt.Println(err)
	}
	if err := model1.current.rendering(); err != nil {
		fmt.Println(err)
	}
}

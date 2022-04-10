package main

import (
	"fmt"
)

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

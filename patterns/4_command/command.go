package main

import "fmt"

type Computer struct {
	isStarted bool
}

func NewComputer() *Computer {
	return &Computer{}
}

func (c *Computer) start() {
	c.isStarted = true
}

func (c *Computer) shutdown() {
	c.isStarted = false
}

type Signal interface {
	execute()
}

type button struct {
	sig Signal
}

func NewButton(sig Signal) *button {
	return &button{sig: sig}
}

func (b *button) press() {
	b.sig.execute()
}

type startSig struct {
	comp *Computer
}

func NewStartSig(c *Computer) *startSig {
	return &startSig{c}
}

func (ss *startSig) execute() {
	ss.comp.start()
}

type shutdownSig struct {
	comp *Computer
}

func NewShutdownSig(c *Computer) *shutdownSig {
	return &shutdownSig{c}
}

func (s *shutdownSig) execute() {
	s.comp.shutdown()
}

func main() {
	c := NewComputer()
	startSignal := NewStartSig(c)
	shutdownSignal := NewShutdownSig(c)
	startButton := NewButton(startSignal)
	shutdownButton := NewButton(shutdownSignal)

	fmt.Println("computer is started:", c.isStarted)
	startButton.press()
	fmt.Println("computer is started:", c.isStarted)
	shutdownButton.press()
	fmt.Println("computer is started:", c.isStarted)

}

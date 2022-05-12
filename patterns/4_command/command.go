package main

/*
	Паттерн превращает запросы в отдельные объекты,
	отделяя запросы от класса отправителя, позволяя осуществлять работу
	с запросами в рантайме, реализуя различные операции: выстраивание очередей
	команд, хранение истории, реализации отмены и другое.
	Например, может использоваться для разделения слоя графического интерфейса,
	от слоя бизнес-логики, которые будут общаться друг с другом посредством
	объектов команд: отправитель (графический интерфейс) будет вызывать нужную команду,
	а получатель (бизнес-логика) будет делать нужное действие.
	При этом детали будут скрытых от обоих узлов.
	Плюсы:
	- Убирается прямая связь между отправителями и исполнителями запросов
	- Позволяет удобно реализовывать различные операции: отмена и повтор запросов,
	отложенный запуск запросов, выстраивание очереди запросов.
	Минусы:
	- Усложняет код из-за необходимости реализации дополнительных классов
	Реализовать паттерн можно для создания взаимодействия между
	кнопкой на пульте (интерфейсом, отправителем) и телевизором (бизнес-логикой, приемником).
	Команды On и Off будут включать и выключать телевизор.
	Пример
	Разрабатываем библиотеку графического меню и хотите, чтобы пользователи могли использовать меню в разных
	приложениях, не меняя каждый раз код ваших классов.
*/

import "fmt"

type Computer struct {
	isStarted bool
}

func NewComputer() *Computer {
	return &Computer{}
}

// комманда запуска
func (c *Computer) start() {
	c.isStarted = true
}

// комманда выключения
func (c *Computer) shutdown() {
	c.isStarted = false
}

// сигнал ,подающийся по кнопке
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

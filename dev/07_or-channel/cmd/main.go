package main

import (
	"fmt"
	"reflect"
	"time"
)

// or для каждого канала запускается горутина, которая закрывает основной канал если дочерний закрылся
func or(channels ...<-chan interface{}) <-chan interface{} {
	singleChan := make(chan interface{})
	for _, value := range channels {
		go func(ch <-chan interface{}) {
			select {
			case _, opened := <-ch:
				if !opened {
					close(singleChan)
				}
			}
		}(value)
	}
	return singleChan
}

// or2 реализация на reflect. reflect.Select проводит select над массивом типа reflect.SelectCase,
// в котором находятся каналы. По закрытию одного из каналов закрывается и основной канал.
func or2(channels ...<-chan interface{}) <-chan interface{} {
	singleChan := make(chan interface{})
	var sliceChan []reflect.SelectCase
	for _, v := range channels {
		slCh := reflect.SelectCase{
			Dir:  reflect.SelectRecv,
			Chan: reflect.ValueOf(v),
		}
		sliceChan = append(sliceChan, slCh)
	}
	reflect.Select(sliceChan)
	close(singleChan)
	return singleChan
}

func main() {

	sig := func(after time.Duration) <-chan interface{} {
		c := make(chan interface{})
		go func() {
			defer close(c)
			time.Sleep(after)
		}()
		return c
	}
	start := time.Now()
	<-or2(
		sig(2*time.Hour),
		sig(5*time.Minute),
		sig(1*time.Second),
		sig(1*time.Hour),
		sig(1*time.Minute),
	)
	fmt.Printf("foneafter %v", time.Since(start))
}

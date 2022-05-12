package main

import (
	"fmt"
	"os"
)

func Foo() error {
	var err *os.PathError = nil
	return err
}
func main() {
	err := Foo()
	fmt.Println(err)        // nil
	fmt.Println(err == nil) // false
	var err2 interface{}
	fmt.Println(err2)        // nil
	fmt.Println(err2 == nil) // true
}

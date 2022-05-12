Что выведет программа? Объяснить вывод программы.

```go
package main
import (
	"fmt"
	"math/rand"
	"time"
)
func asChan(vs ...int) <-chan int {
	c := make(chan int)
	go func() {
		for _, v := range vs {
			c <- v
			time.Sleep(time.Duration(rand.Intn(1000)) *
				time.Millisecond)
		}
		close(c)
	}()
	return c
}
func merge(a, b <-chan int) <-chan int {
	c := make(chan int)
	go func() {
		for {
			select {
			case v := <-a:
				c <- v
			case v := <-b:
				c <- v
			}
		}
	}()
	return c
}
func main() {
	a := asChan(1, 3, 5, 7)
	b := asChan(2, 4 ,6, 8)
	c := merge(a, b)
	for v := range c {
		fmt.Println(v)
	}
}
```

Ответ:
```
1, 2, 3, 4, 5, 6, 7, 8, 0, 0, 0, 0...

    Благодаря задержке числа передаются: 1,2,3,4...
    Функция megre объединияет два канала в один и в main'e печатаются значения из этого 
общего канала. Однако, поскольку каналы a и b в какой то момент закрываются, а селект 
внутри merge не проверяет закрытость каналов, megre начинает считывать данные из 
закрытых каналов, а закрытые каналы возвращают дефолтное значение типа канала. В нашем 
случае каналы типа int и дефолтное значение - 0.
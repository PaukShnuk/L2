Что выведет программа? Объяснить вывод программы. Рассказать про
внутреннее устройство слайсов и что происходит при передаче их в качестве
аргументов функции.

```go
package main
import (
	"fmt"
)
func main() {
	var s = []string{"1", "2", "3"}
	modifySlice(s)
	fmt.Println(s)
}
func modifySlice(i []string) {
	i[0] = "3"
	i = append(i, "4")
	i[1] = "5"
	i = append(i, "6")
}
```

Ответ:
```
[3 2 3]


    Слайс под собой хранит len, cap и ссылку на массив, при добавлении к слайсу элементов свыше
cap происходит создание нового массива. При передаче слайса по значению len, cap и ссылка на
массив передают свои значения. Таким образом, получается копия слайса ссылающийся на тот же массив.
    В нашем случае при изменении нулевого элемента на "3" новый массив не создатся и в обоих
слайсах (s и i) будут одинаковые значения [3 2 3]. Далее, поскольку len=cap, при аппенде создастся
новый массив и слайс внутри функции уже будет ссылаться на него, а исходный слайс не изменится, таким
образом все дальнейшие изменения слайса внути функции будут относится к новосозданному массиву и,
соответственно только к слайсу внутри функции, а значения первоначального слайса будет равно [3 2 3]

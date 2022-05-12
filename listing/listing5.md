Что выведет программа? Объяснить вывод программы.

```go
package main
type customError struct {
	msg string
}
func (e *customError) Error() string {
	return e.msg
}
func test() *customError {
	{
		// do something
	}
	return nil
}
func main() {
	var err error
	err = test()
	if err != nil {
		println("error")
		return
	}
	println("ok")
}
```

Ответ:
```
error

    По аналогии с listing3 дело в интерфейсах. test() возвращает ссылку на структура, 
которая реализует интерфейс error, таким образом, err проверяется на nil как интерфейс
и только динамическая часть равна nil, а не [nil,nil]
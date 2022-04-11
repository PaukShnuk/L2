package main

import (
	"fmt"
	"strconv"
	"unicode"
)

func charAppend(str *[]rune, value rune, c rune) {
	intValue, err := strconv.Atoi(string(value)) // преобразование руны в int
	if err != nil {
		fmt.Println("error:", err)
	}
	for intValue > 1 { // добавление в строку символов по значению пришедшей руны -1
		*str = append(*str, c)
		intValue--
	}
}

func Unpack(str string) (string, error) {
	var outputString []rune
	var prevSymbolIsDigit = true // флаг принадлежности последнего символа
	var screen bool              // флаг экранирования
	var symbol rune
	inputRuneString := []rune(str)

	for _, value := range inputRuneString {
		if unicode.IsDigit(value) { // если символ - число
			if prevSymbolIsDigit { // и предыдущий символ - число (также, если число - первый символ в строке)
				return "", fmt.Errorf("wrond string")
			}
			if screen { // если текущая цифра экранирована
				symbol = value
				outputString = append(outputString, symbol) // записываем в буфер и выводим
				screen = false
			} else { // если цифра не экранирована
				charAppend(&outputString, value, symbol) // прибывляем символ из буфера в финальную строку
				prevSymbolIsDigit = true
			}

		} else if value == 92 { // если символ - знак экранирвоания
			prevSymbolIsDigit = false
			if screen { // экранирование уже включено
				screen = false
				prevSymbolIsDigit = false
				symbol = value
				outputString = append(outputString, symbol) // запись в буфер и добавление `\` как символа в финальную строку
			} else {
				screen = true
			}

		} else { // если всё остальное
			prevSymbolIsDigit = false
			symbol = value
			screen = false
			outputString = append(outputString, symbol) // добавление символа в финальную строку
		}
	}
	return string(outputString), nil
}

func main() {
	fmt.Println(Unpack(`qwe\\45`))
}

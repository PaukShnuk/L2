package main

import (
	"fmt"
	"strconv"
	"unicode"
)

func charAppend(str []rune, value rune, c rune) []rune {
	intValue, err := strconv.Atoi(string(value))
	if err != nil {
		fmt.Println("error:", err)
	}
	for intValue > 1 {
		str = append(str, c)
		intValue--
	}
	return str
}

func unpack(str string) (string, error) {
	var outputString []rune
	var prevSymbolIsDigit = true
	var screen bool
	var symbol rune
	inputRuneString := []rune(str)

	for _, value := range inputRuneString {
		if unicode.IsDigit(value) { // если символ - число
			if prevSymbolIsDigit {
				return "", fmt.Errorf("wrond string")
			}
			prevSymbolIsDigit = true
			if screen {
				symbol = value
				charAppend(outputString, 1, symbol)
				charAppend(outputString, value, symbol)
				screen = false
			}

			charAppend(outputString, value, symbol)
		}
		if value == 92 { // если символ знак экранирвоания
			prevSymbolIsDigit = false
			if screen { // экранирование уже включено
				screen = false
				prevSymbolIsDigit = false
				symbol = value
			}
			screen = true
		} else { // если всё остальное
			prevSymbolIsDigit = false
			symbol = value
			charAppend(outputString, 1, symbol)
		}
	}
	return string(outputString), nil
}

func main() {
	fmt.Println(unpack("/d1"))
}

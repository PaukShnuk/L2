package main

import (
	"fmt"
	anagram "wb_l2/dev/04_anagramms/pkg"
)

func main() {
	var words = []string{"пятак", "пятак", "листок", "природа", "пятка", "пятка", "столик",
		"тяпка", "слиток"}
	m := anagram.FindAnagrams(&words)
	for key, val := range m {
		fmt.Println(key, *val)
	}
}

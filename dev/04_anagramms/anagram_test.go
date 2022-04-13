package main

import (
	"reflect"
	"testing"
	dev4 "wb_l2/dev/04_anagramms/pkg"
)

func TestWordToRuneMap(t *testing.T) {
	testStr := []struct {
		word string
		wMap map[rune]int
	}{
		{
			"слово",
			map[rune]int{'с': 1, 'л': 1, 'о': 2, 'в': 1},
		},
		{
			"ыыы",
			map[rune]int{'ы': 3},
		},
		{
			"ультра",
			map[rune]int{'у': 1, 'л': 1, 'ь': 1, 'т': 1, 'р': 1, 'а': 1},
		},
	}
	for _, word := range testStr {
		if !dev4.CheckEqualMap(dev4.WordToRuneMap(word.word), word.wMap) {
			t.Errorf("word to rune map error: %v", word.word)
		}
	}
}

func TestCheckEqualMap(t *testing.T) {
	testSet := []struct {
		word1   map[rune]int
		word2   map[rune]int
		isEqual bool
	}{
		{
			map[rune]int{'с': 1, 'л': 1, 'о': 2, 'в': 1},
			map[rune]int{'в': 1, 'о': 2, 'л': 1, 'с': 1},
			true,
		},
		{
			map[rune]int{'п': 2, 'е': 2, 'г': 1, 'а': 1, 'с': 1},
			map[rune]int{'с': 1, 'о': 1, 'л': 1, 'н': 1, 'ц': 1, 'е': 1, 'а': 5},
			false,
		},
		{
			map[rune]int{'ы': 1, 'й': 1, 'ф': 1, 'ц': 1, 'в': 1},
			map[rune]int{'ы': 1, 'й': 1, 'ф': 1, 'ц': 1, 'в': 7},
			false,
		},
		{
			map[rune]int{'а': 100, 'и': 1, 'л': 4, 'б': 8, 'к': 1, 'е': 1, 'т': 2},
			map[rune]int{'т': 2, 'а': 100, 'б': 8, 'л': 4, 'е': 1, 'к': 1, 'и': 1},
			true,
		},
	}
	for _, value := range testSet {
		if dev4.CheckEqualMap(value.word1, value.word2) != value.isEqual {
			t.Errorf("test equal error with set: %v", value)
		}
	}
}

func TestFindAnagrams(t *testing.T) {
	var words = []string{"пятаК", "ПЯТАК", "листок", "пРиРоДа", "пятка", "пятка", "сТОЛИк",
		"тЯпкА", "СлиТок"}
	m := dev4.FindAnagrams(&words)
	check := map[string]*[]string{
		"пятак":  {"пятка", "тяпка"},
		"листок": {"слиток", "столик"},
	}
	if !reflect.DeepEqual(m, check) {
		t.Errorf("find anagram error")
	}
}

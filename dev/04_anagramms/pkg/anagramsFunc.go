package dev4

import (
	"sort"
	"strings"
)

// AnagramField структура, хранящая анаграмы
type AnagramField struct {
	headWord string
	head     map[rune]int
	tail     []string
}

// AnagramFieldList список структур с анаграмами
type AnagramFieldList struct {
	data []*AnagramField
}

func newAnagramFieldList() *AnagramFieldList {
	return &AnagramFieldList{}
}

func newAnagramField(headWord string, head map[rune]int) *AnagramField {
	return &AnagramField{
		headWord: headWord,
		head:     head,
	}
}

// AddToAnagramField метод добавления слова в 'хвост' анаграммы с проверкой на уникальность
func (a *AnagramField) AddToAnagramField(s string) {
	if s != a.headWord {
		for _, value := range a.tail {
			if value == s {
				return
			}
		}
	} else {
		return
	}
	a.tail = append(a.tail, s)
}

// Sort соритровка
func (a *AnagramField) Sort() {
	sort.Strings(a.tail)
}

func (al *AnagramFieldList) addAnagramList(a *AnagramField) {
	al.data = append(al.data, a)
}

// WordToRuneMap ф-я преобразования слова в мапу, где индекс - буква, значение - кол-во её в слове
func WordToRuneMap(word string) map[rune]int {
	hash := make(map[rune]int)
	for _, letter := range word {
		if _, ok := hash[letter]; ok {
			hash[letter]++
		} else {
			hash[letter] = 1
		}
	}
	return hash
}

// CheckEqualMap ф-я проверки слова по кол-ву и совпадению букв для последующего создания или добавления в существуюущую аганрамму
func CheckEqualMap(word1 map[rune]int, word2 map[rune]int) bool {
	if len(word1) != len(word2) {
		return false
	}
	for key, v1 := range word2 {
		if v2, ok := word1[key]; ok {
			if v1 != v2 {
				return false
			}
		} else {
			return false
		}
	}
	return true
}

// AddWordToList метод для добавления (или не добавления) слова в группу анаграмм или создание новой
func (al *AnagramFieldList) AddWordToList(word string) {
	head := WordToRuneMap(word)
	for _, anagram := range al.data {
		if CheckEqualMap(anagram.head, head) {
			anagram.AddToAnagramField(word)
			return
		}
	}
	newField := newAnagramField(word, head)
	al.addAnagramList(newField)
}

// SortAndClear метод, отвечающий за сортировку слов в анаграммах и удаление анаграмм из одного слова
func (al *AnagramFieldList) SortAndClear() *AnagramFieldList {
	NewAFL := newAnagramFieldList()
	for _, anagramf := range al.data {
		if len(anagramf.tail) != 0 {
			anagramf.Sort()
			NewAFL.data = append(NewAFL.data, anagramf)
		}
	}
	return NewAFL
}

// GetFinalFormat метод для приведения группы анаграмм к необходимому формату
func (al *AnagramFieldList) GetFinalFormat() map[string]*[]string {
	format := make(map[string]*[]string)
	for _, anagram := range al.data {
		format[anagram.headWord] = &anagram.tail
	}
	return format
}

// toLowerCase ф-я приведения к нижнему регистру
func toLowerCase(str string) string {
	return strings.ToLower(str)
}

// FindAnagrams ф-я запуска
func FindAnagrams(inString *[]string) map[string]*[]string {
	f := newAnagramFieldList()
	for _, word := range *inString {
		f.AddWordToList(toLowerCase(word))
	}
	f = f.SortAndClear()
	return f.GetFinalFormat()
}

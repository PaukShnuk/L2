package main

type AnagramField struct {
	headWord string
	head     map[rune]int
	tail     []string
}

func NewAnagramField(headWord string, head map[rune]int) *AnagramField {
	return &AnagramField{
		headWord: headWord,
		head:     head,
	}
}

type AnagramFieldList struct {
	data []AnagramField
}

func NewAnagramFieldList() *AnagramFieldList {
	return &AnagramFieldList{}
}

func WordToMap(word string) (hash map[rune]int) {
	for _, letter := range []rune(word) {
		hash[letter]++
	}
	return hash
}

func (a *AnagramFieldList) AddAnagram(word string) {
	head := WordToMap(word)

}

func FindAnagrams(inString *[]string) map[string]*[]string {
	f := NewAnagramFieldList()
	for _, word := range *inString {
		f.AddAnagram(toLowerCase(word)) // todo --> to lower case
	}
	f = f.SortAndClear() // todo --> Сортировочка и удаление non uniq значений
	return f.GetFinalMap // todo -->
}

package internal

import (
	"log"
	"math"
	"sort"
	"strconv"
	"strings"
)

var suffixes = map[string]int{"n": -9, "mi": -6, "m": -3, "K": 3, "M": 6, "G": 9}

// SortByNumSuffix - сортировка по числовым суффиксам
func SortByNumSuffix(in []string, flag *Flag) []string {
	resultData := make([]string, 0, len(in))
	data := make(map[float64][]string)
	keys := make([]float64, 0, len(in)) // столбцы для сортировки

	for _, line := range in {
		str := parseStr(line, flag)
		column, err := strconv.ParseFloat("-inf", 32) // если колонки нет значение -infinity
		if err != nil {
			log.Fatal(err)
		}
		if flag.K <= len(str) { // если столбец существует в строке
			column = getNum(str[flag.K-1]) // получение числового значения из пары значение+суффикс
		}
		if _, ok := data[column]; !ok {
			keys = append(keys, column)
		}
		data[column] = append(data[column], line)
	}

	if flag.R {
		sort.Sort(sort.Reverse(sort.Float64Slice(keys)))
	} else {
		sort.Float64s(keys)
	}
	for _, key := range keys {
		for _, field := range data[key] {
			resultData = append(resultData, field)
		}
	}
	return resultData
}

// получение числового значения из пары значение+суффикс
func getNum(s string) float64 {
	for suffix, degree := range suffixes { // ищем в строке суффикс из пула суффиксов
		if strings.HasSuffix(s, suffix) {
			fstr, err := strconv.ParseFloat(strings.TrimSuffix(s, suffix), 32) // отделение числа от суффикса
			if err != nil {
				fstr, err := strconv.ParseFloat("-inf", 32) // если не получилось считать  возвращаем -inf
				if err != nil {
					log.Fatalln(err)
				}
				return fstr
			}
			return math.Pow10(degree) * fstr // возвращаем полученное числовое значение
			// равное (число*суффикс_в_числовом_виде)
		}
	}
	fstr, err := strconv.ParseFloat(s, 32) // если нет совпадений по суффиксам, предположительно число без него
	if err != nil {
		fstr, err = strconv.ParseFloat("-inf", 32) // если не получилось считать  возвращаем -inf
		if err != nil {
			log.Fatalln(err)
		}
	}
	return fstr
}

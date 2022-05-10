package internal

import (
	"log"
	"sort"
	"strconv"
)

func SortByNumbers(in []string, flag *Flag) []string {
	resultData := make([]string, 0, len(in))
	data := make(map[float64][]string)
	keys := make([]float64, 0, len(in))

	for _, line := range in {
		str := parseStr(line, flag)
		column, err := strconv.ParseFloat("-inf", 32)
		if err != nil {
			log.Fatal(err)
		}
		if flag.K <= len(str) {
			column, err = strconv.ParseFloat(str[flag.K-1], 32)
			if err != nil {
				column, err = strconv.ParseFloat("-inf", 32)
				if err != nil {
					log.Fatal(err)
				}
			}
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

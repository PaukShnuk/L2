package internal

import (
	"sort"
	"strings"
)

var month = map[string]int{
	"JAN": 1,
	"FEB": 2,
	"MAR": 3,
	"APR": 4,
	"MAY": 5,
	"JUN": 6,
	"JUL": 7,
	"AUG": 8,
	"SEP": 9,
	"OCT": 10,
	"NOV": 11,
	"DEC": 12,
}

type Months []string

func (m Months) Len() int {
	return len(m)
}

func (m Months) Swap(i, j int) {
	m[i], m[j] = m[j], m[i]
}

func (m Months) Less(i, j int) bool {
	return month[m[i]] < month[m[j]]
}
func SortByMonth(in []string, flag *Flag) []string {
	resultData := make([]string, 0, len(in))
	data := make(map[string][]string)
	keys := make(Months, 0, len(in))

	for _, line := range in {
		str := parseStr(line, flag)
		var column string
		if flag.K <= len(str) {
			column = str[flag.K-1]
			if _, ok := month[strings.ToUpper(column[:3])]; ok {
				column = strings.ToUpper(column[:3])
			} else {
				column = ""
			}
		}
		if _, ok := data[column]; !ok {
			keys = append(keys, column)
		}
		data[column] = append(data[column], line)
	}
	if flag.R {
		sort.Sort(sort.Reverse(keys))
	} else {
		sort.Sort(keys)
	}
	for _, key := range keys {
		for _, field := range data[key] {
			resultData = append(resultData, field)
		}
	}
	return resultData
}

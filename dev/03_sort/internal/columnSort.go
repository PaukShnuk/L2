package internal

import (
	"sort"
	"strings"
)

func parseStr(s string, f *Flag) []string {
	if f.B {
		return strings.Fields(s)
	}
	return strings.Split(s, " ")
}

func sortByColumn(in []string, flag *Flag) []string {
	resultData := make([]string, 0, len(in))
	data := make(map[string][]string)
	keys := make([]string, 0, len(in))

	for _, line := range in {
		str := parseStr(line, flag)
		var column string
		if flag.K <= len(str) {
			column = str[flag.K-1]
		}
		if _, ok := data[column]; !ok {
			keys = append(keys, column)
		}
		data[column] = append(data[column], line)
	}
	if flag.R {
		sort.Sort(sort.Reverse(sort.StringSlice(keys)))
	} else {
		sort.Strings(keys)
	}

	for _, key := range keys {
		for _, field := range data[key] {
			resultData = append(resultData, field)
		}
	}
	return resultData
}

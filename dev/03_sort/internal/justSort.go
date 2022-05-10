package internal

import "sort"

func mainSort(in []string, flag *Flag) []string {
	if flag.R {
		sort.Sort(sort.Reverse(sort.StringSlice(in)))
	} else {
		sort.Strings(in)
	}
	return in
}

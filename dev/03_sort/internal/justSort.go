package internal

import "sort"

// MainSort - "обычная" соритровка
func MainSort(in []string, flag *Flag) []string {
	if flag.R {
		sort.Sort(sort.Reverse(sort.StringSlice(in)))
	} else {
		sort.Strings(in)
	}
	return in
}

package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestSortByNumbers(t *testing.T) {
	test := []struct {
		input  []string
		output []string
		flag   *internal.Flag
	}{
		{
			[]string{"123 aaa", "-13 ads", "-22.5 ddd"},
			[]string{"-22.5 ddd", "-13 ads", "123 aaa"},
			&internal.Flag{K: 1},
		},
		{
			[]string{" aaa  123 ", "ddd -22.5", "    ads -13"},
			[]string{" aaa  123 ", "    ads -13", "ddd -22.5"},
			&internal.Flag{K: 2, B: true, R: true},
		},
		{
			[]string{"    ads -13", " aaa  123 ", "ddd -22.5", "    ads -13"},
			[]string{" aaa  123 ", "    ads -13", "    ads -13", "ddd -22.5"},
			&internal.Flag{K: 2, B: true, R: true},
		},
	}
	for i, testData := range test {
		if !reflect.DeepEqual(internal.SortByNumbers(testData.input, testData.flag), testData.output) {
			t.Errorf("Numbers sort [%v] error:\n%v\n%v\n", i, testData.output, internal.SortByNumbers(testData.input, testData.flag))
		}
	}
}

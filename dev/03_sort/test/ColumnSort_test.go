package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestSortByColumn(t *testing.T) {
	test := []struct {
		input  []string
		output []string
		flag   *internal.Flag
	}{
		{
			[]string{"bbb bbb", "bbb aaa", "aaa aaa", "ccc ccc"},
			[]string{"bbb aaa", "aaa aaa", "bbb bbb", "ccc ccc"},
			&internal.Flag{K: 2},
		},
		{
			[]string{" bbb  bbb", " bbb  bbb", "bbb aaa", "ccc ccc"},
			[]string{"bbb aaa", " bbb  bbb", " bbb  bbb", "ccc ccc"},
			&internal.Flag{K: 2, B: true},
		},
		{
			[]string{" bbb  bbb", " bbb  bbb", "bbb aaa", "ccc ccc"},
			[]string{"ccc ccc", " bbb  bbb", " bbb  bbb", "bbb aaa"},
			&internal.Flag{K: 2, B: true, R: true},
		},
	}
	for _, testData := range test {
		if !reflect.DeepEqual(internal.SortByColumn(testData.input, testData.flag), testData.output) {
			t.Errorf("Column sort error:\n%v\n%v\n", testData.output, internal.SortByColumn(testData.input, testData.flag))
		}
	}
}

package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestSortByNumSuffix(t *testing.T) {
	test := []struct {
		input  []string
		output []string
		flag   *internal.Flag
	}{
		{
			[]string{"33G aaa", "8n ads", "6n ddd"},
			[]string{"6n ddd", "8n ads", "33G aaa"},
			&internal.Flag{K: 1},
		},
		{
			[]string{" aaa 33G ", "ads        8n ", "ddd 6 "},
			[]string{" aaa 33G ", "ddd 6 ", "ads        8n "},
			&internal.Flag{K: 2, B: true, R: true},
		},
		{
			[]string{"8.5n ddd", "33GGG aaa", "8n ads"},
			[]string{"33GGG aaa", "8n ads", "8.5n ddd"},
			&internal.Flag{K: 1},
		},
		{
			[]string{"8.5n ddd", "lG aaa", "8n ads"},
			[]string{"lG aaa", "8n ads", "8.5n ddd"},
			&internal.Flag{K: 1},
		},
	}
	for i, testData := range test {
		if !reflect.DeepEqual(internal.SortByNumSuffix(testData.input, testData.flag), testData.output) {
			t.Errorf("Numbers suffix sort [%v] error:\n%v\n%v\n", i, testData.output, internal.SortByNumSuffix(testData.input, testData.flag))
		}
	}
}

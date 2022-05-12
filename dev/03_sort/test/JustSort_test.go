package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestMainSort(t *testing.T) {
	test := []struct {
		input  []string
		output []string
		flag   *internal.Flag
	}{
		{
			[]string{"bbb bbb", "kkk kkk", "kkk aaa", "aaa kkk"},
			[]string{"aaa kkk", "bbb bbb", "kkk aaa", "kkk kkk"},
			&internal.Flag{R: false},
		},
		{
			[]string{"bbb bbb", "kkk kkk", "kkk aaa", "aaa kkk"},
			[]string{"kkk kkk", "kkk aaa", "bbb bbb", "aaa kkk"},
			&internal.Flag{R: true},
		},
	}
	for _, testData := range test {
		if !reflect.DeepEqual(internal.MainSort(testData.input, testData.flag), testData.output) {
			t.Errorf("Column sort error:\n%v\n%v\n", testData.output, internal.SortByColumn(testData.input, testData.flag))
		}
	}
}

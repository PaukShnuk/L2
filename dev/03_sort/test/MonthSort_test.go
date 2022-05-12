package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestSortByMonth(t *testing.T) {
	test := []struct {
		input  []string
		output []string
		flag   *internal.Flag
	}{
		{
			[]string{"february bbb", "September aaa", "JuNe aaa", "may ccc"},
			[]string{"february bbb", "may ccc", "JuNe aaa", "September aaa"},
			&internal.Flag{K: 1},
		},
		{
			[]string{" bbb  february", "aaa September", "aaa JuNe", "ccc may"},
			[]string{" bbb  february", "ccc may", "aaa JuNe", "aaa September"},
			&internal.Flag{K: 2, B: true},
		},
		{
			[]string{" bbb  february", "aaa September", "aaa JuNe", "ccc may"},
			[]string{"aaa September", "aaa JuNe", "ccc may", " bbb  february"},
			&internal.Flag{K: 2, B: true, R: true},
		},
	}
	for i, testData := range test {
		if !reflect.DeepEqual(internal.SortByMonth(testData.input, testData.flag), testData.output) {
			t.Errorf("Month sort [%v] error:\n%v\n%v\n", i, testData.output, internal.SortByMonth(testData.input, testData.flag))
		}
	}
}

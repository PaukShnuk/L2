package test

import (
	"reflect"
	"testing"
	"wb_l2/dev/03_sort/internal"
)

func TestDeleteDuplicate(t *testing.T) {
	test := []struct {
		input  []string
		output []string
	}{
		{
			[]string{"bbb bbb", "aaa kkk", "kkk aaa", "aaa kkk"},
			[]string{"bbb bbb", "aaa kkk", "kkk aaa"},
		},
		{
			[]string{"bbbbbb", "bbb bbb", "bbb bbb", "bbb bbb"},
			[]string{"bbbbbb", "bbb bbb"},
		},
	}
	for i, testData := range test {
		if !reflect.DeepEqual(internal.DeleteDuplicate(testData.input), testData.output) {
			t.Errorf("Del duplucates [%v] error:\n%v\n%v\n", i, testData.output, internal.DeleteDuplicate(testData.input))
		}
	}
}

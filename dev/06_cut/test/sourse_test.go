package test

import (
	"reflect"
	"testing"
	cut "wb_l2/dev/06_cut/internal"
)

func TestGetColumns(t *testing.T) {
	type test struct {
		c    cut.Cut
		test map[int][]string
	}

	c1 := cut.Config{
		Flags: cut.Flags{"1", "\t", false},
		Lines: []string{
			"kek\tkek\tkek",
			"line line line",
			"3:3:3:3:3",
			"4rd\t4rd\t4rd\t",
		},
	}
	cu := cut.NewCut(&c1)
	t1 := test{
		c:    *cu,
		test: make(map[int][]string),
	}
	t1.test[0] = append(t1.test[0], "kek", "line line line", "3:3:3:3:3", "4rd")
	t1.test[1] = append(t1.test[1], "kek", "4rd")
	t1.test[2] = append(t1.test[2], "kek", "4rd")
	t1.test[3] = append(t1.test[3], "")

	cu.GetColumns()

	for i := 0; i < 4; i++ {
		if !reflect.DeepEqual(t1.c.Columns[i], t1.test[i]) {
			t.Errorf("error on string: %v", i)
		}
	}
}

func TestGetPrintColumnsIndex(t *testing.T) {
	type testIndex struct {
		cuts      cut.Config
		testindex []int
	}
	type testArr struct {
		a []testIndex
	}

	c1 := cut.Config{
		Flags: cut.Flags{F: "1,2,3,4,5"},
	}

	c2 := cut.Config{
		Flags: cut.Flags{F: ",6,8-"},
	}

	c3 := cut.Config{
		Flags: cut.Flags{F: "2-4,6,8-10"},
	}

	c4 := cut.Config{
		Flags: cut.Flags{F: "4"},
	}

	c5 := cut.Config{
		Flags: cut.Flags{F: "1,4,9"},
	}

	c6 := cut.Config{
		Flags: cut.Flags{F: "9, 1-4, 1"},
	}

	t1 := []int{0, 1, 2, 3, 4}
	t2 := new([]int)
	t3 := []int{1, 2, 3, 5, 7, 8, 9}
	t4 := []int{3}
	t5 := []int{0, 3, 8}
	t6 := []int{8, 0, 1, 2, 3, 0}

	test := testArr{a: []testIndex{
		{
			c1, t1,
		},
		{
			c2, *t2,
		},
		{
			c3, t3,
		},
		{
			c4, t4,
		},
		{
			c5, t5,
		},
		{
			c6, t6,
		},
	}}
	cu := cut.Cut{}
	cu.Columns = make(map[int][]string)
	for i := 0; i < 16; i++ {
		cu.Columns[i] = append(cu.Columns[i], "")
	}
	for index, value := range test.a {
		cu.Config = &value.cuts
		cu.FRange = nil
		cu.GetPrintColumnsIndex()
		if !reflect.DeepEqual(cu.FRange, value.testindex) {
			t.Errorf("get printed column indexes error: %v", index)
		}
	}
}

func TestDelDuplicates(t *testing.T) {
	type test struct {
		cut.Cut
		t []int
	}
	type testArr struct {
		a []test
	}
	t1 := testArr{a: []test{
		{
			Cut: cut.Cut{FRange: []int{1, 1, 1, 1, 3, 4, 5, 5, 5, 6}},
			t:   []int{1, 3, 4, 5, 6},
		},
		{
			Cut: cut.Cut{FRange: []int{0, 0, 0, 9}},
			t:   []int{0, 9},
		},
		{
			Cut: cut.Cut{FRange: []int{5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5}},
			t:   []int{5},
		},
	},
	}

	for index, value := range t1.a {
		value.Cut.DelDuplicates()
		if !reflect.DeepEqual(value.FRange, value.t) {
			t.Errorf("delite duplicates error: %v", index)
		}
	}
}

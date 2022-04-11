package main

import (
	"fmt"
	"testing"
)

func TestUnpack(t *testing.T) {
	testingStrings := []struct {
		inputStr    string
		expectedStr string
		err         error
	}{
		{
			"a4bc2d5e",
			"aaaabccddddde",
			nil,
		},
		{
			"abcd",
			"abcd",
			nil,
		},
		{
			"45",
			"",
			fmt.Errorf("wrong string"),
		},
		{
			`qwe\4\5`,
			"qwe45",
			nil,
		},
		{
			`qwe\\5`,
			`qwe\\\\\`,
			nil,
		},
		{
			`qwe\45`,
			"qwe44444",
			nil,
		},
		{
			"",
			"",
			nil,
		},
		{
			`b4b5\\`,
			`bbbbbbbbb\`,
			nil,
		},
	}
	for _, testItem := range testingStrings {
		s, err := Unpack(testItem.inputStr)
		if s != testItem.expectedStr {
			t.Errorf("fail test with string: %v", testItem.inputStr)
		}
		if !((err != nil && testItem.err != nil) || (err == nil && testItem.err == nil)) {
			t.Errorf("fail test with string: %v err: %v", testItem.inputStr, testItem.err)
		}
	}
}

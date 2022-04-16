package main

import grep "wb_l2/dev/05_grep/internal"

func main() {
	Grep := grep.NewGrep()
	err := Grep.InitGrep()
	if err != nil {
		return
	}
	Grep.Start()
}

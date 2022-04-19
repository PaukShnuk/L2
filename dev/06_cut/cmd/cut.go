package main

import (
	cut "wb_l2/dev/06_cut/internal"
)

func main() {
	c := cut.NewConfig()
	cu := cut.NewCut(c)
	cu.Start()
}

package main

import (
	"wb_l2/dev/03_sort/internal"
)

func main() {
	file := internal.NewTextFile()
	file.ParseFlags()
	file.SetInputPath()
	file.SetOutputPath()
	file.Read()
	internal.RunSort(file)
	file.Write()
}

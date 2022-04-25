package main

import (
	"os"
	shell "wb_l2/dev/08_shell/internal"
)

func main() {
	sh := shell.NewShell(os.Stdout, os.Stdin)
	err := sh.Run()
	if err != nil {
		return
	}
}

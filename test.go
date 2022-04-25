package main

import (
	"fmt"
	"github.com/mitchellh/go-ps"
	"os"
)

func main() {
	processList, _ := ps.Processes()

	for proc := range processList {
		var process ps.Process
		process = processList[proc]
		fmt.Fprintf(os.Stdout, "%v\t%v\t%v\n", process.Pid(), process.PPid(), process.Executable())

	}

}

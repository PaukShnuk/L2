package main

import (
	"fmt"
	"github.com/beevik/ntp"
	"log"
	"os"
)

func main() {

	if time, err := ntp.Time("0.beevik-ntp.pool.ntp.org"); err != nil {
		w := log.New(os.Stderr, "TimeErr: ", 0)
		w.Println(err)
		os.Exit(1)
	} else {
		fmt.Println(time)
	}
}

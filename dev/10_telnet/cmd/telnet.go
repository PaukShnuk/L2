package main

import (
	"os"
	telnet "wb_l2/dev/10_telnet/internal"
)

func main() {
	c := telnet.NewConfig()
	c.InitConfig()
	t := telnet.NewTelnet(c, os.Stdin, os.Stdout)
	t.Run()
}

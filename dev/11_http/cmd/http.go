package main

import "wb_l2/dev/11_http/server"

func main() {
	conf := server.NewConfig()
	conf.DefaultSet()
	srv := server.NewServer(conf)
	srv.Run()
}

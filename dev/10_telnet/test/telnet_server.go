package main

import (
	"fmt"
	"io"
	"net"
	"os"
)

func main() {
	fmt.Println("Server is starting...")
	ln, _ := net.Listen("tcp", ":8080")
	conn, _ := ln.Accept()
	defer ln.Close()
	defer conn.Close()
	fmt.Println("Peer is connected!")
	stop := make(chan struct{})

	go func() {
		io.Copy(os.Stdout, conn)
		close(stop)
	}()

	go func() {
		io.Copy(conn, os.Stdin)
		close(stop)
	}()

	<-stop
}

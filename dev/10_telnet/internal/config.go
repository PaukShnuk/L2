package telnet

import (
	"bufio"
	"fmt"
	"log"
	"net"
	"time"
)

type telnet struct {
	*Config
	conn    net.Conn
	errChan chan error
}

func newTelnet(c Config) *telnet {
	return &telnet{
		Config:  &c,
		errChan: make(chan error),
	}
}
func (t *telnet) getFullAddress() string {
	return net.JoinHostPort(t.Host, t.Port)
}

func (t *telnet) connect() {
	conn, err := net.DialTimeout("tcp", t.getFullAddress(), t.TimeOutDuration)
	if err != nil {
		time.Sleep(t.TimeOutDuration)
		log.Fatalln("failed connection")
	}
	t.conn = conn
	fmt.Println("Successfully connected!")
}

func (t *telnet) disconnect() {
	if err := t.conn.Close(); err != nil {
		log.Fatal("disconnect error")
	}
}

func (t *telnet) send() {

}

func (t *telnet) receive() {
	r := bufio.NewReader(t.conn)
	for {
		line, err := r.ReadString('\n')
		if err != nil {
			t.errChan <- err
		}
		fmt.Print(line)
	}
}

func (t *telnet) Run() {
	t.connect()
	// todo ctrl+D
	go t.send()
	go t.receive()
	select {
	case err := <-t.errChan:
		log.Println(err)
		t.disconnect()
		return
	case <-sigint:
		t.disconnect()
		return
	}
}

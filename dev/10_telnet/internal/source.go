package telnet

import (
	"fmt"
	"io"
	"log"
	"net"
	"os"
	"os/signal"
	"syscall"
	"time"
)

// Telnet - структура с основными настройками утилиты
type Telnet struct {
	*Config
	Conn    net.Conn
	errChan chan error
	in      io.Reader
	out     io.Writer
}

// NewTelnet - создание нового телнет клиента
func NewTelnet(c *Config, ind io.Reader, outd io.Writer) *Telnet {
	return &Telnet{
		Config:  c,
		errChan: make(chan error),
		in:      ind,
		out:     outd,
	}
}
func (t *Telnet) getFullAddress() string {
	return net.JoinHostPort(t.Host, t.Port)
}

func (t *Telnet) connect() {
	conn, err := net.DialTimeout("tcp", t.getFullAddress(), t.TimeOutDuration)
	if err != nil {
		time.Sleep(t.TimeOutDuration)
		log.Fatalln("failed connection: ", err)
	}
	t.Conn = conn
	fmt.Println("Successfully connected!")
}

func (t *Telnet) disconnect() {
	if err := t.Conn.Close(); err != nil {
		log.Fatal("disconnect error")
	}
}

func (t *Telnet) send() error {
	if _, err := io.Copy(t.Conn, t.in); err != nil {
		return err
	}
	log.Println("EOF")
	return nil
}

func (t *Telnet) receive() error {
	if _, err := io.Copy(t.out, t.Conn); err != nil {
		return err
	}
	log.Println("disconnect from server")
	return nil
}

// Run - ф-я запуска телнет утилиты
func (t *Telnet) Run() {
	sigint := make(chan os.Signal, 1)
	signal.Notify(sigint, syscall.SIGINT, syscall.SIGTERM) // ctrl+d
	t.connect()

	go func() {
		if err := t.send(); err != nil {
			t.errChan <- err
			log.Println(err)
		}
	}()

	go func() {
		if err := t.receive(); err != nil {
			t.errChan <- err
			log.Println(err)
		}
	}()

	select {
	case err := <-t.errChan:
		t.disconnect()
		log.Println(err)
	case <-sigint:
		t.disconnect()
		log.Println("telnet: exit")
	}
}

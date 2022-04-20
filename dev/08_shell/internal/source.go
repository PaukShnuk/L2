package shell

import (
	"bufio"
	"io"
	"os"
)

type Shell struct {
	Out io.Writer
	In  io.Reader
}

func NewShell(w io.Writer, r io.Reader) *Shell {
	return &Shell{w, r}
}

func (s *Shell) cd() {

}

func (s *Shell) pwd() {

}

func (s *Shell) echo() {

}

func (s *Shell) kill() {

}

func (s *Shell) ps() {

}

func (s *Shell) GetLines(str string) error {
	src := bufio.NewScanner(s.In)
	for src.Scan() && (src.Text() != `\quit`) {

	}
	if src.Err() != nil {
		os.Exit(0)
	}
	return nil
}

func (s *Shell) CaseShell() {

}

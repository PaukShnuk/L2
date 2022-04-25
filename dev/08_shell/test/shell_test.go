package test

import (
	"bytes"
	"fmt"
	"os"
	"strings"
	"testing"
	shell "wb_l2/dev/08_shell/internal"
)

func TestShell(t *testing.T) {
	rBuff := &bytes.Buffer{}
	wBuff := &bytes.Buffer{}
	sh := shell.NewShell(wBuff, rBuff)

	t.Run("testPwd", func(t *testing.T) {
		rBuff.WriteString("pwd")
		sh.Run()
		out := wBuff.String()
		path := strings.Split(strings.Split(out, " ")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell

		wd, err := os.Getwd()
		if err != nil {
			t.Errorf("Error with os.Getwd\n")
		}
		if wd != path {
			t.Errorf("CMD pwd not work correct: exp: %v rec: %v\n", wd, path)
		}
	})
	wBuff.Reset()
	t.Run("testCd", func(t *testing.T) {
		rBuff.WriteString("cd testDirectory")

		pathStart, err := os.Getwd()
		if err != nil {
			t.Errorf("Error with os.Getwd\n")
		}
		pathStart += "/testDirectory"

		sh.Run()
		err = os.Chdir("dirForTest")

		pathEnd, err := os.Getwd()
		if err != nil {
			t.Errorf("Error with os.Getwd\n")
		}

		if pathStart != pathEnd {
			t.Errorf("CMD CD not work correct: exp: %v rec: %v\n", pathStart, pathEnd)
		}
	})
	wBuff.Reset()
	t.Run("testEcho", func(t *testing.T) {
		rBuff.WriteString("echo aaaa      bbbb")
		sh.Run()
		out := wBuff.String()
		fmt.Println(out)
		echo := strings.Split(strings.Split(out, "$")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell
		str := " aaaa bbbb"
		if echo != str {
			t.Errorf("CMD echo not work correct: exp: %v rec: %v\n", str, echo)
		}
	})

	wBuff.Reset()
	t.Run("testEchoStr", func(t *testing.T) {
		rBuff.WriteString(`echo "aaaa    bbbb   c"`)
		sh.Run()
		out := wBuff.String()
		fmt.Println(out)
		echo := strings.Split(strings.Split(out, "$ ")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell
		str := "aaaa    bbbb   c"
		if echo != str {
			t.Errorf("CMD echo not work correct:\nexp: %v\nrec: %v\n", str, echo)
		}
	})

	wBuff.Reset()
	t.Run("testConvCMD1", func(t *testing.T) {
		rBuff.WriteString("echo aaa bb | echo | echo | echo")
		sh.Run()
		out := wBuff.String()
		fmt.Println(out)
		echo := strings.Split(strings.Split(out, "$")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell
		str := " aaa bb"
		if echo != str {
			t.Errorf("CMD conveyor 1 not work correct: exp: %v rec: %v\n", str, echo)
		}
	})
	wBuff.Reset()
	t.Run("testConvCMD2", func(t *testing.T) {
		rBuff.WriteString("pwd | echo")
		sh.Run()
		out := wBuff.String()
		fmt.Println(out)
		echo := strings.Split(strings.Split(out, " ")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell
		wd, err := os.Getwd()
		if err != nil {
			t.Errorf("Error with os.Getwd\n")
		}
		if echo != wd {
			t.Errorf("CMD conveyor 2 not work correct: exp: %v rec: %v\n", wd, echo)
		}
	})

	wBuff.Reset()
	t.Run("testConvCMD3", func(t *testing.T) {
		rBuff.WriteString("exec echo aaaa | echo")
		sh.Run()
		out := wBuff.String()
		fmt.Println(out)
		echo := strings.Split(strings.Split(out, "$")[1], "\n")[0] // отделяем вывод команды от вывода текущей информации Shell
		str := " aaaa"
		if echo != str {
			t.Errorf("CMD conveyor 3 not work correct: exp: %v rec: %v\n", str, echo)
		}
	})
}

package shell

import (
	"bufio"
	"bytes"
	"fmt"
	"github.com/mitchellh/go-ps"
	"io"
	"log"
	"os"
	"os/exec"
	"strconv"
	"strings"
	"syscall"
)

// Shell - основная структура программы с конфигов
type Shell struct {
	Out      io.Writer
	In       io.Reader
	Pipe     bool
	PipeBuff *bytes.Buffer
}

// NewShell - инициализация Shell
func NewShell(w io.Writer, r io.Reader) *Shell {
	return &Shell{Out: w, In: r}
}

// Run - центровая ф-я заупска
func (s *Shell) Run() error {
	if err := s.GetLines(); err != nil {
		if _, err := fmt.Fprintln(s.Out, err); err != nil {
			log.Fatalln(err)
		}
	}
	return nil
}

func (s *Shell) cd(arg string) error {
	err := os.Chdir(arg)
	if err != nil {
		return err
	}
	return nil
}

// pwd - напечатать полныфй путь до рабочей дериктории
func (s *Shell) pwd() error {

	out := s.Out
	path, err := os.Getwd()

	if err != nil {
		return err
	}

	if s.Pipe {
		out = s.PipeBuff
	}
	_, err = fmt.Fprintln(out, path)
	if err != nil {
		return err
	}
	return nil
}

// echo - реализация linux-команды echo
func (s *Shell) echo(args []string, fullLine string) error {
	printer := s.Out
	start := args[0]
	end := args[len(args)-1]

	if s.Pipe {
		printer = s.PipeBuff
	}
	if start[0] == '"' && end[len(end)-1] == '"' {
		line := strings.TrimPrefix(fullLine, "echo ")
		line = strings.TrimLeft(line, `"`)
		line = strings.TrimRight(line, `"`)
		if _, err := fmt.Fprintln(printer, line); err != nil {
			return err
		}
	} else {
		if _, err := fmt.Fprintln(printer, strings.Join(args, " ")); err != nil {
			return err
		}
	}
	return nil
}

// kill - терминирование процесса по id
func (s *Shell) kill(pid []string) []error {
	var errs []error
	for _, value := range pid {
		if id, err := strconv.Atoi(value); err != nil {
			errs = append(errs, err)
		} else {
			if err := syscall.Kill(id, syscall.SIGTERM); err != nil {
				kerr := fmt.Errorf("kill error proc id = %v", id)
				errs = append(errs, kerr)
			}
		}
	}
	return errs
}

// ps - вывод списка процессов
func (s *Shell) ps() error {
	processList, err := ps.Processes()
	if err != nil {
		return err
	}
	out := s.Out
	if s.Pipe {
		out = s.PipeBuff
	}
	for proc := range processList {
		var process ps.Process
		process = processList[proc]
		_, err = fmt.Fprintf(out, "%v\t%v\t%v\n", process.Pid(), process.PPid(), process.Executable())
		if err != nil {
			return err
		}
	}
	return nil
}

// GetLines - чтение строк
func (s *Shell) GetLines() error {
	src := bufio.NewScanner(s.In)
	fmt.Fprint(s.Out, "$ ")
	for src.Scan() && (src.Text() != `\quit`) {
		line := src.Text()
		err := s.Fork(line)
		if err != nil {
			return err
		}
		fmt.Fprint(s.Out, "$ ")
	}
	if src.Err() != nil {
		os.Exit(0)
	}
	return nil
}

// Exec - поддержка exec-команд
func (s *Shell) Exec(line []string) error {
	var cmd *exec.Cmd
	if len(line) == 1 {
		cmd = exec.Command(line[0])
	} else {
		cmd = exec.Command(line[0], line[1:]...)
	}
	cmd.Stdout = os.Stdout
	cmd.Stderr = os.Stderr
	if s.Pipe {
		cmd.Stdout = s.PipeBuff
	}
	err := cmd.Run()
	if err != nil {
		return err
	}
	return nil
}

// CaseShell - выбор команд
func (s *Shell) CaseShell(line string) error {
	commandAndArgs := strings.Fields(line)
	if len(commandAndArgs) != 0 {
		switch commandAndArgs[0] {
		case "cd":
			if len(commandAndArgs) == 2 {
				err := s.cd(commandAndArgs[1])
				if err != nil {
					_, err := fmt.Fprintln(s.Out, err)
					if err != nil {
						return err
					}
				}
			} else {
				return errCd
			}
		case "ps":
			if len(commandAndArgs) == 1 {
				if err := s.ps(); err != nil {
					return err
				}
			} else {
				return errPs
			}
		case "pwd":
			if len(commandAndArgs) != 1 {
				return errPwd
			}
			err := s.pwd()
			if err != nil {
				return err
			}

		case "echo":
			if len(commandAndArgs) != 1 {
				err := s.echo(commandAndArgs[1:], line)
				if err != nil {
					return err
				}
			} else {
				return errEcho
			}
		case "kill":
			if len(commandAndArgs) != 1 {
				errs := s.kill(commandAndArgs[1:])
				if errs != nil {
					for _, err := range errs {
						fmt.Sprintln(s.Out, err)
					}
				}
			} else {
				return errKill
			}
		case "exec":
			if len(commandAndArgs) != 1 {
				err := s.Exec(commandAndArgs[1:])
				if err != nil {
					return err
				}
			} else {
				return errExec
			}
		default:
			if _, err := fmt.Fprintf(s.Out, "unknown command '%v'\n", commandAndArgs[0]); err != nil {
				return err
			}
		}
	}
	return nil
}

// CheckPipes проверка строки на наличие пайпов
func (s *Shell) CheckPipes(line string) error {
	strCmd := strings.Split(line, "|")
	if len(strCmd) > 1 {
		s.Pipe = true
		s.PipeBuff = new(bytes.Buffer)
		for index, value := range strCmd {
			if index != 0 {
				comm1 := strings.Fields(value)

				if len(comm1) > 1 {
					comm1New := make([]string, 2, 2)
					comm1New[0], comm1New[1] = comm1[0], s.PipeBuff.String()
					comm1 = comm1New
				} else {
					comm1 = append(comm1, s.PipeBuff.String())
				}
				value = strings.Join(comm1, " ")
			}
			s.PipeBuff.Reset()
			if index == len(strCmd)-1 {
				s.Pipe = false
			}
			if err := s.CaseShell(value); err != nil {
				if _, err := fmt.Fprintln(s.Out, err); err != nil {
					return err
				}
			}
		}
	} else {
		if err := s.CaseShell(line); err != nil {
			if _, err = fmt.Fprintln(s.Out, err); err != nil {
				return err
			}
		}
	}
	return nil
}

// Fork - обработка форк-команд (& на конце)
func (s *Shell) Fork(str string) error {
	index := 0
	str = strings.TrimRight(str, " ")
	if strings.Contains(str, "&") {
		id, _, err := syscall.Syscall(syscall.SYS_FORK, 0, 0, 0)
		if err != 0 {
			os.Exit(1)
		} else if id == 0 { // процесс-потомок пройдёт else
			str = strings.TrimSuffix(str, "&")
			index++
			if _, err := fmt.Fprintf(s.Out, "[%v]\t%v\n", index, os.Getpid()); err != nil {
				return err
			}
			if err := s.CheckPipes(str); err != nil {
				return err
			}
			if _, err := fmt.Fprintf(s.Out, "[%v]+\tЗавершён\n", index); err != nil {
				return err
			}
			index--
			os.Exit(0)
		}
	} else {
		err := s.CheckPipes(str)
		if err != nil {
			return err
		}
	}
	return nil
}

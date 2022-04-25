package shell

import "errors"

var (
	CdErr   = errors.New("cd must have 1 argument")
	PwdErr  = errors.New("pwd must not have any arguments")
	EchoErr = errors.New("echo must have 1+ argument")
	KillErr = errors.New("kill must have 1+ argument")
	ExecErr = errors.New("exec must have 1+ argument")
	psErr   = errors.New("exec must not have any argument")
)

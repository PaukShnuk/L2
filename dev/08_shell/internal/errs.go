package shell

import "errors"

var (
	errCd   = errors.New("cd must have 1 argument")
	errPwd  = errors.New("pwd must not have any arguments")
	errEcho = errors.New("echo must have 1+ argument")
	errKill = errors.New("kill must have 1+ argument")
	errExec = errors.New("exec must have 1+ argument")
	errPs   = errors.New("exec must not have any argument")
)

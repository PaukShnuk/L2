package test

import (
	"testing"
	grep "wb_l2/dev/05_grep/internal"
)

// TestCheckLine тест проверки строки по паттерну по флагам
func TestCheckLine(t *testing.T) {
	lines := []string{"abc", "AbC", "abcAAA"}
	c1 := grep.NewConfig()
	c1.F = true
	c1.Pattern = "abc"
	f1 := grep.Filter{Config: c1}

	c2 := grep.NewConfig()
	c2.V = true
	c2.Pattern = "abc"
	f2 := grep.Filter{Config: c2}

	c3 := grep.NewConfig()
	c3.I = true
	c3.Pattern = "abc"
	f3 := grep.Filter{Config: c3}

	c4 := grep.NewConfig()
	c4.I, c4.V, c4.F = true, true, true
	c4.Pattern = "abc"
	f4 := grep.Filter{Config: c4}

	if f1.CheckLine(lines[0]) != true || f1.CheckLine(lines[1]) != false || f1.CheckLine(lines[2]) != false {
		t.Errorf("Inccorect check with flag f\n")
	}
	if f2.CheckLine(lines[0]) != false || f2.CheckLine(lines[1]) != true || f2.CheckLine(lines[2]) != false {
		t.Errorf("Inccorect check with flag v\n")
	}
	if f3.CheckLine(lines[0]) != true || f3.CheckLine(lines[1]) != true || f3.CheckLine(lines[2]) != true {
		t.Errorf("Inccorect check with flag i\n")
	}
	if f4.CheckLine(lines[0]) != false || f4.CheckLine(lines[1]) != false || f4.CheckLine(lines[2]) != true {
		t.Errorf("Inccorect check with flag v&i&f\n")
	}
}

package internal

func equal(a, b []string) bool {
	if len(a) != len(b) {
		return false
	}
	for i, v := range a {
		if v != b[i] {
			return false
		}
	}
	return true
}

func RunSort(file *TextFile) {
	var output []string
	if file.U {
		file.dateStr = deleteDuplicate(file.dateStr)
	}
	if file.M {
		output = SortByMonth(file.dateStr, file.Flag)
	} else if file.H {
		output = SortByNumSuffix(file.dateStr, file.Flag)
	} else if file.N {
		output = SortByNumbers(file.dateStr, file.Flag)
	} else if file.K > 1 {
		output = sortByColumn(file.dateStr, file.Flag)
	} else {
		output = mainSort(file.dateStr, file.Flag)
	}

	if file.C {
		if equal(file.dateStr, output) {
			file.Sorted = true
		} else {
			file.Sorted = false
		}
	} else {
		file.dateStr = output
	}
}
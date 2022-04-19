package cut

import (
	"fmt"
)

// Start ф-я запуска
func (cu *Cut) Start() error {
	cu.SetFlag()
	cu.GetColumns()
	cu.GetPrintColumnsIndex()
	if !cu.CheckColumnsForF() {
		fmt.Println("columns go beyond the boundaries of the entered data")
	} else {
		cu.PrintColumns()
	}

	return nil
}

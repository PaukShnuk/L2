package cut

import (
	"log"
)

// Start ф-я запуска
func (cu *Cut) Start() {
	cu.SetFlag()
	cu.GetColumns()
	cu.GetPrintColumnsIndex()
	if !cu.CheckColumnsForF() {
		log.Fatalln("columns go beyond the boundaries of the entered data")
	} else {
		cu.PrintColumns()
	}
}

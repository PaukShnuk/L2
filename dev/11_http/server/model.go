package server

import (
	"fmt"
	"time"
	"wb_l2/dev/11_http/calendar"
)

type event struct {
	ID          string `json:"id"`
	Date        string `json:"date"`
	UserID      string `json:"user_id"`
	Title       string `json:"title"`
	Description string `json:"description"`
}

// ToModel - ф-я преобразования json-ивента в запись в калентаре
func (e *event) ToModel() *calendar.Event {
	event := calendar.NewEvent()
	event.ID = e.ID
	event.UserID = e.UserID
	event.Title = e.Title
	event.Description = e.Description
	event.Date, _ = time.Parse("2006-01-02", e.Date)
	return event
}

// DeleteValidate - проверка пришедших данных для уаления ивента на корректность
func (e *event) DeleteValidate() bool {
	if e.ID == "" {
		return false
	}
	return true
}

// CreateValidate - проверка пришедших данных для создания ивента на корректность
func (e *event) CreateValidate() bool {
	if e.UserID == "" || e.Title == "" {
		return false
	}
	var err error
	if _, err = time.Parse("2006-01-02", e.Date); err != nil {
		return false
	}
	return true
}

// UpdateValidate - проверка пришедших данных для обновления ивента на корректность
func (e *event) UpdateValidate() bool {
	if e.ID == "" {
		return false
	}

	if e.Date != "" {
		var err error
		if _, err = time.Parse("2006-01-02", e.Date); err != nil {
			fmt.Println(e.Date)
			return false
		}
	}
	return true
}

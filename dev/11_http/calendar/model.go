package calendar

import "time"

// Event - json-структура ивента
type Event struct {
	ID          string    `json:"id"`
	Date        time.Time `json:"date"`
	UserID      string    `json:"user_id"`
	Title       string    `json:"title"`
	Description string    `json:"description"`
}

// NewEvent - выделение памяти на новый ивент
func NewEvent() *Event {
	return new(Event)
}

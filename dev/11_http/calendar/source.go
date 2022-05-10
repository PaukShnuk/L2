package calendar

import (
	"errors"
	"github.com/google/uuid"
	"log"
	"sync"
	"time"
)

var errGet = errors.New("sorry, event is not found")

// CacheCalendar - структура, хранящая в себе события
type CacheCalendar struct {
	*sync.RWMutex
	events map[string]*Event
}

// NewCacheCalendar - создание нового Календаря
func NewCacheCalendar() *CacheCalendar {
	return &CacheCalendar{
		RWMutex: &sync.RWMutex{},
		events:  make(map[string]*Event),
	}
}

// GenerateUID - ф-я для генерации уникального id по гугловской библиотечке
func (c *CacheCalendar) GenerateUID() string {
	id := uuid.New()
	return id.String()
}

// CreateEvent - создание ивента в календаре
func (c *CacheCalendar) CreateEvent(e *Event) {
	c.Lock()
	for {
		id := c.GenerateUID()
		if _, ok := c.events[id]; !ok {
			e.ID = id
			c.events[id] = e
			break
		}
	}
	c.Unlock()
}

// GetEvent - получение ивента из календаря
func (c *CacheCalendar) GetEvent(uid string) (*Event, error) {
	c.RLock()
	defer c.RUnlock()
	if event, ok := c.events[uid]; ok {
		return event, nil
	}
	log.Println("Event not found")
	return nil, errGet
}

// DeleteEvent - удаление иветна их календаря
func (c *CacheCalendar) DeleteEvent(uid string) error {
	if _, err := c.GetEvent(uid); err != nil {
		return err
	}
	c.Lock()
	delete(c.events, uid)
	c.Unlock()
	return nil
}

// UpdateEvent - обновление ивента
func (c *CacheCalendar) UpdateEvent(uid string, e *Event) error {
	inmemory, err := c.GetEvent(uid)
	if err != nil {
		return err
	}
	c.Lock()
	if e.Title != "" {
		inmemory.Title = e.Title
	}
	if e.Description != "" {
		inmemory.Description = e.Description
	}
	if e.UserID != "" {
		inmemory.UserID = e.UserID
	}
	if !e.Date.IsZero() {
		inmemory.Date = e.Date
	}
	c.Unlock()
	return nil
}

// DailyEvents - получение ивентов за день
func (c *CacheCalendar) DailyEvents(usr string, date time.Time) []*Event {
	var events []*Event
	c.RLock()
	for _, event := range c.events {
		if event.UserID == usr && event.Date.Equal(date) {
			events = append(events, event)
		}
	}
	c.RUnlock()
	return events
}

// WeeklyEvents - получение ивентов за неделю
func (c *CacheCalendar) WeeklyEvents(usr string, date time.Time) []*Event {
	var events []*Event
	c.RLock()

	for _, event := range c.events {
		start := date
		end := date.AddDate(0, 0, 7)
		if event.UserID == usr && (event.Date.After(start) && event.Date.Before(end) ||
			event.Date.Equal(start) || event.Date.Equal(end)) {
			events = append(events, event)
		}
	}

	c.RUnlock()
	return events
}

// MonthlyEvents - получение ивентов за месяц
func (c *CacheCalendar) MonthlyEvents(usr string, date time.Time) []*Event {
	var events []*Event
	c.RLock()

	for _, event := range c.events {
		start := date
		end := date.AddDate(0, 1, 0)
		if event.UserID == usr && (event.Date.After(start) && event.Date.Before(end) ||
			event.Date.Equal(start) || event.Date.Equal(end)) {
			events = append(events, event)
		}
	}

	c.Unlock()
	return events
}

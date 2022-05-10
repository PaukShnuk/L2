package server

import (
	"encoding/json"
	"fmt"
	"net/http"
	"time"
	"wb_l2/dev/11_http/calendar"
)

// Error - сообщение об ошибке
type Error struct {
	Msg string `json:"error"`
}

// Result - сообщение о результате
type Result struct {
	Msg interface{} `json:"result"`
}

//http ответ
func jsonResponse(err bool, w http.ResponseWriter, code int, msg interface{}) {
	w.Header().Set("Content-Type", "application/json; charset=UTF-8")
	w.WriteHeader(code)
	if err {
		errResp := Error{
			Msg: msg.(string),
		}
		if err := json.NewEncoder(w).Encode(errResp); err != nil {
			http.Error(w, "responseJson error", http.StatusInternalServerError)

		}
	} else {
		resResp := Result{
			Msg: msg,
		}
		if err := json.NewEncoder(w).Encode(resResp); err != nil {
			http.Error(w, "responseJson error", http.StatusInternalServerError)
		}
	}
}

// Handler - обработчик календаря
type Handler struct {
	Calendar *calendar.CacheCalendar
}

// NewHandler - новый обработчик
func NewHandler() *Handler {
	return &Handler{
		calendar.NewCacheCalendar(),
	}
}

// AddEvent - добавление ивента
func (h *Handler) AddEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "POST" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad %v method", r.Method))
		return
	}
	e := &event{}
	if err := json.NewDecoder(r.Body).Decode(e); err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	if !e.CreateValidate() {
		jsonResponse(true, w, http.StatusBadRequest, "User_id is empty or Time is not formatted")
		return
	}
	acceptedEvent := e.ToModel()
	h.Calendar.CreateEvent(acceptedEvent)
	jsonResponse(false, w, http.StatusOK, "Event was creating")
}

// DeleteEvent - удаление ивента
func (h *Handler) DeleteEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "POST" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad %v method", r.Method))
		return
	}
	e := &event{}
	if err := json.NewDecoder(r.Body).Decode(e); err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	if !e.DeleteValidate() {
		jsonResponse(true, w, http.StatusBadRequest, "ID is empty")
		return
	}
	if err := h.Calendar.DeleteEvent(e.ID); err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	jsonResponse(false, w, http.StatusOK, "Event was deleted")
}

// UpdateEvent - обновление ивента
func (h *Handler) UpdateEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "POST" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad %v method", r.Method))
		return
	}
	e := &event{}
	if err := json.NewDecoder(r.Body).Decode(e); err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	if !e.UpdateValidate() {
		jsonResponse(true, w, http.StatusBadRequest, "Bad time format")
		return
	}
	acceptedEvent := e.ToModel()
	if err := h.Calendar.UpdateEvent(acceptedEvent.ID, acceptedEvent); err != nil {
		jsonResponse(true, w, http.StatusBadRequest, "No event with current ID")
		return
	}
	jsonResponse(false, w, http.StatusOK, "Event was update")
}

// EventForDay - возвращение ивентов за день
func (h *Handler) EventForDay(w http.ResponseWriter, r *http.Request) {
	if r.Method != "GET" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad method %v", r.Method))
		return
	}
	if !r.URL.Query().Has("user_id") || !r.URL.Query().Has("date") {
		jsonResponse(true, w, http.StatusBadRequest, "Not enough parameters")
		return
	}
	idParam := r.URL.Query().Get("user_id")
	dateParam := r.URL.Query().Get("date")

	date, err := time.Parse("2006-01-02", dateParam)
	if err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	events := h.Calendar.DailyEvents(idParam, date)
	jsonResponse(false, w, http.StatusOK, events)
}

// EventForWeek - возвращение ивентов за неделю
func (h *Handler) EventForWeek(w http.ResponseWriter, r *http.Request) {
	if r.Method != "GET" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad method %v", r.Method))
		return
	}
	if !r.URL.Query().Has("user_id") || !r.URL.Query().Has("date") {
		jsonResponse(true, w, http.StatusBadRequest, "Not enough parameters")
		return
	}
	idParam := r.URL.Query().Get("user_id")
	dateParam := r.URL.Query().Get("date")

	date, err := time.Parse("2006-01-02", dateParam)
	if err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	events := h.Calendar.WeeklyEvents(idParam, date)
	jsonResponse(false, w, http.StatusOK, events)
}

// EventForMonth - возвращение ивентов за месяц
func (h *Handler) EventForMonth(w http.ResponseWriter, r *http.Request) {
	if r.Method != "GET" {
		jsonResponse(true, w, http.StatusMethodNotAllowed, fmt.Sprintf("bad method %v", r.Method))
		return
	}
	if !r.URL.Query().Has("user_id") || !r.URL.Query().Has("date") {
		jsonResponse(true, w, http.StatusBadRequest, "Not enough parameters")
		return
	}
	idParam := r.URL.Query().Get("user_id")
	dateParam := r.URL.Query().Get("date")

	date, err := time.Parse("2006-01-02", dateParam)
	if err != nil {
		jsonResponse(true, w, http.StatusBadRequest, err.Error())
		return
	}
	events := h.Calendar.MonthlyEvents(idParam, date)
	jsonResponse(false, w, http.StatusOK, events)
}

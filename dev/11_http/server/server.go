package server

import (
	"context"
	"log"
	"net/http"
	"os"
	"os/signal"
	"time"
)

// Server - структура сервера
type Server struct {
	Config   *Config
	Handling *Handler
	routing  *http.ServeMux
}

// NewServer - новый сервер
func NewServer(c *Config) *Server {
	return &Server{
		c,
		NewHandler(),
		new(http.ServeMux),
	}
}

// Run - ф-я работы сервера
func (s *Server) Run() {

	srv := http.Server{
		Addr:    s.Config.GetAdr(),
		Handler: s.Route(),
	}
	c := make(chan os.Signal, 1)
	err := make(chan error)
	signal.Notify(c, os.Interrupt)

	go func() {
		err <- srv.ListenAndServe()
	}()
	log.Println("Start server")
	select {
	case <-c:
		log.Println("Shutdown server")
		srv.Shutdown(context.Background())
	case e := <-err:
		log.Printf("Server error: %v. Shutdown server", e)
		srv.Shutdown(context.Background())
	}
}

// Route - роутинг запросов с логированием
func (s *Server) Route() http.Handler {
	s.routing.HandleFunc("/create_event", s.Handling.AddEvent)
	s.routing.HandleFunc("/update_event", s.Handling.UpdateEvent)
	s.routing.HandleFunc("/delete_event", s.Handling.DeleteEvent)
	s.routing.HandleFunc("/event_for_day", s.Handling.EventForDay)
	s.routing.HandleFunc("/event_for_week", s.Handling.EventForWeek)
	s.routing.HandleFunc("/event_for_month", s.Handling.EventForMonth)

	return s.Logging(s.routing)
}

// Logging - логгирование всех входящих запросов с временем, типом запросаи и юрлом
func (s *Server) Logging(next http.Handler) http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		timeStart := time.Now()
		next.ServeHTTP(w, r)
		log.Printf("%v, %v, %v, %s\n", r.Method, r.URL, timeStart.Format("2006-01-02T15:04:05"), time.Since(timeStart))
	})
}

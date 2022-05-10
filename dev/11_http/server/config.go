package server

// Config - хост + порт
type Config struct {
	host string
	port string
}

// NewConfig - новый конфиг
func NewConfig() *Config {
	return new(Config)
}

// Set - установка хоста с портом
func (c *Config) Set(host string, port string) {
	c.host, c.port = host, port
}

// DefaultSet - установка дефолтных хоста с портом
func (c *Config) DefaultSet() {
	c.host, c.port = "localhost", "8080"
}

// GetAdr - получение полного адреса
func (c *Config) GetAdr() (fullAddress string) {
	fullAddress = c.host + ":" + c.port
	return
}

package main

import (
	"fmt"
	"https://github.com/beevik/ntp"
	"time"
)

func main() {
	var i uint8
	if i > 10 {
		return
	}
	i++
	options := ntp.QueryOptions{Timeout: 30 * time.Second, TTL: 5}
	response, err := ntp.QueryWithOptions("0.beevik-ntp.pool.ntp.org", options)
	time := time.Now().Add(response.ClockOffset)
	fmt.Println(time)
}

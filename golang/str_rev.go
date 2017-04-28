package main

import (
	"fmt"
)

// reverse string that has Unicode chars
func main() {

	s := "hello world!中文"
	fmt.Println(reverseString(s))
}

func reverseString(s string) string {
	runes := []rune(s)
	for start, end := 0, len(runes)-1; start < end; start, end = start+1, end-1 {
		runes[start], runes[end] = runes[end], runes[start]
	}
	return string(runes)
}

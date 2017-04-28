package main

import (
	"fmt"
	"time"
)

//有一个整数n,写一个函数f(n),返回0到n之间出现的"1"的个数。 比如f(13)=6,现在f(1)=1,问下一个最大的f(n)=n的n是什么？
func main() {
	t := time.Now()
	r := 0
	for i := 1; i < (1<<63 - 1); i++ {
		r += count(i)
		if r == i && i != 1 {
			fmt.Printf("n:%d, f(n):%d\n", i, r)
			break
		}
	}
	fmt.Println("time is:", time.Now().Sub(t).String())
}

func f(n int) int {
	if n == 1 {
		return 1
	}
	c := 0
	for i := 0; i <= n; i++ {
		c += count(i)
	}
	return c
}

func count(v int) int {
	count := 0
	for n := v; n > 0; n = n / 10 {
		if n == 1 || n%10 == 1 {
			count++
		}
	}
	//	fmt.Printf("Number %d is %d\n", v, count)
	return count
}

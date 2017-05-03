package main

import (
	"fmt"
	"strconv"
)

// 计算出传入的数值n的 [0,n]区间内所有数的二进制表示中1的个数。
func main() {
	countAll(2)
}

func countAll(n int) {
	sum := 0
	for i := 0; i <= n; i++ {
		sum += countOne(i)
	}
	fmt.Printf("Result is: %d\n", sum)
}

func countOne(n int) int {
	//s := fmt.Sprintf("%b", n)
	s := strconv.FormatInt(int64(n), 2)
	sum := 0
	for _, v := range []byte(s) {
		if v == byte('1') {
			sum += 1
		}
	}
	return sum
}

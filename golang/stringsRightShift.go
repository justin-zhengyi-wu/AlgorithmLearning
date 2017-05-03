//字符串循环右移
// 比如把字符串abcdefgh右循环移位4位，就编程了efghabcd。
// 我们可以考虑如下3个步骤：
// 先把abcd翻转变为dcba，再把efgh翻转变为hgfe。这样，原来的串变为了dcbahgfe 最后把整个儿翻转变为 efghabcd。
package main

import (
	"fmt"
)

func main() {
	fmt.Printf("%s", shiftRight("abcdefgh", 4))
}

func shiftRight(s string, step int) string {
	r := []rune(s)
	if step < len(r) {
		left := reverse(r[:step])
		right := reverse(r[step:])
		return reverse([]rune(left + right))
	}
	return s

}

func reverse(r []rune) string {
	//	r := []rune(s)
	for i, j := 0, len(r)-1; i < len(r)/2; i, j = i+1, j-1 {
		r[i], r[j] = r[j], r[i]
	}
	return string(r)
}

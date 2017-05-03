// 判断括号是否匹配
package main

import (
	"fmt"
)

func main() {
	fmt.Printf("%t", check("asdf(asdf)"))
}

func check(str string) bool {
	stack := []string{}
	isValid := true
	for _, v := range str {
		c := string(v)
		if c == "(" || c == "{" || c == "[" {
			stack = append(stack, c)
		} else if c == ")" || c == "]" || c == "}" {
			if len(stack) == 0 {
				isValid = false
				break
			} else {
				tmp := stack[len(stack)-1]
				stack = stack[:len(stack)-1]
				isValid = isPaired(tmp, c)
				if isValid == false {
					break
				}
			}
		}

	}
	if len(stack) > 0 {
		isValid = false
	}
	return isValid
}

func isPaired(left, right string) bool {
	return (left == "{" && right == "}") || (left == "(" && right == ")") || (left == "[" && right == "]")
}

package main

import (
	"fmt"
)

func main() {
}

type Tree struct {
	data int
	l    *Tree
	r    *Tree
}

type List struct {
	data int
	next *List
}

// 阶乘
func fact(n uint32) uint32 {
	if n == 0 {
		return 1
	}
	return n * fact(n-1)
}

//二分查找
func BSearch(a []int, el, low, height int) int {
	if low > height {
		return -1
	}
	mid := (low + height) / 2
	if a[mid] == el {
		return 0
	} else if a[mid] > el {
		return BSearch(a, el, low, mid-1)
	} else {
		return BSearch(a, el, mid+1, height)
	}
}

//斐波那契数列--递归
func fib(n uint64) uint64 {
	if n < 2 {
		return n
	} else {
		return fib(n-1) + fib(n-2)
	}
}

//斐波那契数列--非递归
func fib2(n int) int {
	if n < 2 {
		return n
	}
	var a0, a1, a int = 0, 1, 0
	for i := 2; i <= n; i++ {
		a = a0 + a1
		a0 = a1
		a1 = a
	}
	return a
}

// 冒泡
func bubbleSort(a []int, n int) {
	for i := 1; i < n; i++ {
		for j := 0; j < n-i; j++ {
			if a[j] > a[j+1] {
				a[j], a[j+1] = a[j+1], a[j]
			}
		}
	}
}

// 反转链表
func reverseList(head *List) *List {
	if head == nil {
		return head
	}
	ph := reverseList(head.next)
	head.next.next = head
	head.next = nil
	return ph
}

//比较两个树是否相等
func compareTree(t1 *Tree, t2 *Tree) bool {
	if t1 == nil && t2 == nil {
		return true
	}
	if t1 == nil || t2 == nil {
		return false
	}
	if t1.data != t2.data {
		return false
	}
	if compareTree(t1, l, t2.l) == 1 && compareTree(t1.r, t2.r) == 1 {
		return true
	} else {
		return false
	}
}

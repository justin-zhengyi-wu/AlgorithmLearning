package main

import (
	"fmt"
)

type TreeNode struct {
	val   int
	left  *TreeNode
	right *TreeNode
}

func (n *TreeNode) String() string {
	if n == nil {
		return ""
	}
	return fmt.Sprintf("left:%s, right:%s, value:%d\n", n.left, n.right, n.val)
}

func main() {
	test := TreeNode{
		val: 4,
		left: &TreeNode{
			val: 2,
			left: &TreeNode{
				val: 2,
			},
			right: &TreeNode{
				val: 3,
			},
		},
		right: &TreeNode{
			val: 7,
			left: &TreeNode{
				val: 6,
			},
			right: &TreeNode{
				val: 9,
			},
		},
	}
	ret := inverse(&test)
	fmt.Println(ret)
}

func inverse(n *TreeNode) *TreeNode {
	if n.left != nil {
		n.left = inverse(n.left)
	}
	if n.right != nil {
		n.right = inverse(n.right)
	}
	n.left, n.right = n.right, n.left
	return n
}

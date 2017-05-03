// 分层打印二叉树
package main

import (
	"fmt"
)

type Node struct {
	val   int
	left  *Node
	right *Node
}

func main() {

}

func print(root Node) {
	if root == nil {
		return
	}
	var slices = []Node{root}
	for len(slices) > 0 {
		fmt.Printf("%d, ", root.val)
		if root.left == nil && root.right == nil {
			break
		}
		if root.left != nil {
			slices = append(slices, root.left)
		}
		if root.right != nil {
			slices = append(slices, root.right)
		}
	}
}

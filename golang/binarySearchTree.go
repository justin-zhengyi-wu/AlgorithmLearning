package main

import (
	"fmt"
)

type Node struct {
	Left  *Node
	Right *Node
	Value int
}

type Tree struct {
	Root *Node
	Size int
}

func main() {

}

func (t *Tree) Size() int {
	return t.Size
}

func (t *Tree) Root() *Node {
	return t.Root
}

func (n *Node) Insert(newNode *Node) {
	if newNode.Value > n.Value {
		if n.Right == nil {
			n.Right = newNode
		} else {
			n.Right.Insert(newNode)
		}
	} else if newNode.Value < n.Value {
		if n.Left == nil {
			n.Left = newNode
		} else {
			n.Left.Insert(newNode)
		}
	}
}

func (t *Tree) Insert(v int) {
	if t.Root == nil {
		t.Root = &Node{
			Left:  nil,
			Right: nil,
			Value: 0,
		}
	}
	t.Size++
	t.Root.Insert(&Node{
		Left:  nil,
		Right: nil,
		Value: v,
	})
}

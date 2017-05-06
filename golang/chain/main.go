package main

import (
	"fmt"
)

type Node struct {
	val  int
	next *Node
}

type Link struct {
	head *Node
}

func (l Link) String() (s string) {
	p := l.head
	s = fmt.Sprintf("%d -> ", p.val)
	for p.next != nil {
		s += fmt.Sprintf("%d -> ", p.next.val)
		p = p.next
	}
	return s
}

func main() {
	l := Link{
		head: &Node{
			val: 1,
			next: &Node{
				val: 2,
				next: &Node{
					val: 3,
					next: &Node{
						val:  4,
						next: nil,
					},
				},
			},
		},
	}
	fmt.Println(l)
	ret := reverse(l)
	fmt.Println(ret)
}

func reverse(l Link) Link {
	if l.head == nil || l.head.next == nil {
		return l
	}
	var p, q, r *Node
	p = l.head
	q = l.head.next
	l.head.next = nil
	for q != nil {
		r = q.next
		q.next = p
		p = q
		q = r
	}
	return Link{
		head: p,
	}
}

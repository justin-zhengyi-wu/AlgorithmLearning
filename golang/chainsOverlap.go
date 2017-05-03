//判断两个单向链表是否相交

package main

type Node struct {
	val  int
	next *Node
}

// 判断最后一个结点是否相同
func checkOverlap(head1, head2 Node) bool {
	for head1 != nil {
		head1 = head1.next
	}
	for head2 != nil {
		head2 = head2.next
	}
	if head1 == head2 {
		return true
	}
	return false
}

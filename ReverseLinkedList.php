<?php

class listNode
{
	public $val = 0;
	public $next = null;
	function __construct($val = 0, $next = null)
	{
		$this->val = $val;
		$this->next = $next;
	}
}

class Solution
{
	function reverseLinkedList($linkedListNode)
	{
		if (!$linkedListNode) {
			return $linkedListNode;
		}
		$array = [];
		while ($linkedListNode) {
			$array[] = $linkedListNode->val;
			$linkedListNode = $linkedListNode->next;
		}
		// $array = [1,2,3,4,5];
		$node = null;
		foreach ($array as $arr) {
			$node = new listNode($arr, $node);
			// v = 2
			// next = {
			// 	         v = 1
			// 	         next = null
			//        }
		}
		return $node;
	}
}

// linked list
$listNode1 = new listNode();
$listNode1->val = 1;

$listNode2 = new listNode();
$listNode2->val = 2;

$listNode1->next = $listNode2;

$listNode3 = new listNode();
$listNode3->val = 3;

$listNode2->next = $listNode3;

$listNode4 = new listNode();
$listNode4->val = 4;

$listNode3->next = $listNode4;

$listNode5 = new listNode();
$listNode5->val = 5;

$listNode4->next = $listNode5;


// call algorithm function
$solution = new Solution();
$result = $solution->reverseLinkedList($listNode1);
print_r($result);

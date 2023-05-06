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
	/**
	 * @param ListNode $list1
	 * @param ListNode $list2
	 * @return ListNode
	 */
	// merge 2 linked list into ascending order using recursion
	function mergeTwoLists($list1, $list2)
	{
		if (!$list1) {
			return $list2;
		}

		if (!$list2) {
			return $list1;
		}

		if ($list1->val < $list2->val) {
			$list1->next = $this->mergeTwoLists($list1->next, $list2);
			return $list1;
		} else {
			$list2->next = $this->mergeTwoLists($list1, $list2->next);

			return $list2;
		}
		// explanation
		// 1 -> (1.2.4, 3.4) {1 -> (2.4, 3.4) { 2 -> (4, 3.4) {3 -> (4, 4) { 4 -> (4, null)}}}} return list1
	}
}

// linked list first node
$list1Node1 = new listNode();
$list1Node1->val = 1;

$list1Node2 = new listNode();
$list1Node2->val = 2;

$list1Node1->next = $list1Node2;

$list1Node3 = new listNode();
$list1Node3->val = 4;

$list1Node2->next = $list1Node3;

// linked list second node
$list2Node1 = new listNode();
$list2Node1->val = 1;

$list2Node2 = new listNode();
$list2Node2->val = 3;

$list2Node1->next = $list2Node2;

$list2Node3 = new listNode();
$list2Node3->val = 4;

$list2Node2->next = $list2Node3;

// call algorithm function
$solution = new Solution();
$result = $solution->mergeTwoLists($list1Node1, $list2Node1);
print_r($result);

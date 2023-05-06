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
	function middleLinkedList($linkedListNode)
	{
		$array = [];
		while ($linkedListNode) {
			$array[] = $linkedListNode->val;
			$linkedListNode = $linkedListNode->next;
		}
		// $array = [1,2,3,4,5];
		$count = count($array);
		if ($count % 2 == 0) {
			$middleIndex = ((int)round($count / 2) + 1) - 1;
		} else {
			$middleIndex = ((int)round($count / 2)) - 1;
		}
		$array = array_reverse(array_slice($array, $middleIndex));
		$node = null;
		foreach ($array as $arr) {
			if (!$node) {
				$node = new listNode($arr, null);
			} else {
				$node = new listNode($arr, $node);
			}
		}
		return $node;
	}

	function middleLinkedListSecond($linkedListNode)
	{
		$res = [];
		while ($linkedListNode) {
			$res[] = $linkedListNode;
			$linkedListNode = $linkedListNode->next;
		}

		return $res[count($res) / 2];
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

$listNode6 = new listNode();
$listNode6->val = 6;

$listNode5->next = $listNode6;


// call algorithm function
$solution = new Solution();
// $result = $solution->middleLinkedList($listNode1);
$result = $solution->middleLinkedListSecond($listNode1);
print_r($result);

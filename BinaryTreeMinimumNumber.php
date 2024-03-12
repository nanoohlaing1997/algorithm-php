<?php

class Node {
	public $val;
	public $left;
	public $right;

	function __construct($val = 0, $left = null, $right = null)
	{
		$this->val = $val;
		$this->left = $left;
		$this->right = $right;
	}
}

$a = new Node(5);
$b = new Node(11);
$c = new Node(3);
$d = new Node(4);
$e = new Node(15);
$f = new Node(12);

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->right = $f;
    //         a(3)
	// 		/    \
	// 	   b(11)  c(4)
	//   /    \     \
    //  d(4)  e(2)   f(1)
// print(DepthFirstSearchWithStack($a));
// print(BreadthFirstSearchWithQueue($a));
print(DepthFirstSearchWithRecursive($a));

function DepthFirstSearchWithStack($root)
{
	if ($root === null) {
		return 0;
	}

	$minVal = 0;
	$stack = [$root];
	while (count($stack) > 0) {
		$current = array_pop($stack);
		if ($minVal == 0 || $minVal < $current->val) {
			$minVal = $current->val;
		}

		if ($current->left) {
			array_push($stack, $current->left);
		}

        if ($current->right) {
			array_push($stack, $current->right);
		}
	}
	return $minVal;
}

function BreadthFirstSearchWithQueue($root) {
	if ($root === null) {
		return 0;
	}

	$minVal = 0;
	$queue = [$root];
	while (count($queue) > 0) {
		$current = array_pop($queue);
		if ($minVal == 0 || $minVal > $current->val) {
			$minVal = $current->val;
		}

		if ($current->left) {
			array_unshift($queue, $current->left);
		}

	    if ($current->right) {
			array_unshift($queue, $current->right);
		}
	}
	return $minVal;
}

function DepthFirstSearchWithRecursive($root)
{
	if ($root === null) {
		return 0;
	}

	$left = DepthFirstSearchWithRecursive($root->left);
	$right = DepthFirstSearchWithRecursive($root->right);
	return min($root->val, $left, $right);
}
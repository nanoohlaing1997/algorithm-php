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

$a = new Node(3);
$b = new Node(11);
$c = new Node(4);
$d = new Node(4);
$e = new Node(-2);
$f = new Node(1);

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
// print(DepthFirstSearchWithRecursive($a));
print(BreadthFirstSearchWithQueue($a, 7));

function DepthFirstSearchWithRecursive($root)
{
	if ($root === null) {
		return 0;
	}
	return $root->val +
	    DepthFirstSearchWithRecursive($root->left) +
	    DepthFirstSearchWithRecursive($root->right);
}

function BreadthFirstSearchWithQueue($root, $target)
{
	if ($root === null) {
		// return 0;
		return "false";
	}
	$totalSum = 0;
	$queue = [$root];
	while (count($queue) > 0) {
		$current = array_shift($queue);
		if ($target == $totalSum + $current->val) {
			return "true";
		}
		$totalSum += $current->val;

		if ($current->left) {
			array_push($queue, $current->left);
		}
		if ($current->right) {
			array_push($queue, $current->right);
		}
	}
	// return $totalSum;
	return "false";
}
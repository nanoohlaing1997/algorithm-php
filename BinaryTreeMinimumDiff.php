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

$a = new Node(4);
$b = new Node(2);
$c = new Node(6);
$d = new Node(1);
$e = new Node(3);

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
    //         a(4)
	// 		/    \
	// 	   b(2)  c(6)
	//   /    \
    //  d(1)  e(3)
print_r(DFSMinDiff($a));


function DFSMinDiff($root)
{
	if ($root === null) {
		return PHP_INT_MAX;
	}

	$left = DFSMinDiff($root->left);
	$result = array_merge($left, [$root->val]);
	$right = DFSMinDiff($root->right);
	$result = array_merge($result, $right);

	return $result;
}
<?php

class Node {
	public $val;
	public $left;
	public $right;
	function __construct($val = "", $left = null, $right = null)
	{
		$this->val = $val;
		$this->left = $left;
		$this->right = $right;
	}
}

$a = new Node("a");
$b = new Node("b");
$c = new Node("c");
$d = new Node("d");
$e = new Node("e");
$f = new Node("f");

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->left = $f;
// print_r(DepthFirstSearchWithStack($a));
print_r(DepthFirstSearchWithRecursive($a));
// print_r(DFSWithStack($a));
            //         a
			// 		/    \
			// 	   b      c
			//   /    \   /
            //  d      e f
function DepthFirstSearchWithStack($root)
{
	if ($root == null) {
		return [];
	}
	$result = []; // a, b,d ,
	$array = [$root]; //a/ c,e,
	while (count($array) > 0) {
		$current = array_pop($array);
		$result[] = $current->val;
		if ($current->right !== null) {
		    array_push($array, $current->right);
		}

		if ($current->left !== null) {
		    array_push($array, $current->left);
		}
	}
	return $result;
}

function DFSWithStack($root) {
	if ($root === null) {
		return [];
	}

	$result = [];
	$stack = [$root];
	while (count($stack) > 0) {
		$current = array_pop($stack);
		$result[] = $current->val;
        if ($current->right) {
			array_push($stack, $current->right);
		}

		if ($current->left) {
			array_push($stack, $current->left);
		}
	}
	return $result;
}

function DepthFirstSearchWithRecursive($root)
{
	if ($root === null) {
		return [];
	}

	$left = DepthFirstSearchWithRecursive($root->left); // b,d,e
	$right = DepthFirstSearchWithRecursive($root->right); // c,f
	return [$root->val, ...$right, ...$left];
}

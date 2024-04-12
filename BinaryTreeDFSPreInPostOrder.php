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

print_r(DepthFirstSearchPreOrder($a)); //a,b,d,e,c,f
print_r(DepthFirstSearchInOrder($a)); //d,b,e,a,f,c
print_r(DepthFirstSearchPostOrder($a)); // d,e,b,f,c,a

//         a
// 		/    \
// 	   b      c
//   /    \   /
//  d      e f

function DepthFirstSearchPreOrder($root)
{
	if ($root === null) {
		return null;
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

function DepthFirstSearchInOrder($root)
{
	$result = [];
	$stack = []; // a, b , d
	$current = $root;
	while ($current !== null || count($stack) > 0) {
        while ($current !== null) {
			array_push($stack, $current);
			$current = $current->left;
		}

		$current = array_pop($stack);
		$result[] = $current->val;
		$current = $current->right;
	}
	return $result;
}

function DepthFirstSearchPostOrder($root)
{
	$result = [];
	$stackOne = [$root];
	$stackTwo = [];

	while (count($stackOne) > 0) {
		$current = array_pop($stackOne);
		array_push($stackTwo, $current);

		if ($current->left) {
			array_push($stackOne, $current->left);
		}
		if ($current->right) {
			array_push($stackOne, $current->right);
		}
	}
	while (count($stackTwo) >0) {
		$current = array_pop($stackTwo);
		$result[] = $current->val;
	}

	return $result;
}
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

// print_r(DepthFirstSearchPreOrder($a)); //a,b,d,e,c,f
print_r(DepthFirstSearchInOrder($a)); //d,b,e,a,f,c
// print_r(DepthFirstSearchPostOrder($a)); // d,e,b,f,c,a

//         a
// 		/    \
// 	   b      c
//   /    \   /
//  d      e f

function DepthFirstSearchPreOrder($root)
{
	if ($root === null) {
		return [];
	}

	$result = [$root->val];
	$left = DepthFirstSearchPreOrder($root->left);
	$right = DepthFirstSearchPreOrder($root->right);
	return array_merge($result, $left, $right);
}

function DepthFirstSearchInOrder($root)
{
	if ($root === null) {
		return [];
	}

	$left = DepthFirstSearchInOrder($root->left);
	$result = array_merge($left, [$root->val]);
	$right = DepthFirstSearchInOrder($root->right);
	return array_merge($result, $right);
}

function DepthFirstSearchPostOrder($root)
{
	if ($root === null) {
		return [];
	}

	$left = DepthFirstSearchPostOrder($root->left);
	$right = DepthFirstSearchPostOrder($root->right);
	return array_merge($left, $right, [$root->val]);
}
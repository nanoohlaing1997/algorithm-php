<?php

class Node
{
	public $val;
	public $left;
	public $right;

    function __construct($val = "", $left = null, $right = null) {
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
    //         a
	// 		/    \
	// 	   b      c
	//   /    \   /
    //  d      e f
// print(BreadthFirstSearchWithQueue($a, "f"));

// print(DepthFirstSearchWithRecursive($a, "f"));

print(DepthFirstSearchWithStack($a, "a"));

function BreadthFirstSearchWithQueue($root, $target)
{
	if ($root === null) {
		return "false";
	}

	$queue = [$root];
	while (count($queue) > 0) {
		$current = array_pop($queue);

		if ($current->val === $target) {
			return "true";
		}
		if ($current->left) {
			array_unshift($queue, $current->left);
		}
		if ($current->right) {
			array_unshift($queue, $current->right);
		}
	}
	return "false";
}

function DepthFirstSearchWithRecursive($root, $target)
{
	if ($root === null) {
		return false;
	}

	if ($root->val === $target) {
		return true;
	}
	return DepthFirstSearchWithRecursive($root->left, $target)
	|| DepthFirstSearchWithRecursive($root->right, $target);
}

function DepthFirstSearchWithStack($root, $target) {
	if ($root === null) {
		return false;
	}

	$stack = [$root];
	while (count($stack) > 0) {
		$current = array_pop($stack);
		if ($current->val === $target) {
			return true;
		}

		if ($current->right) {
			array_push($stack, $current->right);
		}

		if ($current->left) {
			array_push($stack, $current->left);
		}
	}
	return false;
}
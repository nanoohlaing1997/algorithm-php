<?php

class Node {
	public $val = null;
	public $left = null;
	public $right = null;
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
            //         a
			// 		/    \
			// 	   b      c
			//   /    \   /
            //  d      e f
print_r(BreadthFirstSearchWithQueue($a));

function BreadthFirstSearchWithQueue($root) // First in First out
{
	if ($root === null) {
		return [];
	}

	$result = []; //a,b, c, d ,e,f
	$queue = [$root];
	while (count($queue) > 0) {
		$current = array_pop($queue);
		$result[] = $current->val;

		if ($current->left)
		{
			array_unshift($queue, $current->left);
		}

        if ($current->right) {
			array_unshift($queue, $current->right);
		}
	}
	return $result;
}
<?php

class Node {
	public $val;
	public $left;
	public $right;

	public function __construct($val = "", $left = null, $right = null) {
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

print_r(FindMaxPathOfTree($a));

function FindMaxPathOfTree($root)
{
	if ($root === null) {
		return -1;
	}

	if ($root->left === null && $root->right === null) {
		return $root->val;
	}

	$maxPath = max(FindMaxPathOfTree($root->left), FindMaxPathOfTree($root->right));

	return $root->val + $maxPath;

}
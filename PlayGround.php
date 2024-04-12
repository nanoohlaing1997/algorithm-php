<?php

// function isIsomorphic(string $s, string $t) {
// 	if (strlen($s) != strlen($t)) {
// 		return false;
// 	}

// 	$stArray = []; // [ e => f, g => o]
// 	$tsArray = []; // [ f => e, o => g]
// 	for ($i = 0; $i < strlen($s); $i++) {
// 		$stArray[$s[$i]] = $t[$i];
// 	}

// 	for ($i = 0; $i < strlen($t); $i++) {
// 		$tsArray[$t[$i]] = $s[$i];
// 	}
// 	if (count($stArray) != count($stArray)) {
// 		return false;
// 	}
// 	for ($i=0; $i < count($stArray); $i++) {
// 		if ($stArray[$s[$i]] != $t[$i] || $tsArray[$t[$i]] != $s[$i]) {
// 			return false;
// 		}
// 	}
// 	return true;
// }

// $s = "bbbaaaba";
// $t = "aaabbbba";
// print_r(isIsomorphic($s, $t));

// function wordPattern(string $pattern, string $s)
// {
// 	$psArray = []; // [a => dog, b => cat]
// 	$spArray = []; // [dog => a, cat => b]
// 	$sArray = explode(" ", $s);
// 	if (count($sArray) != strlen($pattern)) {
// 		return false;
// 	}

// 	for ($i=0; $i < strlen($pattern); $i++) {
// 		$psArray[$pattern[$i]] = $sArray[$i];
// 	}

// 	for ($i=0; $i < count($sArray); $i++) {
// 		$spArray[$sArray[$i]] = $pattern[$i];
// 	}

// 	if (count($psArray) != count($spArray)) {
// 		return false;
// 	}

// 	for ($i=0; $i < count($psArray); $i++) {
// 		if ($psArray[$pattern[$i]] != $sArray[$i] || $spArray[$sArray[$i]] != $pattern[$i]) {
// 			return false;
// 		}
// 	}
// 	return true;
// }

// $p = "abbc";
// $s = "dog cat cat dog";
// print_r(wordPattern($p, $s));


// function isAnagram($s, $t)
// {
// 	if (strlen($s) != strlen($t)) {
// 		return false;
// 	}
// 	$sArray = []; // [a => 2, c => 2]
// 	$tArray = []; // [a => 1, c => 2]

// 	for ($i=0; $i < strlen($s); $i++) {
// 		if (!isset($sArray[$s[$i]])) {
// 			$sArray[$s[$i]] = 1;
// 		} else {
// 			$sArray[$s[$i]] += 1;
// 		}
// 	}

// 	for ($i=0; $i < strlen($t); $i++) {
// 		if (!isset($tArray[$t[$i]])) {
// 			$tArray[$t[$i]] = 1;
// 		} else {
// 			$tArray[$t[$i]] += 1;
// 		}
// 	}
// 	if (count($sArray) != count($tArray)) {
// 		return false;
// 	}

// 	for ($i = 0; $i < strlen($t); $i++) {
// 		if (!isset($sArray[$t[$i]]) || !isset($tArray[$t[$i]]) || $sArray[$t[$i]] != $tArray[$t[$i]]) {
// 			return false;
// 		}
// 	}

// 	return $sArray;
// }

// $s = "aacc";
// $t = "ccac";
// print_r(isAnagram($s, $t));

// function twoSum($nums, $target)
// {
// 	$a = []; //[ 2 => 0, 7 => 1]
// 	for ($i = 0; $i < count($nums); $i++) {
// 		$c =  $target - $nums[$i]; // 7
// 		if (isset($a[$c])) {
// 			return [$a[$c], $i];
// 		} else {
// 			$a[$nums[$i]] = $i;
// 		}
// 	}
// 	return [0,0];
// }

// $nums = [3,2,4];
// $target = 6;
// print_r(twoSum($nums, $target));

// ***function happyNumber($n)
// {
// 	$r = [];
// 	while ($n != 0) {
// 		$sum = 0;
// 		$a = strval($n);
// 		for ($i = 0; $i < strlen($a); $i++) {
// 			$sum = $sum + pow($a[$i], 2);
// 		}
// 		if ($sum == 1) {
// 			return true;
// 		}

// 		if (in_array($sum, $r)) {
// 			return false;
// 		}
// 		$r[] = $sum;
// 		$n = $sum;
// 	}
// }

// $n = 19;
// print_r(happyNumber($n));

// function containsNearByDuplicate($nums, $k) {
// 	$a = [];
// 	for ($i = 0; $i < count($nums); $i++) {
// 		if (isset($a[$nums[$i]]) && $i - $a[$nums[$i]] <= $k) {
// 			return true;
// 		}
// 		$a[$nums[$i]] = $i;
// 	}
// 	return false;
// }

// $n = [1,2,3,1,2,3];
// $k = 2;
// print_r(containsNearByDuplicate($n, $k));

// function summaryRanges($nums)
// {
// 	if (empty($nums)) {
// 		return [];
// 	}
// 	$r = [];
// 	$start = $nums[0]; // 0
// 	$end = $nums[0];   // 0
// 	for ($i = 1; $i < count($nums); $i ++) {
// 		if ($nums[$i] == $nums[$i - 1] + 1) {
// 			$end = $nums[$i];
// 		} else {
// 			if ($start != $end) {
// 				$r[] = "{$start}->{$end}"; //[0->2]
// 			} else{
// 				$r[] = "{$start}";
// 			}
// 			$start = $nums[$i];
// 			$end = $nums[$i];
// 		}
// 	}

// 	if ($start != $end) {
// 		$r [] = "{$start}->{$end}";
// 	} else {
// 		$r[] = "$start";
// 	}
// 	return $r;
// }

// $n = [0, 1, 2, 4, 5, 7];
// print_r(summaryRanges($n));


// function isValid($s) {
// 	$data = [
// 		"(" => ")",
// 		"{" => "}",
// 		"[" => "]"
// 	];
// 	$t = []; // [")", "]"]
// 	for ($i = 0; $i < strlen($s); $i++) {
// 		if (isset($data[$s[$i]])) {
// 			$t[] = $data[$s[$i]];
// 		} else {
// 			$count = count($t);
// 			if (empty($t) || $t[$count - 1] != $s[$i]) {
// 				return "false";
// 			}
// 			array_pop($t);
// 		}
// 	}
// 	return "true";
// }

// $s = "([]){}}";
// print_r(isValid($s));


// function hasCycle($head)
// {
// 	if ($head === null) {
// 		return false;
// 	}

// 	$slow = $head;
// 	$fast = $head;
// 	while ($fast != null && $slow != null) {
// 		$slow = $slow->next;
// 		$fast = $fast->next->next;
// 		if ($slow === $fast) {
// 			return true;
// 		}
// 	}
// 	return false;
// }

// class ListNode {
// 	public $val = 0;
// 	public $next = null;
// 	function __construct($val)
// 	{
// 		$this->val = $val;
// 	}
// }

// $a = new ListNode(3);
// $b = new ListNode(2);
// $c = new ListNode(0);
// $d = new ListNode(-4);
// $a->next = $b;
// $b->next = $c;
// $c->next = $d;
// $d->next = $b;

// print_r(hasCycle($a));

// function addTwoNumbers($l1, $l2)
// {
// 	$carry = 0; // 0
// 	$current = new ListNode();
// 	$result = $current;
// 	while ($l1 !== null || $l2 !== null) {
// 	    $sum = $carry; // 2 / 7
// 		if ($l1 !== null) {
// 			$sum += $l1->val;
// 			$l1 = $l1->next;
// 		}

// 		if ($l2 !== null) {
// 			$sum += $l2->val;
// 			$l2 = $l2->next;
// 		}

// 		$carry = intval(floor($sum / 10)); // 10 / 10 = 1
// 		$sum = $sum % 10;

// 		$current->next = new ListNode($sum);
// 		$current = $current->next;
// 	}

// 	if ($carry > 0) {
// 		$current->next = new ListNode($carry);
// 	}
// 	return $result->next;
// }

// function mergeTwoLists($list1, $list2)
// {
// 	if ($list1 === null && $list2 === null) {
// 		return [];
// 	}

// 	$current = new ListNode();
// 	$result = $current;
// 	while ($list1 !== null && $list2 !== null) {
// 		if ($list1->val <= $list2->val) {
// 			$current->next = $list1;
// 			$list1 = $list1->next;
// 		} else {
// 			$current->next = $list2;
// 			$list2 = $list2->next;
// 		}
// 		$current = $current->next;
// 	}
// 	if ($list1 !== null) {
// 		$current->next = $list1;
// 	}
// 	if ($list2 !== null) {
// 		$current->next = $list2;
// 	}
// 	return $result->next;
// }

// $a = new ListNode(1);
// $b = new ListNode(2);
// $c = new ListNode(4);
// $a->next = $b;
// $b->next = $c;

// $d = new ListNode(1);
// $e = new ListNode(3);
// $f = new ListNode(4);
// $d->next = $e;
// $e->next = $f;

// class ListNode {
// 	public $val = 0;
// 	public $next = null;
// 	function __construct($val)
// 	{
// 		$this->val = $val;
// 	}
// }

//           a
//         /   \
//       b      c
//     /  \    /
//    d    e  f

// function maxDepth($root)
// {
// 	if (empty($root)) {
// 		return 0;
// 	}

// 	$result = 0;
// 	$queue = [$root]; //FIFO
// 	while (count($queue) > 0) {
// 		$result++;
// 		$count = count($queue);
// 		for ($i = 0; $i < $count;$i++) {
// 			$current = array_pop($queue);

// 			if ($current->left) {
// 				array_unshift($queue, $current->left);
// 			}
// 			if ($current->right) {
// 				array_unshift($queue, $current->right);
// 			}
// 		}
// 	}
// 	return $result;
// }

//  1        1
// 2  3     2  3
// function isSameTree($p, $q)
// {
// 	// [1, 2] [1, null, 2]
// 	$queueOne = [$p];
// 	$queueTwo = [$q];
// 	while (count($queueOne) > 0 && count($queueTwo) > 0) {
// 		$currentOne = array_pop($queueOne);
// 		$currentTwo = array_pop($queueTwo);

// 		if ($currentOne->val != $currentTwo->val) {
// 			return false;
// 		}

// 		if ($currentOne->left && $currentTwo->left === null) {
// 			return false;
// 		}
// 		if ($currentOne->right && $currentTwo->right === null) {
// 			return false;
// 		}

// 		if ($currentTwo->left && $currentOne->left === null) {
// 			return false;
// 		}

// 		if ($currentTwo->right && $currentOne->right === null) {
// 			return false;
// 		}

// 		if ($currentOne->left) {
// 			array_unshift($queueOne, $currentOne->left);
// 		}
// 		if ($currentOne->right) {
// 			array_unshift($queueOne, $currentOne->right);
// 		}

// 		if ($currentTwo->left) {
// 			array_unshift($queueTwo, $currentTwo->left);
// 		}
// 		if ($currentTwo->right) {
// 			array_unshift($queueTwo, $currentTwo->right);
// 		}
// 	}
// 	return count($queueOne) == count($queueTwo);
// }

// function invertTree($root)
// {
// 	if (empty ($root)) {
// 		return null;
// 	}

// 	$queue = [$root];
// 	while (count($queue) > 0) {
// 		$current = array_pop($queue);
// 		$left = $current->left;
// 		$current->left = $current->right;
// 		$current->right = $left;
// 		if ($current->right) {
// 			array_push($queue, $current->right);
// 		}
// 		if ($current->left) {
// 			array_push($queue, $current->left);
// 		}
// 	}
// 	return $root;
// }

// function isSymmetric($root)
// {
// 	if (empty($root)) {
// 		return true;
// 	}
// 	return check($root->left, $root->right);
// }

// function check($left, $right)
// {
// 	if ($left === null || $right === null) {
// 		return $left == $right;
// 	}

// 	if ($left->val != $right->val) {
// 		return false;
// 	}

// 	return check($left->left, $right->right) && check($left->right, $right->left);
// }

// function hasPathSum($root, $targetSum)
// {
// 	if (!$root) {
// 		return false;
// 	}

// 	$stack = [[$root, 0]];
// 	while (count($stack) > 0) {
// 		[$currentNode, $currentSum] = array_pop($stack);
// 		$currentSum += $currentNode->val;

// 		if ($currentSum == $targetSum && $currentNode->left === null && $currentNode->right === null) {
// 			return true;
// 		}

// 		if ($currentNode->right) {
// 			array_push($stack, [$currentNode->right, $currentSum]);
// 		}

// 		if ($currentNode->left) {
// 			array_push($stack, [$currentNode->left, $currentSum]);
// 		}
// 	}
// 	return false;
// }

// function countNodes($root)
// {
// 	if (!$root) {
// 		return 0;
// 	}
// 	$result = 0;

// 	$stack = [$root];
// 	while (count($stack) > 0) {
// 		$current = array_pop($stack);
// 		$result++;

// 		if ($current->right) {
// 			array_push($stack, $current->right);
// 		}
// 		if ($current->left) {
// 			array_push($stack, $current->left);
// 		}
// 	}
// 	return $result;
// }

// function averageOfLevels($root)
// {
// 	if (!$root) {
// 		return 0;
// 	}

// 	$result = [];
// 	$queue = [$root];
// 	while (count($queue) > 0) {
// 		$sum = 0;
// 		$count = count($queue);

// 		for ($i = 0; $i < $count; $i++) {
// 		    $current = array_pop($queue);
// 			$sum += $current->val;

// 		    if ($current->left) {
// 			    array_unshift($queue, $current->left);
// 			}

// 		    if ($current->right) {
// 			    array_unshift($queue, $current->right);
// 			}
// 	    }
// 		$result[] = $sum / $count;
// 	}
// 	return $result;
// }

// function getMinimumDifference($root)
// {

// 	$min = null;
// 	$pre = null;
// 	$stack = [];
// 	$current = $root;
// 	while ($current || count($stack) > 0) {
// 		if ($current) {
// 			array_push($stack, $current);
// 			$current = $current->left;
// 		}

// 		$current = array_pop($stack);
// 		if ($pre) {
// 			$min = $min === null ? $current->val - $pre : min($min, $current->val-$pre);
// 		}

// 		$pre = $current->val;
// 		$current = $current->right;
// 	}
// }

// function plusOne($digits) {
// 	$carry = 1;
// 	for ($i = count($digits) - 1; $i >= 0; $i--) {
// 		$sum = $digits[$i] + $carry;
// 		if ($sum >= 10) {
// 			$digits[$i] = $sum % 10;
// 			$carry = 1;
// 		} else {
// 			$digits[$i] = $sum;
// 			$carry = 0;
// 			break;
// 		}
// 	}
// 	if ($carry === 1) {
// 		array_unshift($digits, 1);
// 	}
// 	return $digits;
// }
// print_r(plusOne([9, 9]));

// function mergeAlternately($word1, $word2)
// {
// 	$count1 = strlen($word1);
// 	$count2 = strlen($word2);
// 	$i = 0;
// 	$j = 0;
// 	$result = "";
// 	while ($i < $count1 && $j < $count2)
// 	{
// 		$result = $result . $word1[$i];
// 		$result = $result . $word2[$j];
// 		$i++;
// 		$j++;
// 	}
// 	while ($i < $count1) {
// 		$result = $result . $word1[$i];
// 		$i++;
// 	}
// 	while ($j < $count2) {
// 		$result = $result . $word2[$j];
// 		$j++;
// 	}
// 	return $result;
// }

// print_r(mergeAlternately("abc", "pqrccc"));

// function kidsWithCandies($candies, $extraCandies)
// {
// 	$res = [];
// 	$maxCandies = max($candies);
// 	for ($i = 0; $i < count($candies); $i++) {
// 		$sum = $candies[$i] + $extraCandies;
// 		if ($sum >= $maxCandies) {
// 			$res[] = true;
// 		} else {
// 			$res[] = false;
// 		}
// 	}
// 	return $res;
// }
// print_r(kidsWithCandies([2,3,5,1,3], 3));

function reverseVowels($s)
{
	$vowels = [
		"a",
		"e",
		"i",
		"o",
		"u"
	];
	$len = strlen($s);
	$temp = [];
	for ($i = 0; $i < $len; $i++)
	{
		if (isset($vowels[$s[$i]])) {
			if (is_emp
			)
		}
	}
}

print_r(reverseVowels("hello"));

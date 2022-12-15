<?php

//[-1,0,3,5,9,12]
function binarySearch(array $nums, int $target) {
    $leftIndex = 0;
    $rightIndex = count($nums) - 1;
    while ($leftIndex <= $rightIndex) {
        $pivotIndex = floor(($leftIndex + $rightIndex) / 2);

        if ($nums[$pivotIndex] == $target) {
            return $pivotIndex;
        }

        if ($target > $nums[$pivotIndex]) {
            $leftIndex = $pivotIndex + 1;
        }

        if ($target < $nums[$pivotIndex]) {
            $rightIndex = $pivotIndex - 1;
        }
    }
    return -1;
}

// $a = [-1,0,3,5,9,12];
$inputNumber = explode(',', readline("Enter Numbers for Binary Search: "));
$target = (int)readline("Enter Target for Binary Search: ");
$result = binarySearch($inputNumber, $target);
echo "$result\n";

// First Bad Version
// Binary search with increasing integer
function firstBadVersion($n) {
	$left = 1;
	$right = $n;
	$pivot = false;
	while ($left <= $right) {
		$pivot = floor(($left + $right) / 2);
		// call function of checking bad version return bool
		if ($this->isBadVersion($pivot)) {
			$right = $pivot;
		} else {
			$left = $pivot + 1;
		}
	}
	return $right;
}
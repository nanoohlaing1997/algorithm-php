<?php

function pivotIndex(array $nums) {
	$count = count($nums);
	$arraySumTotal = array_sum($nums);

	if (array_sum(array_slice($nums, 1, $count)) == 0) {
		return 0;
	}
	// total = left + pivot + right
	// left = total - pivoit - right(left)
	for ($i = 1; $i < $count; $i++) {
		$left = array_sum(array_slice($nums, 0, $i));
		if ($left == $arraySumTotal - $nums[$i] - $left) {
			return $i;
		}
	}
	return -1;
}

$inputArrayNumber = explode(',', readLine("Enter Your Array Numbers for FINDING PIVOT INDEX: "));
$result = pivotIndex($inputArrayNumber);
echo $result;

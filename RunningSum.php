<?php

function runningSum(array $nums) {
	$result = [$nums[0]];
	$sum = $nums[0];
	for ($i = 1;$i < count($nums); $i++) {
		$sum += $nums[$i];
		$result[] = $sum;
	}
	return $result;
}

// $inputArrayNumber = explode(',', readLine("Enter Your Array Numbers for running sum: "));
// if (is_array($inputArrayNumber)) {
// 	$result = runningSum($inputArrayNumber);
// } else {
// 	print ("Your input is not array, please input array numbers");
//     $inputArrayNumber = readLine("Enter Your Array Numbers for running sum: ");
// }
$nums = [1, 2, 3, 4, 5];
$result = runningSum($nums);
print_r($result);
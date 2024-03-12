<?php

// function reverseString(string $message) {
// 	$data = str_split($message);
// 	$count = count($data) -1;
// 	$result = "";
// 	for ($i=$count; $i < 0; $i--) {
// 		$result .= $data[$i];
// 	}
// 	echo $result;
// }

// $string = "Nan Oo Hlaing";
// $r = reverseString($string);

$nums = [0,0,1,1,1,1,2,3,3];
print_r(removeDuplicate($nums));

function removeDuplicate($nums) {
	$a = array_count_values($nums);
	for ($i = 0; $i < count($nums); $i++) {
		if ($a[$nums[$i]] > 2) {
			unset($nums[$i]);
			$a[$nums[$i]] = $a[$nums[$i]] - 1;
		}
	}
	return $nums;
}
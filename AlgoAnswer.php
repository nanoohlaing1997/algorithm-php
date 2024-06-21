<?php

// 88. Merge Sorted Array
function merge(&$nums1, $m, $nums2, $n)
{
	$a = $m - 1; // 2
	$b = $n - 1; // 2
	$p = ($m + $n) - 1; // 3 + 3 - 1 = 5
	while ($a >= 0 && $b >= 0) {
		if ($nums1[$a] >= $nums2[$b]) {
			$nums1[$p] = $nums1[$a];
			$a--;
		} else {
			$nums1[$p] = $nums2[$b];
			$b--;
		}
		$p--;
	}

	while ($b >= 0) {
		$nums1[$p] = $nums2[$b];
		$b--;
	}
	return $nums1;
}

$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;
print_r(merge($nums1, $m, $nums2, $n));
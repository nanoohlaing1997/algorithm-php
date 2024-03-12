<?php

function removeDuplicate(&$nums) {
	$length = count($nums);
	for ($i = 0;$i < $length;$i++) {
		$next = next($nums);
		if ($nums[$i] === $next) {
			unset($nums[$i]);
		}
	}
	print_r($nums);
}

$nums = [0,1,1,1];
removeDuplicate($nums);
<?php

function maxMinSum(array $a)
{
	$total = array_sum($a);
	$result = [];
	foreach ($a as $b) {
		$result[] = $total-$b;
	}
	$max = max($result);
	$min = min($result);
	echo "$min" . " " . "$max";
}

$a = [1,3,5,7,9];
maxMinSum($a);
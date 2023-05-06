<?php

function countOfLargestNum(array $arr)
{
	$arrCount = array_count_values($arr);
	$max = max($arr);
	$result = $arrCount[$max];
	echo "$result" . "\n";
}

$arr = [3,2,1,3];
countOfLargestNum($arr);
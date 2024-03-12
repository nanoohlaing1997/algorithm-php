<?php

function mergeSort(array &$array)
{
	$count = count($array);

	if ($count <= 1) {
		return;
	}

	$mid = (int)$count /2;

	$left = array_slice($array, 0, $mid);
	$right = array_slice($array, $mid);

	mergeSort($left);
	mergeSort($right);

	merge($array, $left, $right);
}

function merge(array $array, array $left, array $right)
{
	// left = [38]
	// right = [27]
	$i = $j = $k = 0;
	while ($i < count($left) && $j < count($right)) {
		if ($left[$i] < $right[$j]) {
			$array[$k++] = $left[$i++];
		} else { //left[$i] >= $right[$j]
			$array[$k++] = $right[$j++];
		}
	}

	while ($i < count($left)) {
		$array[$k++] = $left[$i++];
	}

	while ($j < count($right)) {
		$array[$k++] = $right[$j++];
	}
}

$array = [38, 27, 43, 3, 9];
mergeSort($array);
echo $array;
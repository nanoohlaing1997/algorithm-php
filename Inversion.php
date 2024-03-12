<?php

// [5,3,4,2,1]
// [5,4,3,2,1]
// 0 1 2 3 4
// function inversion(array $array) {
// 	$result = 0;
// 	$count = count($array); //5

// 	$data = [];
// 	for ($i = 0; $i < $count - 2; $i++) {
//         for ($j = $i + 1; $j < $count - 1; $j++) {
//             for ($k = $j + 1; $k < $count; $k++) {
//                 if ($array[$i] > $array[$j] && $array[$j] > $array[$k]) {
//                     $result++;
//                 }
//             }
//         }
//     }
// 	return $result;
// }

// $array = [5,3,4,2,1];
// $result = inversion($array);
// echo $result;

function countInversions(array &$arr, $temp, $left, $right) { // left = 0 right = 4
    $inversions = 0;

    if ($left < $right) {
        $mid = (int)(($left + $right) / 2);

        $inversions += countInversions($arr, $temp, $left, $mid);
        $inversions += countInversions($arr, $temp, $mid + 1, $right);
        $inversions += merge($arr, $temp, $left, $mid, $right);
    }

    return $inversions;
}

function merge(array &$arr, &$temp, $left, $mid, $right) {
    $i = $left;
    $j = $mid + 1;
    $k = $left;
    $inversions = 0;

    while ($i <= $mid && $j <= $right) {
        if ($arr[$i] <= $arr[$j]) {
            $temp[$k] = $arr[$i];
            $i++;
        } else {
            $temp[$k] = $arr[$j];
            $inversions += ($mid - $i + 1); // Count inversions
            $j++;
        }
        $k++;
    }

    while ($i <= $mid) {
        $temp[$k] = $arr[$i];
        $i++;
        $k++;
    }

    while ($j <= $right) {
        $temp[$k] = $arr[$j];
        $j++;
        $k++;
    }

    for ($i = $left; $i <= $right; $i++) {
        $arr[$i] = $temp[$i];
    }

    return $inversions;
}

function inversion(array $array) {
    $temp = $array;
    $count = count($array);
    $result = countInversions($array, $temp, 0, $count - 1);

    return $result;
}

// $array = [5,3,4,2,1];
$array = [4,1,3,2,5];
$result = inversion($array);
echo $result;

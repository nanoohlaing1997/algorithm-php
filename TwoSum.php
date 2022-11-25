<?php

// reduce the complexity O(n) from O(logn)
function twoSum(array $num, int $target)
{
	// reverse the array num key and value
	// num 1 + num 2 = target
	// num 1 = target - num 2

	// 1 => 0, 24 => 1, 14 => 2, 53 => 3, 21 => 4
    $result = [];

    // 0 => 1, 1 => 24, 2 => 14, 3 => 53, 4 => 21
    foreach ($num as $key => $value) {
        if (!isset($result[$value])) {
            $result[$value] = $key; // value = 21
        }
        $complement = $target - $value; // 1
        if (isset($result[$complement]) && $result[$complement] !== $key) {

            $final = [$result[$complement], $key];
			echo "index of 2 sum number are " . $result[$complement] . ' and ' . $key. "\n";
			return $final;
        }
    }
}

// $num  = [1, 24, 14, 53, 21];
// $target = 22;
$num = explode(' ', readline("Enter number array: "));
$target = (int)readline("Enter target number: ");
twoSum($num, $target);


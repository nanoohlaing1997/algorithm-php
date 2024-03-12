<?php

function romanToNumeric($roman) {
    $romanNumerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $result = 0; // 10, 9, 19
    $prevValue = 0; // 10, 1, 10

    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentSymbol = strtoupper($roman[$i]); // X, I, X

        if (!isset($romanNumerals[$currentSymbol])) {
            return false;
        }

        $currentValue = $romanNumerals[$currentSymbol]; // 10, 1, 10

		if ($currentValue >= $prevValue) {
			$result += $currentValue;
		} else {
			$result += -$currentValue;
		}

        // Update the previous value for the next iteration
        $prevValue = $currentValue;
    }

    return $result;
}

// Example usage
// $romanNumeral = "XIX"; // Replace this with the desired Roman numeral
// $numericNumber = romanToNumeric($romanNumeral);

function sortFirstNameAndNumber(array $data)
{
    usort($data, function($a, $b) {
        $partA = explode(" ", $a);
        $partB = explode(" ", $b);

        $nameComparison = strcmp($partA[0], $partB[0]);

        if ($nameComparison == 0) {
            return (int)$partA[1] - (int)$partB[1];
        }
        return $nameComparison;
    });
    return $data;
}

function check(array $data) {
	$r = [];
	foreach ($data as $d) {
		$arrayD = explode(" ", $d);
		$res = romanToNumeric($arrayD[1]);
		$a = $arrayD[0] . " " . $res;
		$r[] = $a;
	}
    return sortFirstNameAndNumber($r);
}

$data = ["Nan I", "Hlaing X", "Thi III", "Thi I"];
check($data);



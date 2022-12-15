<?php

function isIsomorphicString(string $fistString, string $secondString) {
	// convert string to array
	$firstArray = str_split($firstString);
	$secondArray = str_split($secondString);

	$resultFlag = false;

	// combine array vice versa
	$firstSecondCombine = array_combine($firstArray, $secondArray); // first is key and second is value
	$secondFirstCombine = array_combine($secondArray, $firstArray); // second is key and first is value

	for ($i = 0; $i < count($firstString); $i++) {
		if (
			$firstSecondCombine[$firstArray[$i]] == $secondArray[$i] &&
			$secondFirstCombine[$secondArray[$i] == $firstArray[$i]]
		) {
			$resultFlag = true;
		} else {
			return false;
		}
	}
	return $resultFlag;
}

$inputFirstString = readline("Enter Your First String: ");
$inputSecondString = readline("Enter Your Second String: ");
$result = isIsomorphicString($inputFirstString, $inputSecondString);
echo $result;
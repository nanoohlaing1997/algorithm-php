<?php

function isSubsequence(string $target, string $haystack)
{
	if (empty($target)) {
		return true;
	}

	$haystackArray = str_split($haystack);
	$targetArray = str_split($target);

	$i = 0;
	$j = 0;
	$resultFlag = false;
	while ($i < count($haystackArray)) {
		if ($haystack[$i] == $targetArray[$j]) {
			$resultFlag = true;
			if ($j == count($targetArray) - 1) {
				break;
			}
			$i++;
			$j++;
		}

		if ($haystack[$i] != $targetArray[$j]) {
			$resultFlag = false;
			$i++;
		}
	}
	return $resultFlag;
}

$inputHayStackString = readline("Enter Your haystack string: ");
$inputTargetString = readline("Enter Your target string: ");
$result = isSubsequence($inputTargetString, $inputHayStackString);
echo (bool)$result;

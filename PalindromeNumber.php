<?php

/**
 * @param Integer $number
 * @return Boolean
 */
function isPalindrome(int $n)
{
	// One line solution
	// $n == strrev($n) ? true : false;


	// math solution
	// $n = 123
	$s = 0;
	$r = 0;
	$t = $n;

	while ($n > 0) {
		$r = intval($n % 10); // 3, 2, 1
		$n = intval($n / 10); // 12, 1, 0
		$s = intval(($s*10) + $r); // 0*10 + 3 = 3, 3*10 + 2 = 32, 32*10 + 1 = 321
	}

	if ($t == $s) {
		echo "true\n";
		return true;
	}
	echo "false\n";
	return false;
}

$inputNumber = (int)readline("Enter Your Palindrome Number: ");
isPalindrome($inputNumber);
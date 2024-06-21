<?php

class FizzBuzz
{
	function checkInteger(int $int)
	{
		if ($int % 3 == 0 && $int % 5 == 0) {
			return "FizzBuzz";
		} elseif ($int % 3 == 0) {
			return "Fizz";
		} elseif ($int % 5 == 0) {
			return "Buzz";
		}
		return $int;
	}
}
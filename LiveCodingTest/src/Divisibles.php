<?php

class Divisible
{
	function divide($n, $a, $b)
	{
		$result = [];
		for ($i = 1; $i <= $n; $i++) {
			if ($i % $a == 0 && $i % $b == 0) {
				$result[] = $i;
			}
		}
		return $result;
	}
}
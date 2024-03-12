<?php

function fibonacci(int $length)
{
	$fibonacci = [0,1];
	for ($i = 2;$i < $length; $i++) {
		$fibonacci[$i] = $fibonacci[$i -1] + $fibonacci[$i -2];
	}
	print_r($fibonacci);
}

fibonacci(5);
<?php

function strSearch($a, $b)
{
	$result = strpos($a, $b);
	if ($result !== false) {
		echo $result. "\n";
	}
	echo -1;
}

$haystack = "leetcode";
$neddle = "leeto";
strSearch($haystack, $neddle);
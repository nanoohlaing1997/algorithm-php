<?php

function simplicity($string)
{
	$a = str_split($string); // ['l', 'e', 't' ,'t' ,'e', 'r']
	$b = array_count_values($a); // ['l' => 1, 'e' => 2, 't' => 2, 'r' => 1]
	rsort($b); // [2,2,1,1]
	if (count($b) < 3) {
		fprintf(STDOUT, "%d\n", 0);
	} else {
	    array_shift($b); // remove first array of value
	    array_shift($b); // remove second array of value
	    fprintf(STDOUT, "%d\n", array_sum($b));
	}
}

fscanf(STDIN, '%s', $string);
simplicity($string);
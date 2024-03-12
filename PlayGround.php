<?php

function lengthOfLastWord($s) {
	$s = trim($s);
	$r = "";
	for ($i = strlen($s)- 1; $i >=0; $i--) {
		if ($s[$i] != " ") {
			$r = $r.$s[$i];
		} else {
			break;
		}
	}
	return strlen($r);
}

$n = "luffy is still joyboy";
print_r(lengthOfLastWord($n));
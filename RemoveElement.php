<?php

function removeElement(&$nums,$val) {
	$length=count($nums);
	for($i=0;$i<$length;$i++) {
		if ($nums[$i] == $val) {
			unset($nums[$i]);
		}
	}
	print_r($nums);
}

$array = [3,2,3,2];
$val = 3;
removeElement($array, $val);

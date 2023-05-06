<?php

function timeConversion(string $time)
{
	if (strpos($time, "AM") !== false) {
		echo trim($time, "AM");
	}
	if (strpos($time, "PM") !== false) {
		$h = substr($time, 0, 2);
		$minSec = substr($time, 2, 6);
		$hour = 12 + $h;
		if ($hour == 24) {
			echo "00" . $minSec;
			return;
		}
		echo $hour . $minSec;
	}
}

$time = "07:05:45PM";
timeConversion($time);
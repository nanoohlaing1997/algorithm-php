<?php

function stareCase(int $n)
{
	for ($i = 1; $i <= $n; $i++) {
		$space = $n-$i;
		$hash = $i;
		echo str_repeat(" ", $space);
		echo str_repeat("#", $hash) . ("\n");
    }
}

stareCase(4);

// out put
//    #
//   ##
//  ###
// ####

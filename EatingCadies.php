<?php

//[1,2,3,4]
function maxCandiesCountMyOwn(array $candies)
{
	$count = count($candies);
	if ($count < 2) {
		return 0;
	}

	if ($count % 2 == 0) {
		return 0;
	} else {
		$result = floor($count /2);
		return $candies[$result];
	}
}

// candies[1,2,1]
function maxCandiesCount(array $candies)
{
	$n = count($candies);

    if ($n <= 1) {
        return 0; // There should be at least two candies for a fair distribution
    }

    $aliceSum = 0;
    $bobSum = 0;
    $maxCandies = 0;

    $leftIndex = 0;
    $rightIndex = $n - 1; // 2

    while ($leftIndex < $rightIndex) {
        if ($aliceSum == $bobSum) {
            // Update maxCandies when both have equal weight
            $maxCandies = max($maxCandies, $aliceSum);

            // Move indices to the next candies
            $aliceSum += $candies[$leftIndex++]; // 2
            $bobSum += $candies[$rightIndex--];  // 2
        } elseif ($aliceSum < $bobSum) {
            // Alice needs more weight, so move leftIndex
            $aliceSum += $candies[$leftIndex++];
        } else {
            // Bob needs more weight, so move rightIndex
            $bobSum += $candies[$rightIndex--];
        }
    }

    // Check the last candy (if any) in the middle
    if ($leftIndex == $rightIndex) {
        $maxCandies = max($maxCandies, $aliceSum + $candies[$leftIndex]);
    }

    return $maxCandies;
}

$result = maxCandiesCount([1,2,1]);
echo "$result\n";
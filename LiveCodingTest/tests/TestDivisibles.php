<?php

require_once '../src/Divisibles.php';

function testDivisiblePass()
{
	$divisible = new Divisible();
	$result = $divisible->divide(20, 2, 3);
	assert($result === [6, 12, 18], 'Pass');
}

function testDivisibleFail()
{
	$divisible = new Divisible();
	$result = $divisible->divide(5, 12, 14);
	assert($result === [], 'Fail');
}

function runTests()
{
	testDivisiblePass();
	testDivisiblePass();
	echo "All test passes.\n";
}

runTests();
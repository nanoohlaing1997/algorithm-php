<?php

require_once '../src/Calculator.php';

function testAdd()
{
	$calculator = new Calculator();
	$result = $calculator->add(2, 3);
	assert($result === 5, "Expected 2 + 3 is 5");
}

function runTests()
{
	testAdd();
	echo "All test pass\n";
}

runTests();
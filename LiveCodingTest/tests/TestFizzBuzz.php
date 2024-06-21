<!-- Fizzbuzz test
write a program that takes an input of a positive integer and returns a string with the conditions below
if not, return the input as a string

"Fizz" if the input is divisible by 3

"Buzz" if the input is divisible by 5
"FizzBuzz" if the input is divisible by 3 and 5 -->

<?php

require_once "../src/FizzBuzz.php";

function testFizz()
{
	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->checkInteger(9);
	assert($result === "Fizz", "Expect as Fizz");
}

function testBuzz()
{
	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->checkInteger(5);
	assert($result === "Buzz", "Expect as Buzz");
}

function testFizzBuzz()
{
	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->checkInteger(15);
	assert($result === "FizzBuzz", "Expect as FizzBuzz");
}

function testFail()
{
	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->checkInteger(2);
	assert($result === 2, "Expect as input");
}

function runTests()
{
	testFizz();
	testBuzz();
	testFizzBuzz();
	testFail();
	echo "All tests pass\n";
}

runTests();
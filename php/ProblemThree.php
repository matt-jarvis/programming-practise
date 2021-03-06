<?php

/**
 * Write a function that computes the list of the first 100 
 * Fibonacci numbers. By definition, the first two numbers in 
 * the Fibonacci sequence are 0 and 1, and each subsequent number 
 * is the sum of the previous two. 
 * 
 * As an example, here are the first 10 Fibonacci numbers: 
 * 		0, 1, 1, 2, 3, 5, 8, 13, 21, and 34.
 *
 * @author	Matthew Jarvis
 * @created	31st Oct, 2015	
 */


/* 
 * Computes a list of Fibonacci numbers. 
 *
 * @param length: The amount of Fibonacci numbers to compute.
 * @return: The list of Fibonacci numbers (as strings).
 *
 * Note: Fibonacci numbers get big quickly, so big that they exceed
 *       the largest number an int or even a long can represent. For
 *       this reason, we store the numbers as a string and add them 
 *       using the bcadd function of the bcmath library.
 */
function fibonacci($length)
{
	// The start of the Fibonacci sequence
	$fib = array('0', '1');	
	
	// Compute the Fibonacci numbers.
	$fib_len = count($fib);
	while ($fib_len < $length)
	{
		$a = $fib[$fib_len - 1];
		$b = $fib[$fib_len - 2];
		$fib[] = bcadd($a, $b);
		$fib_len = count($fib);
	}
	
	return array_slice($fib, 0, $length);
}


/* Main Program */
// Compute the Fibonacci numbers
$fib = fibonacci(100);

// Print the Fibonacci numbers
echo "<h1>The first 100 Fibonacci numbers</h1>";
foreach($fib as $k=>$f)
	echo "Fibonacci $k: $f<br>";

?>
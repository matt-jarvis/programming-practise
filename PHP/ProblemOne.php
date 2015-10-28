<?php
/**
 * Write three functions that compute the sum of the numbers in 
 * a given list using a for-loop, a while-loop, and recursion.
 * Numbers: 3, 88, 22, 49, 65, 10, 1, 34, 101 and 77
 * Answer:	450
 *
 * @author	Matthew Jarvis
 * @date	28th Oct, 2015	
 */

/* 
 * Calculates and returns the sum of the numbers stored 
 * in an array using a for loop.
 * 
 * @param nums  The array of numbers to be summed
 */
function sum_with_for($nums)
{
	return 0;
}

/* 
 * Calculates and returns the sum of the numbers stored 
 * in an array using a while loop.
 * 
 * @param nums  The array of numbers to be summed
 */
function sum_with_while($nums)
{
	return 0;
}

/* 
 * Calculates and returns the sum of the numbers stored 
 * in an array using recursion.
 * 
 * @param nums  The array of numbers to be summed
 * @param i  The index to begin summing from
 */
function sum_with_recursion($nums, $i)
{		
	return 0;
}

// Main Program
$numlist = array(3, 88, 22, 49, 65, 10, 1, 34, 101, 77);
$sum_of_numlist = array_sum($numlist);
	
echo "Numbers: (";
$first_iteration = true;
foreach ($numlist as $num)
{
	if (!$first_iteration)
		echo ", ";  // Separator
	echo $num;
	$first_iteration = false;
}
echo ")<br>";

echo "Actual answer: $sum_of_numlist<br>";
echo "Calculating...<br>";
echo "For-loop answer: " . sum_with_for($numlist) . "<br>";
echo "While-loop answer: " . sum_with_while($numlist) . "<br>";
echo "Recursion answer: " . sum_with_recursion($numlist, 0) . "<br>";

?>
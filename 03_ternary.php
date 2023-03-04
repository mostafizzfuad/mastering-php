<?php

// ternary operator (large between three numbers)
$num1 = 5000;
$num2 = 8000;
$num3 = 9000;

$largeNumber = ($num1 > $num2) ? $num1 : (($num2 > $num3) ? $num2 : $num3);
echo $largeNumber;


echo PHP_EOL;
echo PHP_EOL;

// assignment
$fee = 18500;    //User's input

$twenty_five_percent = $fee * 25 / 100;  //Total of 25 parcent commission 
$twenty_percent = $fee * 20 / 100;      //Total of 20 parcent commission 
$fifteen_percent = $fee * 15 / 100;     //Total of 15 parcent commission 
$invalid = "Invalid";                  //If tution fee is less than 7000

//Logic
$commission = ($fee >= 20000) ? ($twenty_five_percent) : (($fee > 10000 && $fee < 20000) ? ($twenty_percent) : (($fee < 10000 && $fee > 7000) ? ($fifteen_percent) : $invalid));

echo $commission;


echo PHP_EOL;
echo PHP_EOL;

/////////////////////
$x=80000;

// $output= ($x>=100)?("Greater than 100"):("Less than 100");

// $output=($x>=100)?(($x>=500)?("Greater than 500"):("Less than 500 but grater than 100")):(($x<=50)?("Less than 50"):("Less than 100 but grater than 50"));

// $output =($x>1000)?("Grater than  1000"):("Less than or equal 1000");
// ()?(()?(()?():()):()):(()?():(()?():()));
$output =($x>=1000 )?(($x>=50000)?("Grater than 50000"):("Grater than 1000 but less than 50000")):(($x>=0)?("Grater than zero but less than 1000"):("Negative number"));


 echo $output;
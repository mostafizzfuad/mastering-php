<?php 

$number = 13;

// write a program to check a number even or odd
if($number % 2 == 0) echo "Even";
else echo "Odd";

echo "\n";

// greater than and less than
if($number > 10) echo "$number is greater than 10";
else echo "$number is less than 10";

echo "\n";

// equal
$m = 25;
$n = 25;
if($m == $n) echo "Equal";
else echo "Not Equal";

echo "\n";

// not equal
$m = 25;
$n = 30;
if($m != $n) echo "Not Equal";
else echo "Equal";


/**** Comparison Operators
==
!=
>
<
>=
<=
****/

echo "\n";

// greater than or equal + less than or equal
$age = 14;
if($age>=13 && $age<=19) echo "Teenager"; // use && 
else echo "Not Teenager";

echo "\n";

// write a program to check a year is leap year ?
$year = 2024;
if($year % 400 == 0) echo "Leap Year";
elseif($year%4==0 && $year%100!=0) echo "Lear Year";
else echo "Not Leap Year";
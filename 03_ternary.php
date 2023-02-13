<?php 

// ternary operator (large between three numbers)
$num1 = 5000;
$num2 = 8000;
$num3 = 7000;

$largeNumber = ($num1 > $num2) ? $num1 : (($num2 > $num3) ? $num2 : $num3);
echo $largeNumber;


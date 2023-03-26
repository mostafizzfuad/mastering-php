<?php

echo "Hello World ! \n";

// print using variable
$countryName = "Bangladesh";
$year = 2023;
echo $countryName; 
echo "\n";
echo $year;

echo "\n\n";


// string concate
$name = "Mostafizur";
echo "Hello ". $name; 
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}";

echo "\n\n";


// using multiple variable concate
$name = "Mostafizur";
$question = "how are you ?";
echo "Hello {$name}, {$question}";

echo "\n\n";

// constant variable
define("PI", 3.1416);
echo PI;
echo "\n";
echo "Value of PI = ". PI;

echo "\n";
echo constant ("PI");

echo "\n";
$constant = "constant";
echo "value of PI = {$constant("PI")}";

// single line comment

/****
Multiple line comment ::
Name : Mostafizur Rahman Fuad
Phone : 01794059375
Bsc In CSE, BUBT
****/

echo "\n\n";

// var_dump()
$name = "Mostafizur";
var_dump($name);

$age = 25;
var_dump($age);

$age = 25.245;
var_dump($age);

$age = null;
var_dump($age);

$result = true;
var_dump($result);


echo "\n\n";

// echo and printf() [direct print kore]
$name = "Mostafizur";
echo "My name is {$name}";
echo PHP_EOL;
printf("My name is %s", $name);
echo PHP_EOL;

// sprintf()  [data return kore]
$output = sprintf("My name is %s", $name);
echo $output;
echo PHP_EOL;
echo strtoupper($output);
echo PHP_EOL;
echo strtolower($output);
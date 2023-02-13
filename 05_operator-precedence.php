<?php

// Operator precedence

$a = false || true; // true
$b = false or true; // ($b = false) or true
var_dump($a , $b);


$c = true && false; // false
$d = true and false; // ($b = true) or false
var_dump($c , $d);
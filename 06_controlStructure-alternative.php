<?php

// echo PHP_EOL;  (use for newLine)

$number = 15;

/// if-else 
if($number%2==0):
    echo "Even Number";
    echo PHP_EOL;       
    echo "Hello Mostafizur";

else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Hello Fuad";
endif;

echo PHP_EOL;    
echo PHP_EOL;    

/// switch-case
$rem = $number % 2;

switch($rem):
    case 0:
        echo "Even Number";
        echo PHP_EOL;       
        echo "Hello Mostafizur";
        break;
    case 1:
        echo "Odd Number";
        echo PHP_EOL;
        echo "Hello Fuad";
        break;
    endswitch;
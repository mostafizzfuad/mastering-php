<?php

// switch case (check even odd)
$number = 6;
$rem = $number % 2;

switch($rem) {
    case 0: 
        echo "Even";
        break;

    default:
        echo "Odd";
        break;
}

echo "\n\n";

// nasted switch-case
$number = 8;
$rem = $number % 2;

switch($rem) {
    case 0:
        switch($number) {
            case $number > 0:
                echo "Positive Even";
                break;
            
            case $number < 0:
                echo "Negative Even";
                break;    
        }
        break;
    
    default:
    switch($number) {
        case $number > 0:
            echo "Positive Odd";
            break;
        
        case $number < 0:
            echo "Negative Odd";
            break;    
    }
    break;
}

echo "\n";
// nasted switch-case
switch(true) {
    case ($rem==0 && $number>0):
        echo "Positive Even";
        break;
    
    case ($rem==0 && $number<0):
        echo "Negative Even";
        break;
    
    case ($rem==1 && $number>0):
        echo "Positive Odd";
        break;
    
    case ($rem==-1 && $number<0):
        echo "Negative Odd";
        break;
}



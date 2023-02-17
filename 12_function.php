<?php

// determine if a number even or odd
function isEven($n) {
    if($n%2==0) {
        return true;
    }
    return false;
}

$number = 12;
if(isEven($number)) {  //argument pass
    echo "Even";
}else {
    echo "Odd";
}


echo PHP_EOL;
echo PHP_EOL;


//////// ****** factorial using for loop ****** /////////
function factorial(int $num) {
    $fact = 1;
    for($i=1; $i<=$num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$num = 5;
$result = factorial($num);
echo $result;




echo PHP_EOL;
echo PHP_EOL;


//////// ****** default value of function ****** /////////
function serve($foodType, $numberOfItems="1 cup") {
    echo "{$numberOfItems} of {$foodType} have been serve";
}

$foodType = "Coffee";
$numberOfItems = "4 cups";
serve($foodType);




echo PHP_EOL;
echo PHP_EOL;

//////// ****** return type fixed ****** /////////
function sum(int $x, int $y, int $z):int {
    // return "string"; 
    return $x+$y+$z;
}
$result = sum(10,20,30);
echo $result;



echo PHP_EOL;
echo PHP_EOL;

//////// ****** unlimited argument accept in function ****** /////////
function sum2(int ...$number):int {
    $result = 0;
    for($i=0; $i<count($number); $i++) {
        $result += $number[$i];
    }
    return $result;
}
$result = sum2(10,20,30,40,50,25);
echo $result;
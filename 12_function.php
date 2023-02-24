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


echo PHP_EOL;
echo PHP_EOL;


//////// ****** Dividing a large function into smaller parts ****** /////////

function dotaskA() {
    echo "Task A Done\n";
}
function dotaskB() {
    echo "Task B Done\n";
}
function dotaskC() {
    echo "Task C Done\n";
}
function dotaskD() {
    echo "Task D Done\n";
}

function doTheLargerTask() {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
}

doTheLargerTask();



echo PHP_EOL;
echo PHP_EOL;


//////// ****** print 1 to 10 using recursive function ****** /////////

function print1To10(int $number) {
    if($number > 10) {
        return;
    } 
    echo $number." ";
    $number++;
    print1To10($number);
}
print1To10(1);

echo PHP_EOL;
echo PHP_EOL;

//////// ****** print Mth to Nth number using recursive function ****** /////////

function printMToN(int $start, int $end) {
    if($start > $end) {
        return;
    } 
    echo $start." ";
    $start++;
    printMToN($start, $end);
}
printMToN(26,43);


echo PHP_EOL;
echo PHP_EOL;

//////// ****** print Mth to Nth number using recursive function ****** /////////

function printStep(int $start, int $end, int $step=1) {
    if($start > $end) { //break out of loop
        return;
    } 
    echo $start." ";
    $start += $step;
    printStep($start, $end, $step);
}
printStep(25,43,5);



echo PHP_EOL;
echo PHP_EOL;

//////// ****** print fibonacci series using recursive function ****** /////////

function fibonacciSeries($old, $new, $end) {
    static $start;
    $start = $start ?? 1;

    if($start > $end) { //break out of loop
        return;
    } 
    $start++;
    
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacciSeries($old, $new, $end);
}

fibonacciSeries(0, 1, 15);


echo PHP_EOL;
echo PHP_EOL;


//////// ****** factorial using recursive function ****** /////////

function factorialUsingRecursive($n) {
    if($n <= 1) { //break out of loop
        return 1;
    } 
    return $n * factorial($n - 1);
    factorialUsingRecursive($n);
}

echo factorialUsingRecursive(5);

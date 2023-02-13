<?php

//////// ****** for loop ****** /////////


/// print 1 to 10 using for loop
for($i=1; $i<=10; $i++) {
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;

/// print 1 to 10 even number using for loop
for($i=2; $i<=10; $i+=2) {
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;



//////// ****** while loop ****** /////////

/// print 1 to 10 odd number using while loop
$i=1;
while($i<=10) {
    echo $i;
    echo PHP_EOL;
    $i+=2;
}



echo PHP_EOL;
echo PHP_EOL;




//////// ****** goto ****** /////////

/// print 1 to 10 even number using do while loop
$i=0;

fuad:
    $i+=2;
    echo $i;
    echo PHP_EOL;
    
if($i<10) goto fuad;


echo PHP_EOL;
echo PHP_EOL;


//////// ****** for loop multiple stepping ****** /////////
for($i=1, $j=10; $i<=10; $i++, $j--) {
    echo $i;
    echo " : ";
    echo $j;
    echo PHP_EOL;
}



echo PHP_EOL;
echo PHP_EOL;


//////// ****** factorial using for loop ****** /////////
$n = 5;
$fact = 1;

for($i=1; $i<=$n; $i++) {
    $fact *= $i;
}
echo $fact;



echo PHP_EOL;
echo PHP_EOL;


//////// ****** print "1 to 100 divisible number by 9" using for loop ****** /////////
for($i=0; $i<=100; $i+=9) {
    echo $i;
    echo PHP_EOL;
}
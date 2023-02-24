<?php

//////// ****** global variable scope in function ****** /////////

$name = "Mostafizur";  // global variable

function doSomething() {
    // 1st rules
    global $name;
    echo $name;

    echo PHP_EOL;
    // 2nd rules
    echo $GLOBALS ['name'];
}

doSomething();


echo PHP_EOL;
echo PHP_EOL;


//////// ****** local variable scope in function ****** /////////

function doAnything() {
    global $varsityName; // convert to global variable
    $varsityName = "BUBT";  // local variable
}

doAnything();
echo $varsityName;


echo PHP_EOL;
echo PHP_EOL;


//////// ****** static variable scope in function ****** /////////

function doExtra() {
    static $i;
    $i = $i ?? 0;

    $i++;

    echo $i. " extra";
    echo PHP_EOL;
}
function doNew() {
    static $i;
    $i = $i ?? 0;

    $i++;

    echo $i. " new";
    echo PHP_EOL;
}

doExtra();
doExtra();
doExtra();
doNew();
doNew();
doExtra();
doNew();
doExtra();
doExtra();


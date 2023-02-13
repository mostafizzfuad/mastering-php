<?php

/// print 1 to 10 using for loop (using break)
for($i=1; $i<=10; $i++) {
    echo $i;
    echo PHP_EOL;

    if($i==5) 
        break;
}

echo PHP_EOL;
echo PHP_EOL;

/// print 1 to 10 using for loop (using continue)
for($i=1; $i<=10; $i++) {

    if($i%3==0) 
        continue;
        
    echo $i;
    echo PHP_EOL;

    
}
<?php


/////////////////// *** global keyword *** ///////////////////

/////////////////// *** global keyword *** ///////////////////


/////////////////// *** using static keyword *** ///////////////////
function staticKeyword() {
    static $x = 0;
    echo $x. " ";
    $x++;
}
  
staticKeyword();
staticKeyword();
staticKeyword();
staticKeyword();
staticKeyword();

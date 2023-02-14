<?php

$defaultAutoPassMark = 70;

$studentMark = 45;

$result = $studentMark ?? $defaultAutoPassMark; // if user input studentMark => print studentMark ; otherwise print default

echo $result;
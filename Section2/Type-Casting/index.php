<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;


// Implicit Conversion
$result = $number1 + $number2; // int
$result2 = $number1 + $number3; // int (string to int)
$result3 = $number3 + $number3; // int (string to int)
$result4 = $number1 . $number2; // string (int to string)
// $result5 = $fruit + $number2 // ERROR
$result6 = $number1 + $bool1; // int (bool to int conversion)
$result7 = $number1 + $bool2; // int (bool to int) bool converted to 0
$result8 = $number1 + $null; // int (null to int) null converted to 0

// var_dump($result);
// var_dump($result2);
// var_dump($result4);
// var_dump($result6);
// var_dump($result7);
// var_dump($result8);

// Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1;

var_dump($result);

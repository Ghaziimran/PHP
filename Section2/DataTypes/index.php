<?php

// String
$name = 'Naruto Uzumaki';
$name2 = "Sasuke";

var_dump($name);
echo getType($name2);
echo '<br />';

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

// Array
$friends = ['john', 'jack', 'jane'];
var_dump($friends);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resourse
$file = fopen('textfile.txt', 'r');
var_dump($file);

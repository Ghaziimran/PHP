<?php

$names = array('john', 'jack', 'jill');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// print_r($names);

// echo $names[2];
// echo $numbers[3];

//add element to array
$numbers[6] = 100;
$numbers[] = 101;

$numbers[3] = 200;

unset($numbers[3]);

$names = array_values($numbers);

inspect($numbers);

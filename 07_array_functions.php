<?php

$fruits = ['apple', 'orange', 'pear'];



// get length
// echo count($fruits);

echo in_array('pear', $fruits);

// add to an array
$fruits[] = 'grape';
array_push($fruits, 'blue berries');
array_unshift($fruits, 'mango');


// remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[0]);


// array_push($fruits, ...$fruits);
$new = array_merge($fruits, [1,2,3]);
// print_r($new);


// array_combine();
// print_r(array_keys($fruits));

// $apples = array_map(function($fruit) {
//   return $fruit === 'apple';
// }, $fruits);


$apples = array_filter($fruits, fn($fruit) => $fruit === 'apple');

print_r($apples);


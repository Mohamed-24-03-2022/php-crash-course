<?php

$numbers = [1, 2, 3, 4, 5];
$numbers2 = array(11, 22, 33, 44, 55);

// echo $numbers[1];


// associative arrays
$colors = [
  'r'=>'red',
  'b'=>'blue',
];

var_dump($colors['r']);

// associative arrays => json
$person = [
  'name' => 'John',
  'age' => 30,
  'hobbies' => ['reading', 'coding'],
];
$people = [
  $person,
  [
    'name' => 'Jane',
    'age' => 25,
    'hobbies' => ['reading', 'coding'],
  ],
];

var_dump(json_encode($people));
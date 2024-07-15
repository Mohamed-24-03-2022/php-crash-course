<?php

$x = 12;
function ezpz(){
  global $x;
  return $x;
}


$arrow = fn()=> 'arrow func';

echo $arrow();
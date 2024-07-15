<?php

// for ($i=0; $i < 10; $i++) { 
//   echo'ezpz';
//   echo'<br />';
//   echo nl2br("\n");
// }

$arr = ['reading', 'coding', 'ezpz'];

foreach ($arr as $i => $value) {
  echo $i . ': ';
  echo $value;
  echo'<br />';
}

foreach ($arr as $key => $item) {
  echo $item;
  echo'<br />';
}

foreach ($arr as $item) {
  echo $item;
  echo'<br />';
}
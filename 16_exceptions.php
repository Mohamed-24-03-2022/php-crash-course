<?php


  $throw = fn()=> throw new Exception('not as it is');
  
  

try {
  $throw();
} catch (Exception $e) {
  echo $e;
}


echo '<br>';
echo 'after the exception beign thrown'


?>
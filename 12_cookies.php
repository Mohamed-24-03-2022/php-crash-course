<?php
setcookie('name', 'moh', time() + 60000);

if(isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}
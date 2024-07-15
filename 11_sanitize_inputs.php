<?php



// print_r($_GET);

// echo $_GET['name']. ' ';
// echo $_GET['age'];

if(isset($_POST['submit'])) {
  $name = filter_var( $_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  

  echo $name . ' ';
  echo '<br>';
  echo 'Password: ' . $password;
}


echo '<br>';
?>


<a href=<?php echo $_SERVER['PHP_SELF']; ?> >   Click</a>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<!-- <label>Age: </label>
  <input type="age" name="age">
</div> -->
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
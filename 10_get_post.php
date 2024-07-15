<?php



// print_r($_GET);

// echo $_GET['name']. ' ';
// echo $_GET['age'];

if(isset($_POST['submit'])) {
  echo $_POST['name']. ' ';
  echo $_POST['password'];
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
<?php

session_start();

if(isset($_POST['submit'])) {
  $username = filter_var( $_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'moh' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
  

}


echo '<br>';
?>


<a href=<?php echo $_SERVER['PHP_SELF']; ?> >   Click</a>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
  <label>username: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<!-- <label>Age: </label>
  <input type="age" username="age">
</div> -->
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
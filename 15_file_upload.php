<?php

$allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'svg');


if(isset($_POST['submit'])){
  if (!empty($_FILES['file']['name'])) {
    

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $target_dir = "uploads/$file_name";

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    
    
    if (in_array($file_ext, $allowed_ext)) {
      if($file_size<= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p style="color: green;">File uploaded.</p>';
      } else {
        $message = '<p style="color: red;">File is too large.</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type.</p>';
    }


  } else {
    $message = '<p style="color: red;">Please choose a file.</p>';
  }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File upload</title>
</head>
<body>


<?php echo $message ?? 'Select the image to upload:'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

  <input type="file" name="file" id="upload">
  <input type="submit" value="submit" name="submit">

</form>
  
</body>
</html>
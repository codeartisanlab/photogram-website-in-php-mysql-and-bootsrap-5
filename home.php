<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
  <?php
    if(isset($_SESSION['user_id'])){
      header("location:user/profile.php");
    }else{
      header("location:user/login.php");
    }
  ?>
  </body>
</html>
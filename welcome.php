<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location:login.php");
exit;
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    <style>
      .logout a{
        text-decoration:none;
      }
      .logout a:hover{
        color:red;
        border-bottom:2px solid red;
      }
    </style>
  </head>
  <body>
    <?php require 'partial/_nav.php' ?>
  
<div class="container my-5">

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">wel come  -<?php echo $_SESSION['username'] ?></h4>
      <p >You have been Successfully logged in to this web site,<h3> Your user Name is -: <?php echo $_SESSION['username'] ?> .</h3></p>
      <hr>
      <h3 class="logout"><a href="/loginsystem/logout.php">Logout</a> </h3>
    </div>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
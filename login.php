<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
        
// var_dump($password);


  // $sql = "Select * from user where username='$username' AND password ='$password'";
  $sql = "Select * from user where username='$username' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
  while($row=mysqli_fetch_assoc($result)){
    if(password_verify($password, $row['password'])){
      $login = true;
      session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:welcome.php");
    }
    else{
      $showError = "Invalid id password";
      }
  }    
}
else{
$showError = "Invalid id password";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
            border-radius:30px;
        }
        label{
            display:block;
            text-align:center;
        }
        
    </style>
</head>
<body>
<?php require 'partial/_nav.php' ?>

<?php
if($login){  
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong>Congratulations ! You are Logged In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>';
}
if($showError){  
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Sorry!!!</strong>'. $showError. '
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</button>
</div>';
}
?>



<div class="container my-4  bg-success text-light">

<h1 class="text-center"> Login</h1>

<form action="/loginsystem/login.php" method="post">
  <div class="mb-3 my-4 ">
    <label for="username" class="form-label"></label>
    <input type="text" placeholder="enter your user name" name="username" class="form-control my-4" id="username" aria-describedby="emailHelp">
</div>
  <div class="mb-3 ">
    <label for="password" class="form-label"></label>
    <input type="password" placeholder="enter your password" name="password" class="form-control my-4" id="password">
  </div>
  
  <button type="submit" class="btn btn-primary  ">Login</button>
  </div>
    
  

</form>

</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="    sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
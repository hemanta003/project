<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $space = " ";
    if(empty($username) || empty($password) || empty($cpassword) || (preg_match('/\s/', $username)) ||   (preg_match('/\s/', $password))  || (preg_match('/\s/', $cpassword)) ){
      $showError = " Sorry !!! cannot add null value or white space ";
    }
    else{
         // $exists=false;
// var_dump($password);
// var_dump($cpassword);
// check wheather this user exist 
$existSql = "SELECT * FROM user WHERE username = '$username'
";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows >0){
  // $exists = true;
  $showError = " User name Already Exists";
}
    else{
      $exists = false;
        if($password == $cpassword){
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $sql = "insert into user(username,password) values('$username','$hash')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
        
      }
      else{
        $showError = "Password do not match ";
      }
}


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
    <title>Signup</title>
    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
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
if($showAlert){  
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong>Congratulations ! Your Account Is Now Created.
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

<h1 class="text-center"> Sign Up</h1>

<form action="/loginsystem/signup.php" method="post">
  <div class="mb-3 ">
    <label for="username" class="form-label">UserName</label>
    <input type="text" name="username" maxlength="15" class="form-control" id="username" aria-describedby="emailHelp">
</div>
  <div class="mb-3 ">
    <label for="password"                  class="form-label">Password</label>
    <input type="password" minlength="6" name="password" placeholder="minimum length 6" class="form-control" id="password">
  </div>
  <div class="mb-3 ">
  
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" placeholder="make sure both pwd same" id="cpassword" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary  ">SignUp</button>
  </div>
    
  

</form>

</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="    sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
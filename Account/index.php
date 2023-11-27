<?php

include ("_dbconnect.php");

$alertShow = false;
$pwmatch = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if(isset($_POST['registeration'])){
    $UserName = $_POST['username'];
    $UserEmail = $_POST['email'];
    $Userpassword = $_POST['password'];
    $UserCpassword = $_POST['cpassword'];

    $existsql = "SELECT * from `registertb` where `username` = '$UserName'";
    $exitsresult = mysqli_query($connection,$existsql);
    $numbexistrows = mysqli_num_rows($exitsresult);

    if ($numbexistrows > 0) {
        $pwmatch = "UserName Already Exists";
  
    }
    else {

    if ($Userpassword == $UserCpassword) {
        $hashpassword = password_hash($Userpassword, PASSWORD_DEFAULT);
        $qry = "INSERT INTO `registertb` (`username`, `password`,`email`) VALUES ( '$UserName', '$hashpassword','$UserEmail');";
    $result = mysqli_query($connection,$qry);
    if ($result) {
        $alertShow = true;
         }
    }
    else {
        $pwmatch = "Password not match";
    }
}
}
  }



  $login = false;
  $Error = false;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['login'])){

      $UserName = $_POST['Lgnusername'];
      $Userpassword = $_POST['Lgnpassword'];
      $qry = "SELECT * from `registertb` where `username` = '$UserName'";
  
      $result = mysqli_query($connection, $qry);
      $num = mysqli_num_rows($result);
  
      if ($num == 1) {
          while ($row = mysqli_fetch_assoc($result)) {
              if (password_verify($Userpassword, $row['password'])) {
                  $login = true;
                  session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['Lgnusername'] = $UserName;
                  header("location: /newwork/admin-panel");
  
              }
              else {
                  $Error = "Invalid Credentials";
              }
          }
      }
  } else {
      $Error = "Invalid Credentials";
  }
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

  <?php
        if ($alertShow) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Account Has Created Now You Can Login!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';}

    if ($pwmatch) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> Failed!</strong>  '. $pwmatch .'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';}


    if ($login) {
      echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You Are Logged In! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  ';
  }

  if ($Error) {
      echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Failed!</strong>  ' . $Error . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  ';
  }

    ?>



    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Lgnusername" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Lgnpassword" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="index.php" class="sign-up-form" method = "POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name ="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="Confirm Password" />
            </div>
            <input type="submit" name="registeration" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

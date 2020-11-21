<?php

// session_start();

//        $_SESSION["reg_name"]=$uname;
//        $_SESSION["reg_pass"]=$upass;
$a="";
$b="";
$c="";
$d="";
       
?>
<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<body>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin justify-content-center">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body align-middle" ">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post" action="test.php">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control"   name="reg_name"  placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="reg_email" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="reg_pass" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control"  name="reg_confirmpass" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>
              <input type="submit" value="register" type="submit"  class="btn btn-lg btn-primary btn-block text-uppercase"name="submit"  >

              <a class="d-block text-center mt-2 small" href="#">Sign In</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php


  ?>

</body>
</html>
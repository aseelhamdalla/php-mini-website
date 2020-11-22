<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <?php
    $imgrdn = ['https://cdn.pixabay.com/photo/2020/11/16/16/05/hoverfly-5749361_1280.jpg',
    'https://cdn.pixabay.com/photo/2020/11/13/20/20/giraffe-5739828_1280.jpg',
    'https://cdn.pixabay.com/photo/2020/10/24/03/09/street-5680458_1280.jpg'];
shuffle($imgrdn);
?>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('<?php echo $imgrdn[0]?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('<?php echo $imgrdn[1]?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('<?php echo $imgrdn[2]?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
</body>
<?php
session_start();
if(empty($_SESSION['multi'])){
$_SESSION["multi"]=array( 
  array(
  'username'=>"Lana",
  'password'=>"123@orange",
  'role'=>"admin"
  ),
  array(
      'username'=>"Dania",
      'password'=>"456@orange",
      'role'=>"user"
  ),            
  array(
      'username'=>"Leen",
      'password'=>"789@orange",
      'role'=>"user"
  ), 
  array(
      'username'=>"Ali",
      'password'=>"321@orange",
      'role'=>"user"
  ),
  array(
      'username'=>"Ayad",
      'password'=>"654@orange",
      'role'=>"user"
  )
  );}
print_r($_SESSION["multi"]);
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>‏
</html>
12:02
--------------------------------------------------------------------------
12:03
register page
12:03
----------------------------------------------------------------------------
12:03
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.note
{margin:10%;
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0082FF, #8811C5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #CED4DA;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062CC;
    color: #fff;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// array
// define variables and set to empty values
$nameErr = $phoneErr = $confirmErr = $error= $passERR = "";
$name = $phone = $repass = $pass = "";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  if (empty($_POST['phone'])) {
    $phoneErr= "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["password"])) {
    $passERR = "password is required";
  } else {
    $pass= test_input($_POST['password']);
  }
  if (empty($_POST["cpassword"])) {
    $confirmErr = "repassowrd required";
  }else{
    $repass = test_input($_POST["cpassword"]);
  }
if(($_POST["cpassword"])!=($_POST["password"])){
    $confirmErr = "password not matching";
} else{
 if (!empty($name)&&!empty($pass)){
   $new = array('username'=>$name,'password'=>$pass,'role'=>"user");
  array_push($_SESSION["multi"], $new);
  echo"<pre>";
 }
  print_r($_SESSION["multi"]);
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Welcome your  website .</p>
                </div>
                <div class="form-content">
                <form action="result.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" value="" name="username"/>
                                <span class="error">* <?php echo $nameErr;?></span>
                                   <br><br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number *" value="" name="phone"/>
                                <span class="error">* <?php echo $phoneErr;?></span>
                                          <br><br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Password *" value="" name="password"/>
                                <span class="error">* <?php echo$passERR;?></span>
                                          <br><br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Password *" value="" name="cpassword"/>
                                <span class="error">* <?php echo $confirmErr ;?></span>
                                          <br><br>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>‏
</html>
12:03
---------------------------------------------------------------
12:03
result page
12:03
-----------------------------------------------------------
12:03
<?php
include('register.php');
?>
<?php
// Start the session

//Start your session.
session_start();
 
// //A simple array that contains product IDs.
// $cartArray =array( array("role" => "admin" , "username" => "Aseel" , "passowrd" => "123"),
// array("role" => "user" , "username" =>  "user1" , "passowrd" => "111"),
// array("role" => "admin" , "username" =>  "user2" , "passowrd" => "1234"),
// array("role" => "user" , "username" =>  "user3" , "passowrd" => "222"));


$_SESSION["a"] =$_SESSION["a"] ."," .$_POST["reg_name"] ;

$_SESSION["b"] =$_SESSION["b"] ."," .$_POST["reg_pass"] ;

$_SESSION["c"] =$_SESSION["c"] ."," .$_POST["reg_email"] ;
$_SESSION["d"] =$_SESSION["d"] ."," .$_POST["reg_confirmpass"] ;
 echo "<pre>";

print_r($_SESSION);

// session_start();








// $_SESSION["b"] = $_POST["reg_email"] ;
// $_SESSION["c"] = $_POST["reg_pass"] ;
// $_SESSION["d"] = $_POST["reg_confirmpass"] ;
//  echo "<pre>";
// print_r($_SESSION) ;

// print_r($_SESSION["a"]) ;

// foreach($_SESSION as $key => $value){
//  $aa= $_POST['reg_name'];
// $bb=$_POST["reg_email"];
// $cc=$_POST["reg_pass"];
// $dd=$_POST["reg_confirmpass"]

// array_push($_SESSION,$aa); 
  
 echo "<pre>";
print_r($_SESSION) ;


if(isset($_REQUEST["logout"])){
    session_unset();
    session_destroy();
    echo"<script> location.href='registerpage.php'</script>";
}

  
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="submit" value="logout" class="form-control" name="logout" >
</form>
</body>
</html>
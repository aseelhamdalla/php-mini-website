

<?php
session_start();



// echo "<pre>";

// session_unset();
// session_destroy();

if (!isset($_SESSION['usersdb']) && empty($_SESSION['usersdb'])) {
$_SESSION['usersdb'] = array( array("role" => "admin" , "username" => "Aseel" , "passowrd" => "123"),
                  array("role" => "user" , "username" =>  "user1" , "passowrd" => "111"),
                  array("role" => "user" , "username" =>  "user2" , "passowrd" => "1234"),
                  array("role" => "admin" , "username" =>  "user3" , "passowrd" => "222"));
}
                
foreach($_SESSION['usersdb'] as $key => $value){
    if($_POST['role'] == "admin"){    
         if($_POST['name'] == $_SESSION['usersdb'][$key]["username"] && $_POST['pass'] == $_SESSION['usersdb'][$key]["passowrd"] ){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['pass'];
            header("Location: welcome_admain.php");
            }
    }

    if ($_POST['role'] == "user") {
      if($_POST['name'] == $_SESSION['usersdb'][$key]["username"] && $_POST['pass'] == $_SESSION['usersdb'][$key]["passowrd"] ){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['pass'];
            header("Location: welcome_user.php");
          }
        }
        
     }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
  
</body>
</html>
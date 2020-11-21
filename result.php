<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form with PHP</title>
</head>
<body class="container">
    

<div class="jumbotron jumbotron-fluid" style="margin-top:50px; font-size:24px;">
  <div class="container">
  <h4>Welcome</h4>

<?php
       session_start();
      echo "Welcome Mr:";
    echo $_POST['name'];
     echo $_POST['password'];
     echo "<br>";

    echo $_SESSION["favcolor"];
     echo "<br>";
    echo $_SESSION["favanimal"];
  

?>



</div>
</div>

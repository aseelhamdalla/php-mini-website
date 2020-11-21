<?php

session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

?>


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
    


    <form method='post' action="result.php" style="margin-top:50px">
  <div class="form-group">
  <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name">
   </div>
  <div class="form-group">
    <label for="name">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="submit" value="Submit" name="submit" />
  </form>



<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
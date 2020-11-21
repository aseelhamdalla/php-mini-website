 <?php
   session_start();
   
   if (isset($_GET['userId'])) {
       if (isset($_SESSION['usersdb'][$_GET['userId']])){
            unset($_SESSION['usersdb'][$_GET['userId']]);
       }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body> 
    <h1>Welcome admin</h1>
<table border="3">
<tr>
	<td>Username</td>
	<td>Action</td>
</tr>
<?php
    foreach($_SESSION['usersdb'] as $key => $value){
        if($_SESSION['usersdb'][$key]["role"] == 'user' ){
       echo "<tr>";
       echo "<td>" . $_SESSION['usersdb'][$key]['username'] . "</td>";
       echo "<td><button class= 'btn btn-danger' onclick=deleteUser(" . $key . ")>Delete</button></td>";
       echo "</tr>";
     
                  }
                 
         }
?>

</table>

<script>
    function deleteUser(key){
        window.location = 'http://localhost/session/welcome_admain.php?userId='+ key;
        // console.log(key);
       // location.reload();
    }
</script>
</body>
</html>
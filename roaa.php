<?php

if(isset($_POST['submit'])){
 echo "yes it work";
$username =$_POST['name'];
$password =$_POST["password"]; 
echo "<br>";
echo "user name :".$_POST["name"];
echo "<br>";

echo "password is  : ". $_POST["password"];
echo "<br>";
}
$multi=array(array("aseel",12,"admain"),
             array("yousef",123,"user"),
             array("zain",1234,"user"));

          // // ////*TO Count array length*/////////////////////////
             $count = 0;
             foreach ($multi as $type) {
                 $count+= count($type); }

               //// / //loop 
             for($i=0;$i<=$count;$i++){
                 if($username==$multi[0][0]&& $password==$multi[0][1])
                 {
                    //  echo "<h1 >welcome admain </h1>";
                                 header("Location: welcome_admain.php");

                    // break;


                 }elseif($username==$multi[1][0]&& $password==$multi[1][1]){
                     
                     echo " <h1>welcome user</h1>";
                    break;

                 }
                }

            //  echo "<pre>";

            // print_r($multi)."<br>";


// ?>


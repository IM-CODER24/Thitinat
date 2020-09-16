<?php 
session_start();
 $host = "localhost";
 $username = "root";
 $password = "";
 $objConnect = "cinima";
 $customer = "test_person";
 $user = "";
 $q = intval($_GET['q']);

 //if($objConnect){
    //echo "connect successfully !!";
  //}

  $conn = mysqli_connect($host, $username, $password, $objConnect,);


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   mysqli_select_db($con,"ajax_demo");
   $sql="SELECT Tper_Name, Tper_Lastname  FROM `test_person` WHERE Tper_ID= '".$q."'";
   $result = mysqli_query($con,$sql);

   echo "<h2>  you are ".$row['Tper_Name']." <h2>";

    mysqli_close($con);
?>



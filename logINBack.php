<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$objConnect = "cinima";

 $conn = mysqli_connect($host, $username, $password, $objConnect);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM `test_person` WHERE Tper_Gmail='$email' AND Tper_Password ='$pass'";
$objQuery = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($objQuery);

if (!$row){
    ?> <script language="javascript"> alert('log in fail');
    window.location.replace("register.php"); </script> <?php
}

else {
$_SESSION['Tper_ID'] = $row['Tper_ID'];
$_SESSION['Tper_Name'] = $row['Tper_Name'];
$_SESSION['Tper_Lastname'] = $row['Tper_Lastname'];
$_SESSION['Tper_Tel'] = $row['Tper_Tel'];
$_SESSION['Tper_Gmail'] = $row['Tper_Gmail'];
$_SESSION['Tper_Password'] = $row['Tper_Password'];
$_SESSION['Tper_role'] = $row['Tper_role'];
$_SESSION['login'] = "1";


  if ($_SESSION['Tper_role'] == 1){ 
    header("Location:movieEdit.php");
  }
  else {
    header("Location:index.php");
  }
session_write_close();
}


?>



<!-- \[T]/ -->
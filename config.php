<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $objConnect = mysqli_connect($host, $username, $password);

    //if($objConnect){
       //echo "connect successfully !!";
     //}
    mysqli_select_db($objConnect, "cinima");

?>
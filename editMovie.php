<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $objConnect = "cinima";


     $conn = mysqli_connect($host, $username, $password, $objConnect);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }




      

      
      mysqli_close($conn);

?>
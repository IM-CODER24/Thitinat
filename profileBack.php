<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $objConnect = "cinima";

    session_start();

    //if($objConnect){
       //echo "connect successfully !!";
     //}

     $conn = mysqli_connect($host, $username, $password, $objConnect);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      echo "<div class='jumbotron jumbotron-fluid' id='jumbotronn'><div class='container'>";
      echo "<h1 class='display-4'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-person-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
      <path fill-rule='evenodd' d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
    </svg>".$_SESSION['Tper_Name']." ".$_SESSION['Tper_Lastname']."</h1></div></div>";

      mysqli_close($conn);

?>
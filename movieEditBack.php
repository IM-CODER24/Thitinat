<?php 


    $host = "localhost";
    $username = "root";
    $password = "";
    $objConnect = "cinima";
  

    //if($objConnect){
       //echo "connect successfully !!";
     //}

     $conn = mysqli_connect($host, $username, $password, $objConnect);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM `movie`";
      $result = mysqli_query($conn, $sql);

      echo "<div class='row'>";

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $mvID = $row["Movie_ID"];
          echo "<div class='col-6'>";
        echo "<div class='card'>";
      echo "<div class='row no-gutters'>";
      echo "<div class='col-md-4'>";
      echo "<img src=".$row["Poster_URL"]." class='card-img'></div>";
      echo "<div class='col-md-8'> <div class='card-body'>";
      echo "<h5 class='card-title'>".$row["Name"]."</h5>";
      echo "<p class='card-text'>".$row["Description"]."</p>";

      echo "<form action='DeleteMovieMethod.php' method='POST'>";
      echo "<input type='hidden' name='id' value='$mvID'>";
      echo "<button type='submit' class='btn btn-danger btn-sm'>Delete this</button></form>";


      echo "</div></div></div></div></div>";
        }
      } else {
        echo "0 results";
      }
      echo "</div>";

      mysqli_close($conn);

?>
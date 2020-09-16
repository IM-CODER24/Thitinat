<?php

$host = "localhost";
$username = "root";
$password = "";
$objConnect = "cinima";
$q = $_POST['id'];


 $conn = mysqli_connect($host, $username, $password, $objConnect);


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }


$sql="DELETE FROM movie WHERE Movie_ID = $q";
$result = mysqli_query($conn,$sql);


if ($result){
  ?>
      <script type="text/javascript">      
        alert('Delete Success !');
      
        window.location.replace("movieEdit.php");
    </script>
    <?php
}
else{
  ?>
      <script type="text/javascript">      
        alert('Cannot delete!');
      
        window.location.replace("movieEdit.php");
    </script>
    <?php
}


mysqli_close($conn);

?>
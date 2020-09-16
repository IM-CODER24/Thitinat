<?php 
ob_start();
session_start();

//header("Content-Type: text/html; charset=utf-8");
$host = "localhost";
$username = "root";
$password = "";
$objConnect = "cinima";


 $conn = mysqli_connect($host, $username, $password, $objConnect);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$mvID = $_POST['mvid'];
$csID = $_SESSION['Tper_ID'];


$strSQL = "INSERT INTO order_movies VALUES 
	('','$csID' ,'$mvID')";
$objQuery = mysqli_query($conn, $strSQL);

if ($objQuery) {
    ?>
    <script type="text/javascript">      
        alert('Add movie Success !');
        window.location.replace("movie.php");
    </script>
<?php
} else {
    ?>
    <script type="text/javascript">      
    alert('Cannot add movie !');
    window.location.replace("movie.php");
</script>
<?php
}
mysqli_close($conn);
?>
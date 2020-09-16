<?php 
ob_start();
session_start();

//header("Content-Type: text/html; charset=utf-8");
include("config.php");

$name = $_POST['name'];
$description = $_POST['description'];
$length = $_POST['length'];
$url = $_POST['url'];


$strSQL = "INSERT INTO movie VALUES 
	('', '$name','$length','$description','$url')";
$objQuery = mysqli_query($objConnect, $strSQL);

if ($objQuery) {
    ?>
    <script type="text/javascript">      
        alert('Add movie Success !');
        window.location.replace("movieAdd.php");
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert('Add movie Failed');
        window.location.replace("movieAdd.php");
    </script>
<?php
}
mysqli_close($objConnect);
?>
<?php 
ob_start();
session_start();

//header("Content-Type: text/html; charset=utf-8");
include("config.php");

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password != $confirmPassword) {
?>
    <script type="text/javascript">
        alert('Password and Confirmpassword not match');
        window.location.replace("Adminregis.php");
    </script>
<?php
}else{

$strSQL = "INSERT INTO admin VALUES 
	('', '$name','$lastName','$email','$username','$password')";
$objQuery = mysqli_query($objConnect, $strSQL);
}
if ($objQuery) {
    ?>
    <script type="text/javascript">      
        alert('Register Success !');
        window.location.replace("index.php");
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert('Register Failed');
        window.location.replace("index.php");
    </script>
<?php
}
mysqli_close($objConnect);
?>
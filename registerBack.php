

<?php 
ob_start();
session_start();

//header("Content-Type: text/html; charset=utf-8");
include("config.php");


$name = $_POST['name'];
$lastName = $_POST['lastName'];
$telNum = $_POST['telNum'];
$gmail = $_POST['gmail'];
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

$strSQL = "INSERT INTO test_person VALUES 
	('','0', '$name','$lastName','$telNum','$gmail','$password')";
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
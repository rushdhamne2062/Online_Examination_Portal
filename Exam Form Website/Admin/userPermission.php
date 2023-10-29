<?php
session_start();
$check=isset($_GET["userid2"])?$_GET["userid2"]:null;
error_reporting();

$connect6=mysqli_connect('localhost','root','','examregisterdata');
mysqli_query($connect6,"UPDATE `regisdata` SET `Permission`='True'  WHERE Id=$check");

echo "<script>alert('User Permission accepted Successfully');
window.location='adminDashboard.php'</script>";

?>
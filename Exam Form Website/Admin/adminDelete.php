<?php
error_reporting();

$connect2=mysqli_connect('localhost','root','','examregisterdata');

mysqli_query($connect2,"DELETE FROM `adminsignup` WHERE id='".$_GET["userid"]."'");

echo "<script>alert('Delete Admin Successfully');
window.location='adminDashboard.php'</script>";
?>
<?php
error_reporting();

$connect=mysqli_connect('localhost','root','','examregisterdata');

mysqli_query($connect,"DELETE FROM `answers` WHERE id='".$_GET["userid"]."'");

echo "<script>alert('Delete Answer Successfully');
window.location='adminDashboard.php'</script>";
?>
<?php
error_reporting();

$connect=mysqli_connect('localhost','root','','examregisterdata');

mysqli_query($connect,"DELETE FROM `questions` WHERE id='".$_GET["userid"]."'");

echo "<script>alert('Delete question Successfully');
window.location='adminDashboard.php'</script>";
?>
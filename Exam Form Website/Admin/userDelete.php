<?php
error_reporting();

$connect2=mysqli_connect('localhost','root','','examregisterdata');

mysqli_query($connect2,"DELETE FROM `regisdata` WHERE Id='".$_GET["userid"]."'");

echo "<script>alert('Delete User Successfully');
window.location='adminDashboard.php'</script>";
?>
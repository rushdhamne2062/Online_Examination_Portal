<?php
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$connect2=mysqli_connect('localhost','root','','examregisterdata');

if(isset($_POST['AddUser'])){
  $Name_Of_certi = ($_POST['Name_Of_certi']);

  $user_Name=($_POST['user_Name']);

  $_password=($_POST['_password']);

  $sel_lang=($_POST['sel_lang']);

  $_image=$_FILES["_image"]["name"];

  $tempname = $_FILES["_image"]["tmp_name"];
  
  $folder = "uploads/".$_image;

  move_uploaded_file($tempname, $folder);

$result2=mysqli_query($connect2,"INSERT INTO `regisdata`(`Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo`, `Permission`) VALUES ('$Name_Of_certi','$user_Name','$_password','$sel_lang','$_image','False')");




if($result2){
  echo "<script>alert('Add User Successfully');
  window.location='adminDashboard.php';</script>";

}else{
  echo "<script>alert('Add User Unsuccessfully')
window.location='adminDashboard.php'</script>";
}

}
?>
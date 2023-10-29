<?php
$con=mysqli_connect("localhost","root","","examregisterdata");
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

if(isset($_POST['AddAdmin'])){

    $AdminName=($_POST['admin_Name']);

  $AdminId=($_POST['admin_Id']);

  $AdminPhoneNo=($_POST['admin_Phone_No']);

  $AdminPass=($_POST['admin_Password']);
    
  $AdminEmail=($_POST['admin_Email']);

  $AdminDateOfBirth=($_POST['admin_Date_of_Birth']);

  $query="INSERT INTO `adminsignup`(`admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth`) VALUES ('$AdminName','$AdminId','$AdminPhoneNo','$AdminPass','$AdminEmail','$AdminDateOfBirth')";

  $result=mysqli_query($con,$query);
  
  if($result){
    echo '<script>alert("Add Admin Successful!")
    window.location="adminDashboard.php"</script>';
    exit;
  }else{
    alert("Add Admin Unsuccessful!");
  }
}
?>
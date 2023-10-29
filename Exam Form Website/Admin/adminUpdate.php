<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Update Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <script src="bootstrap.bundle.min.js"></script>
   <script src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="" id="">
              <div class="">
                <div class=""> 

                  <!--  Header -->
                  <div class="">
                       <h4 class="">Update Admin</h4>
                  </div>

                  <!--  body -->
                <div class="">
                  <form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12" enctype="multipart/form-data">
 <?php
$ID=isset($_GET["userid1"])?$_GET["userid1"]:null;
error_reporting();

$connect1=mysqli_connect('localhost','root','','examregisterdata');
if($ID){
  $selQuery1="SELECT `id`, `admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth` FROM `adminsignup` WHERE id=$ID";
  $result1=mysqli_query($connect1,$selQuery1);
  $num1=mysqli_num_rows($result1);
  while($row=mysqli_fetch_array($result1)){
    ?>
                     <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Name" id="admin_Name" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_name'];?>" required>
                    <label class="form-label">Admin Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Id" id="admin_Id" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_id'];?>" required>
                    <label class="form-label">Admin Id</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Phone_No" id="admin_Phone_No" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_phone_no'];?>" required>
                    <label class="form-label">Admin Phone Number</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Password" id="admin_Password" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_password'];?>" required>
                    <label class="form-label">Admin Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Email" id="admin_Email" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_email'];?>" required>
                    <label class="form-label">Admin Email</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="date" name="admin_Date_of_Birth" id="admin_Date_of_Birth" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['admin_date_of_birth'];?>" required>
                    <label class="form-label">Admin Date Of Birth</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div> 
                    
                    
                  
                  
                    <!--  footer -->
                    <div class="">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="" name="UpdateAdmin">Submit</button>
                    </div>
                    <?php
                    }
                  }
                  ?>
                  </form>   
              </div>
            </div>
        </div>
      </div>
</body>
</html>
<?php


if($ID){
if(isset($_POST['UpdateAdmin'])){

      $_adminName=isset($_POST['admin_Name'])?$_POST['admin_Name']:null;
      $_adminId=isset($_POST['admin_Id'])?$_POST['admin_Id']:null;
      $_adminPhoneNo=isset($_POST['admin_Phone_No'])?$_POST['admin_Phone_No']:null;
      $_adminPass=isset($_POST['admin_Password'])?$_POST['admin_Password']:null;
      $_adminEmail=isset($_POST['admin_Email'])?$_POST['admin_Email']:null;
      $_adminDOB=isset($_POST['admin_Date_of_Birth'])?$_POST['admin_Date_of_Birth']:null;

        error_reporting();
        $conn1 = mysqli_connect('localhost','root','','examregisterdata');

          $updateq="UPDATE `adminsignup` SET `admin_name`='$_adminName',`admin_id`='$_adminId',`admin_phone_no`='$_adminPhoneNo',`admin_password`='$_adminPass',`admin_email`='$_adminEmail',`admin_date_of_birth`='$_adminDOB' WHERE id=$ID";
        
          $result=mysqli_query($conn1,$updateq);
        if(isset($result)?$result:null){
          echo "<script>alert('Data Update Successfully!');
          window.location='adminDashboard.php';</script>";
        }else{
          echo "<script>alert('Data Update Unsuccessfully!')</script>";
        }

      }
    }
  
?>
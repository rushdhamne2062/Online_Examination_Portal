<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
</head>
<style>
	:root{
    
    		--primaryColor: #0076de;
    		--whiteColor: #fff;
    		--blackColor: #333;
    		--greyColor: #f6f8fa;
    		--labelColor: #64b1f5;
    		--yellowColor: #ffd723;
    		--regiFormColor:#9ec3d9;
    		--regitextColor:#d13636;
		}
		#admindiv1
		{
			width: 550px;
			height: 500px;
			background-color: dodgerblue;
			position: absolute;
			margin: -600px 0px 0px 550px;
			/* From https://css.glass */
			background: rgba(255, 255, 255, 0.73);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
/*			backdrop-filter: blur(7.1px);*/
			-webkit-backdrop-filter: blur(7.1px);
		}
		.img-fluid1
		{
			margin: 0px 0px 0px 1036px;
			width: 500px;
			height: 713px;
		}
		#adminbtn
	 	{
	 		margin: 0px 0px 0px 10px;
	 		padding: 10px 150px;
	 		color: var(--regitextColor);
	 	}
	 	#a1
	 	{
	 		margin: 10px 0px 0px -20px;
	 	}
	 	.admintext
	 	{
	 		color: var(--regitextColor);
	 		margin: 20px 0px 0px 0px;
	 	}

		
</style>
<body>
	<img src="Images/logBackimg.jpg" class="img-fluid1 col-3 col-sm-6 col-md-9 col-lg-12">

<div id="admindiv1" class="container col-12 col-sm-12 col-md-12 col-lg-12 shadow-lg">
		<form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
			<div class="container-lg col-3 col-sm-6 col-md-9 col-lg-12 d-flex justify-content-center">
				<h2 class="admintext">Admin Login</h2>
			</div>
	<div class=" form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="text" name="adminId1" id="adminid" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Id" required>
		<label class="form-label">Admin Id</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  	</div>
  		<div class="container form-floating col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="password" name="adminpswd" id="adminpwd" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Password" required>
		<label class="form-label">Admin Password</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="container col-12 col-sm-12 col-md-12 col-lg-12 form-check mb-3 mt-5">
				<label class="form-label d-flex justify-content-center col-10 col-sm-12 col-md-12 col-lg-12" id="a1">If Not Register Click Here!  <button type="button" class="btn btn-warning shadow-lg col-3 col-sm-3 col-md-3 col-lg-3" data-bs-toggle="modal" data-bs-target="#myModal" id="signupbtn">Sign Up</button></label>
			<div class="container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    			<input type="submit" name="adminlogsubmit" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12" id="adminbtn">
    		</div>
			</div>
		</form>
		<div class="modal" id="myModal">
  						<div class="modal-dialog modal-dialog-centered">
    						<div class="modal-content">

      						<!-- Modal Header -->
      						<div class="modal-header">
       								 <h4 class="modal-title">Admin Sign Up</h4>
       								 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      						</div>

      						<!-- Modal body -->
    						<div class="modal-body">
    							<form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
        							<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminName" id="adminName1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Name" required>
										<label class="form-label">Admin Name</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminId" id="adminId1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin ID" required>
										<label class="form-label">Admin Id</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminPhoneNo" id="adminPhoneNo1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Phone Number" required>
										<label class="form-label">Admin Phone Number</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminPassword" id="adminPassword1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Password" required>
										<label class="form-label">Admin Password</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminEmail" id="adminEmail1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Email" required>
										<label class="form-label">Admin Email</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="date" name="adminDateOfBirth" id="adminDateOfBirth1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Date Of Birth" required>
										<label class="form-label">Admin Date Of Birth</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  								
     						</div>
      								
      								<!-- Modal footer -->
      								<div class="modal-footer">
      									<button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="SignUpSubmit">Submit</button>
        								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      								</div>
  								</form>

    						</div>
						</div>
					</div>
	</div>
</body>
<?php
$con1=mysqli_connect("localhost","root","","examregisterdata");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

if(isset($_POST['SignUpSubmit'])){

    $AdminName=($_POST['adminName']);

	$AdminId=($_POST['adminId']);

	$AdminPhoneNo=($_POST['adminPhoneNo']);

	$AdminPass=($_POST['adminPassword']);
	  
	$AdminEmail=($_POST['adminEmail']);

	$AdminDateOfBirth=($_POST['adminDateOfBirth']);

	$query="INSERT INTO `adminsignup`(`admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth`) VALUES ('$AdminName','$AdminId','$AdminPhoneNo','$AdminPass','$AdminEmail','$AdminDateOfBirth')";

	$result=mysqli_query($con1,$query);
	
	if($result){
		echo '<script>alert("Sign Up Successful!")
		window.location="adminlogin.php"</script>';
 		exit;
	}else{
		alert("Sign Up Failed");
	}
}

if(isset($_POST['adminlogsubmit'])){
	$AdminId=($_POST['adminId1']);
	$AdminPass=($_POST['adminpswd']);

	$query1="SELECT `id`,`admin_id`,`admin_password` FROM `adminsignup` WHERE admin_id='$AdminId' AND admin_password='$AdminPass'";

	$result1=mysqli_query($con1,$query1);
	while ($row = mysqli_fetch_assoc($result1)) {

		$_SESSION['id'] = $row['id'];
        $check_adminId = $row['admin_id'];
        $check_adminPass = $row['admin_password'];
    }

	if ($AdminId == $check_adminId && $AdminPass == $check_adminPass) {
        echo '<script type="text/javascript">alert("Sign In Successful!");
        window.location="adminDashboard.php"</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Sign In Fail!");
        window.location="adminlogin.php"</script>';
	}
}
?>
</html>
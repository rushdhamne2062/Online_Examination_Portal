<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Registration</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
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
		body
		{
			background-image: url('Admin/Images/regisbgimg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;  
  			background-size: 100%;
			width: 100%;
			height: 100%;
		}
	 	#regiForm
	 	{
	 		width: 1100px;
	 		height: 600px;
	 		background-color: white;
	 	}
	 	.img-fluid
	 	{
	 		margin: -5px 0px 0px -5px;
	 		
	 	}
	 	#registration
	 	{
	 		width: 480px;
	 		height: 580px;
	 		margin: 0px 10px 0px 0px;
	 	}
	 	#regibtn
	 	{
	 		margin: 20px 0px 0px 0px;
	 		padding: 10px 10px;
	 		color: var(--regitextColor);
	 	}
	 	#a1
	 	{
	 		margin: 10px 0px 0px -20px;
	 	}
	 	.registext
	 	{
	 		color: var(--regitextColor);
	 	}
	 	#imgupload
	 	{
	 		margin: 0px 0px 0px 0px;
	 	}
	 	

	 </style>
</head>
<body class="container-lg col-12">
<div class="container-xl col-lg-3 pt-2 mt-5  rounded-4 shadow-lg" id="regiForm">
	<img src="Admin/Images/regisImage.jpg" class="img-fluid " width="590">
	<div class=" col-lg-8 float-end  pt-2 mt-1 " id="registration">
		<form method="post" enctype="multipart/form-data" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
			<div class="container-lg col-lg-4 d-flex justify-content-center">
				<h2 class="registext">Register</h2>
			</div>
			<div class="form-floating">
				<input type="text" name="nameCertificate" class="form-control form-control-sm mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Name of Certificate" required>
				<label class="form-label">Name of Certificate</label>
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-floating">
				<input type="text" name="uname" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter UserName" required>
				<label class="form-label">User Name</label>
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-floating">
				<input type="password" name="password" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Password" required>
				<label class="form-label">Password</label>
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-floating">
				<select class="form-select form-select-lg mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" name="selectLng" required>
					<option>select language</option>
					<option>C</option>
					<option>C++</option>
					<option>Java</option>
					<option>Python</option>
					<option>PHP</option>
				</select>
				<label class="form-label">Select Your Language</label>
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
		
			<div class="form-floating">
				<input type="file" name="choosefile" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Photo" id="imgupload" required>
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-check  col-12 col-sm-12 col-md-12 col-lg-12">
				<label class="form-label" id="a1">If Already Register Click Here!  <a href="loginExamForm.php">Login</label>
    			<button type="submit" name="regisubmit" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12" id="regibtn">Submit</button>
			</div>
		</form>
	</div>
</div>
</body>
<?php

// error_reporting(0);

?>

<?php
if(isset($_POST['regisubmit'])){
	$filename = $_FILES["choosefile"]["name"];

    $nameofCer=($_POST['nameCertificate']);

	$userName=($_POST['uname']);

	$pass=($_POST['password']);

	$selectLang=($_POST['selectLng']);
	
	$tempname = $_FILES["choosefile"]["tmp_name"];  

	$folder = "Admin/uploads/".$filename;

	$query="INSERT INTO `regisdata`(`Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo`, `Permission`) VALUES ('$nameofCer','$userName','$pass','$selectLang','$filename','False')";

	move_uploaded_file($tempname, $folder);

	$result=mysqli_query($con,$query);
	
	if($result){
		echo '<script>alert("Registration Successful!")
		window.location="loginExamForm.php"</script>';
 		exit;
	}else{
		echo '<script>alert("Registration failed") </script>';
	}

}
?>
</html>
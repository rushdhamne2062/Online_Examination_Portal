<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Login</title>
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
		#logindiv1
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
			backdrop-filter: blur(7.1px);
			-webkit-backdrop-filter: blur(7.1px);
		}
		.img-fluid1
		{
			margin: 0px 0px 0px 1036px;
			width: 500px;
			height: 713px;
		}
		#loginbtn
	 	{
	 		margin: 0px 0px 0px 10px;
	 		padding: 10px 150px;
	 		color: var(--regitextColor);
	 	}
	 	#a1
	 	{
	 		margin: 10px 0px 0px -20px;
	 	}
	 	.logintext
	 	{
	 		color: var(--regitextColor);
	 		margin: 20px 0px 0px 0px;
	 	}

		
</style>
<body>
	<img src="Admin/Images/logBackimg.jpg" class="img-fluid1 col-3 col-sm-6 col-md-9 col-lg-12">

<div id="logindiv1" class="container col-12 col-sm-12 col-md-12 col-lg-12 shadow-lg">
		<form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
			<div class="container-lg col-3 col-sm-6 col-md-9 col-lg-12 d-flex justify-content-center">
				<h2 class="logintext">Login</h2>
			</div>
	<div class=" form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="text" name="UserName" id="username" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter UserName" required>
		<label class="form-label">User Name</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  	</div>
  		<div class="container form-floating col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="password" name="pswd" id="pwd" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Password" required>
		<label class="form-label">Password</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="container col-12 col-sm-12 col-md-12 col-lg-12 form-check mb-3 mt-5">
				<label class="form-label d-flex justify-content-center col-10 col-sm-12 col-md-12 col-lg-12" id="a1">If Not Register Click Here!  <a href="RegisExamForm.php">Register</label>
			<div class="container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    			<input type="submit" name="loginsubmit" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12" id="loginbtn">
    		</div>
			</div>
		</form>
	</div>
</body>
<?php



if(isset($_POST['loginsubmit'])){
	$user=($_POST['UserName']);
	$password=($_POST['pswd']);
	$permission='True';

	$_SESSION["User1"] = $user;
	$_SESSION["Pass1"] = $password;

	$query1="SELECT `Id`,`user_Name`, `password`, `Permission` FROM `regisdata` WHERE user_Name='$user' AND password='$password' AND Permission='$permission'";

	$result1=mysqli_query($con,$query1);
	while ($row = mysqli_fetch_assoc($result1)) {
        $check_username = $row['user_Name'];
        $check_password = $row['password'];
        $check_permission=$row['Permission'];
        $_SESSION["Id"] = $row['Id'];
    }

	if ($user == $check_username && $password == $check_password && $permission == $check_permission) {
        echo '<script type="text/javascript">alert("Login Successful!");
        window.location="UserDetail.php"</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Login Fail!");
        window.location="loginExamForm.php"</script>';
	}
}

?>
</html>
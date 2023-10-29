<?php
session_start();
include "dbcon.php";
if(!$_SESSION["Id"]){
header("location:loginExamForm.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	 <!-- <link href="ExamFormPage.php"> -->
	 
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
		#container
		{
			margin: 100px 0px 0px 400px;
			width: 600px;
			height: 400px;
			background: rgba(208, 204, 56, 0.61);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(8.5px);
			-webkit-backdrop-filter: blur(8.5px);
			border: 1px solid rgba(208, 204, 56, 0.47);
		}
		#photo
		{
			width: 130px;
			height: 130px;
			margin: 30px 0px 0px 220px;
			border: 1px solid var(--regitextColor);
		}
		#l1
		{
			color: var(--regitextColor);
			font-family: Trirong;
			font-size: 20px;
			margin: 0px 0px 0px 0px;
		}
		#l2
		{
			color: var(--regitextColor);
			font-family: Trirong;
			font-size: 15px;
			margin: -22px 0px 0px 200px;
		}
		#formdiv
		{
			margin: 10px 0px 0px 150px;
		}

	 </style>
</head>
<body>
<div class="container shadow-lg" id="container">
	<div class="">
				<?php

					$username=$_SESSION["User1"];
					$password=$_SESSION["Pass1"];


					$query3="SELECT `Id`, `Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo` FROM `regisdata` WHERE user_Name='$username' AND password='$password'";

					$qys=mysqli_query($con, $query3);

					$nums=mysqli_num_rows($qys);

					while($row=mysqli_fetch_array($qys)){
					$check_username = $row['user_Name'];
					$check_password = $row['password'];
					$_SESSION["Id"] = $row['Id'];

					if($username==$check_username && $password==$check_password){
			 	?>
			 		<img src="<?php echo 'Admin/uploads/'.$row['user_photo']; ?>" id="photo"><br><br>
			 		<div class="container-fluid" id="formdiv">
						<div class="row">
						<div class="container"><label id="l1">User Name:</label><p id="l2"><?php echo $row['user_Name']; ?></p></div>
						</div>
					<div class="row">
					<div class="container"><label id="l1">Name of Certificate:</label><p id="l2"><?php echo $row['Name_of_Certificate']; ?></p></div>
					</div>
					<div class="row">
					<div class="container"><label id="l1">Selected Language:</label><p id="l2"><?php echo $row['select_Language']; ?></p></div>
					</div>
					</div>
			 	<?php
					}
			 	}
			 	?>
	</div>
	<div class="container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    			<input type="submit" name="startExam" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"  onclick="StartExam()" value="Start Exam">
    		</div>
</div>
<script>			
      	function StartExam() {
        window.location.href = 'ExamFormPage.php';
	}
      
    </script>
</body>
</html>
<?php
// if(isset($_POST['startExam'])){
	// session_start();
// session_unset();
// session_destroy(); 
// header("location:ExamFormPage.php");
// }
?>




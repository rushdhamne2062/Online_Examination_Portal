
<?php
session_start();
session_unset();
session_destroy(); 
// header("location:FinalSubmissionPage.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Final Page</title>
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
		body
		{
			background: url('Admin/Images/FinalPageimage.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;  
  			background-size: 100%;
			width: 100%;
			height: 100%;
		}
		#btn
	 	{
	 		margin: 650px 0px 0px 650px;
	 		padding: 10px 10px;
	 		color: var(--regitextColor);
	 	}
</style>
<body>
	<button type="submit" name="submit" class="btn btn-warning shadow-lg col-2 col-sm-2 col-md-2 col-lg-2" id="btn" onclick="backtologin()">Back To Login</button>
</body>
</html>
<script>
	function backtologin(){
		window.location="loginExamForm.php";
	}
</script>

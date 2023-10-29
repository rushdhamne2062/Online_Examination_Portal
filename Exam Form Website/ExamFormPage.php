<?php
session_start();
include 'dbcon.php';
$user_id=isset($_SESSION["Id"])?$_SESSION["Id"]:null;
if(!$user_id){
header("location:loginExamForm.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Form Page</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	 <script src="bootstrap.bundle.min.js"></script>
</head>
<style>
	body
	{
		background-color: var(--regitextColor);
		margin: 0px;
		padding: 0px;
	}
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
		#formdiv
		{
			background-color: var(--yellowColor);
			width: 100%;
			height: 100px;
		}
		
		#l1
		{
			color: var(--regitextColor);
			font-family: Trirong;
			font-size: 20px;
		}
		#stopwatch
		{
			margin: -50px 0px 0px 1380px;
			font-size: 30px;
			color: var(--regitextColor);
			padding: 0px 10px;
		}
		.pagination
		{
			margin: -120px 0px 0px -40px;
		}
		#pagi1
		{
			background-color: var(--regitextColor);
			color: var(--yellowColor);
			border: 1px solid var(--regitextColor);
			margin: 120px 0px 0px 50px;
		}
		#pagi1:hover
		{
			opacity: 0.7;
			color: var(--regitextColor);
			background-color: var(--yellowColor);
			
		}
		#pagi2
		{
			padding: -10px;
			background-color: var(--regitextColor);
			color: var(--yellowColor);
			border: 1px solid var(--regitextColor);
			margin: 140px 0px 0px 50px;
		}
		#pagi2:hover
		{
			opacity: 0.7;
			color: var(--regitextColor);
			background-color: var(--yellowColor);
			
		}
		#pagi3
		{
			padding: 10px 50px;
			background-color: var(--yellowColor);
			color: var(--regitextColor);
			border: 1px solid var(--regitextColor);
			margin: 500px 0px 0px 1300px;
			position: absolute;
			border-radius: 10px;
		}
		#pagi3:hover
		{
			opacity: 0.7;
			color: var(--regitextColor);
			background-color: var(--yellowColor);
			
		}
		.pagi2-div
		{
			margin: 0px 0px 0px 500px;
		}

		.questNo
		{
			color: var(--regitextColor);
			font-size: 20px;
			padding-top: 10px;
			margin: 0px 0px 0px 20px;
		}
		.slideshow-container
		{
			width: 900px;
			height: 550px;
			margin: 0px 0px 0px 360px;
			background: rgba(242, 242, 32, 0.73);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(6.5px);
			-webkit-backdrop-filter: blur(6.5px);
		}
		.mySlides {
  			display: none;
		}
		#comment
		{
			margin: 20px 0px 0px 50px;
			width: 800px;
		}
		.answer
		{
			color: var(--regitextColor);
			font-size: 20px;
			margin: 10px 0px 0px 20px;
		}
		#l2
		{
			color: var(--regitextColor);
			font-family: Trirong;
			font-size: 15px;
			margin: -22px 0px 0px 200px;
		}
		
	
</style>
<body>
<?php

					$username=$_SESSION["User1"];
					$password=$_SESSION["Pass1"];

					$query4="SELECT * FROM `regisdata` WHERE user_Name='$username' AND password='$password'";

					$qys1=mysqli_query($con, $query4);

					$nums1=mysqli_num_rows($qys1);

					while($row1=mysqli_fetch_array($qys1)){
					$check_username = $row1['user_Name'];
					$check_password = $row1['password'];
					$select_lang=$row1['select_Language'];
					
					
					if($username==$check_username && $password==$check_password){
						$_SESSION['sellanguage']=$select_lang;
			 	?>
<div class="container-fluid" id="formdiv">
	<div class="row">
	<div class="container"><label id="l1">User Name:</label><p id="l2"><?php echo $row1['user_Name']; ?></p></div>
	</div>
	<div class="row">
	<div class="container"><label id="l1">Name of Certificate:</label><p id="l2"><?php echo $row1['Name_of_Certificate']; ?></p></div>
	</div>
	<div class="row">
	<div class="container"><label id="l1">Selected Language:</label><p id="l2"><?php echo $row1['select_Language']; ?></p></div>
	<div class="container col-6 col-sm-8 col-md-10 col-lg-12"><p id="stopwatch">00:00:00</p></div>
	</div>
</div>
				<?php
						}
				 	}
				?>
<div class="container">
	<ul class="pagination justify-content-center">
    
    <li class="page-item"><a class="page-link" onclick="currentSlide(1)" id="pagi1">1</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(2)" id="pagi1">2</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(3)" id="pagi1">3</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(4)" id="pagi1">4</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(5)" id="pagi1">5</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(6)" id="pagi1">6</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(7)" id="pagi1">7</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(8)" id="pagi1">8</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(9)" id="pagi1">9</a></li>
    <li class="page-item"><a class="page-link" onclick="currentSlide(10)" id="pagi1">10</a></li>
  </ul>
</div>
<form method="post">
	<input type="submit" name="examSubmit" value="Submit" id="pagi3">
<?php
					$select_lang=$_SESSION['sellanguage'];

					$query4="SELECT `Programming_Languages`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10` FROM `questions` WHERE Programming_Languages='$select_lang'";

					$qys1=mysqli_query($con, $query4);

					$nums1=mysqli_num_rows($qys1);

					while($row1=mysqli_fetch_array($qys1)){
			 	?>

<div class="slideshow-container">
  	<div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.1 / 10 ) <?php echo $row1['Q1'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer1"></textarea> 			
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>  				
		</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.2 / 10 ) <?php echo $row1['Q2'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer2"></textarea>  			
  			  	<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
		</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.3 / 10 ) <?php echo $row1['Q3'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer3"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
		</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.4 / 10 ) <?php echo $row1['Q4'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer4"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
		</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.5 / 10 ) <?php echo $row1['Q5'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer5"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.6 / 10 ) <?php echo $row1['Q6'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer6"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.7 / 10 ) <?php echo $row1['Q7'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer7"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.8 / 10 ) <?php echo $row1['Q8'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer8"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.9 / 10 ) <?php echo $row1['Q9'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer9"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <div class="mySlides">
    <div id="question1">
    	<p class="questNo">Q.10 / 10 ) <?php echo $row1['Q10'];?>.</p>
    	<div class="form-group">
  			<label class="answer">Answer:</label>
  			<textarea class="form-control" rows="15" id="comment" name="textAnswer10"></textarea>
  			<ul class="pagination justify-content-center">
  				<li class="page-item"><input class="page-link" onclick="plusSlides(-1)" id="pagi2" value="Preveous"></li> 
  					 <li class="page-item"><input class="page-link" onclick="plusSlides(1)" id="pagi2"  value="Next"></li>
  				</ul>
			</div>
    </div> 
  </div>
  <?php
	}
  ?>
</div>
  </form>


</body>
</html>
<script>
  	let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("page-link");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>
<script src="timer.js"></script>
<?php
if(isset($_POST['examSubmit'])){
  $username=$_SESSION["User1"];
  $select_lang=$_SESSION['sellanguage'];
  $userid=isset($_SESSION["Id"])?$_SESSION["Id"]:null;


	$ans1=($_POST['textAnswer1']);
	$ans2=($_POST['textAnswer2']);
	$ans3=($_POST['textAnswer3']); 
	$ans4=($_POST['textAnswer4']);  
	$ans5=($_POST['textAnswer5']); 
	$ans6=($_POST['textAnswer6']);
	$ans7=($_POST['textAnswer7']);
	$ans8=($_POST['textAnswer8']); 
	$ans9=($_POST['textAnswer9']);  
	$ans10=($_POST['textAnswer10']);

	$query5="INSERT INTO `answers`(`user_name`, `Programming_Lang`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`) VALUES ('$username', '$select_lang', '$ans1','$ans2','$ans3','$ans4','$ans5', '$ans6','$ans7','$ans8','$ans9','$ans10')";

	
	$result5=mysqli_query($con,$query5);
	
	if($result5){
		$query6="UPDATE `regisdata` SET `Permission`='False'  WHERE Id=$userid";
		$result6=mysqli_query($con,$query6);
		if($result6){
			echo '<script>alert("Exam Submission Completed!");
		window.location="FinalSubmissionPage.php";</script>';
		}
 		// exit;
	}else{
		alert("Exam Submission Failed");
	}
}
  ?>



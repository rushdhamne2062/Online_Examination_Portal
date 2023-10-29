<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Question Update Page</title>
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
                       <h4 class="">Update Questions</h4>
                  </div>

                  <!--  body -->
                <div class="">
                  <form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12" enctype="multipart/form-data">
 <?php
$ID=isset($_GET["userid1"])?$_GET["userid1"]:null;
error_reporting();

$connect1=mysqli_connect('localhost','root','','examregisterdata');
if($ID){
  $selQuery1="SELECT `id`, `Programming_Languages`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10` FROM `questions` WHERE id=$ID";
  $result1=mysqli_query($connect1,$selQuery1);
  $num1=mysqli_num_rows($result1);
  while($row=mysqli_fetch_array($result1)){
    ?>
                     <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="programming_Lang" id="programming_Lang" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Programming_Languages'];?>" required>
                    <label class="form-label">Programming Languages</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques1" id="ques1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q1'];?>"required>
                    <label class="form-label">Question 1</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques2" id="ques2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q2'];?>"required>
                    <label class="form-label">Question 2</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques3" id="ques3" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q3'];?>"required>
                    <label class="form-label">Question 3</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques4" id="ques4" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q4'];?>"required>
                    <label class="form-label">Question 4</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques5" id="ques5" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q5'];?>"required>
                    <label class="form-label">Question 5</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div> 

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques6" id="ques6" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q6'];?>"required>
                    <label class="form-label">Question 6</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques7" id="ques7" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q7'];?>"required>
                    <label class="form-label">Question 7</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques8" id="ques8" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q8'];?>"required>
                    <label class="form-label">Question 8</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques9" id="ques9" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q9'];?>"required>
                    <label class="form-label">Question 9</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="ques10" id="ques10" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" value="<?php echo $row['Q10'];?>" required>
                    <label class="form-label">Question 10</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    
                  
                  
                    <!--  footer -->
                    <div class="">
                    <button type="submit" class="btn btn-danger" name="UpdateQues">Submit</button>
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
if(isset($_POST['UpdateQues'])){

      $_progLang=isset($_POST['programming_Lang'])?$_POST['programming_Lang']:null;
      $_ques1=isset($_POST['ques1'])?$_POST['ques1']:null;
      $_ques2=isset($_POST['ques2'])?$_POST['ques2']:null;
      $_ques3=isset($_POST['ques3'])?$_POST['ques3']:null;
      $_ques4=isset($_POST['ques4'])?$_POST['ques4']:null;
      $_ques5=isset($_POST['ques5'])?$_POST['ques5']:null;
      $_ques6=isset($_POST['ques6'])?$_POST['ques6']:null;
      $_ques7=isset($_POST['ques7'])?$_POST['ques7']:null;
      $_ques8=isset($_POST['ques8'])?$_POST['ques8']:null;
      $_ques9=isset($_POST['ques9'])?$_POST['ques9']:null;
      $_ques10=isset($_POST['ques10'])?$_POST['ques10']:null;

        error_reporting();
        $conn1 = mysqli_connect('localhost','root','','examregisterdata');

          $updateq="UPDATE `questions` SET `Programming_Languages`='$_progLang',`Q1`='$_ques1',`Q2`='$_ques2',`Q3`='$_ques3',`Q4`='$_ques4',`Q5`='$_ques5',`Q6`='$_ques6',`Q7`='$_ques7',`Q8`='$_ques8',`Q9`='$_ques9',`Q10`='$_ques10' WHERE id=$ID";
        
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
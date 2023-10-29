<?php
$con=mysqli_connect("localhost","root","","examregisterdata");
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

if(isset($_POST['AddQues'])){

  $Prog_Lang=($_POST['programming_Lang']);

  $Q1=($_POST['ques1']);

  $Q2=($_POST['ques2']);

  $Q3=($_POST['ques3']);
    
  $Q4=($_POST['ques4']);

  $Q5=($_POST['ques5']);

  $Q6=($_POST['ques6']);

  $Q7=($_POST['ques7']);

  $Q8=($_POST['ques8']);

  $Q9=($_POST['ques9']);

  $Q10=($_POST['ques10']);

  $query="INSERT INTO `questions`(`Programming_Languages`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`) VALUES ('$Prog_Lang','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10')";

  $result=mysqli_query($con,$query);
  
  if($result){
    echo '<script>alert("Add Questions Successful!")
    window.location="adminDashboard.php"</script>';
    exit;
  }else{
    alert("Add Questions Unsuccessful!");
  }
}
?>
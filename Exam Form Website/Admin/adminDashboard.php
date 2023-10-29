<?php
session_start();
$admin_id=isset($_SESSION["id"])?$_SESSION["id"]:null;
if(!$admin_id){
header("location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
   <script src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  .pagination1{
    margin: 0px 0px 0px 700px;
    width: 30px;
    height: 30px;
    text-decoration: none;
/*    background-color: black;*/
    color: white; 
  }
  
</style>
<body>
<nav class="navbar bg-light fixed-top">
  <div class="container" id="adminDashdiv1">
    <div class="container" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" id="menuLogo" onclick="myFunction(this)">
  	<div class="bar1"></div>
  	<div class="bar2"></div>
  	<div class="bar3"></div>
	</div>
    <a class="navbar-brand page-link" href="#question1" id="administratorName" onclick="currentSlide(1)">Administrator</a>
    <form method="post" action="logout.php">
    <input type="submit" class="btn" data-bs-dismiss="offcanvas" onclick="logout()" id="logoutbtn" value="Logout">
    </form>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Dashboard</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
      </div>
      <div class="offcanvas-body">
        <ul class="pagination navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="page-item">
            <a class="page-link" href="#question2" onclick="currentSlide(2)" id="pagi1">User</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#question3" onclick="currentSlide(3)" id="pagi1">Admin</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#question4" onclick="currentSlide(4)" id="pagi1">Questions</a>  
          </li>
          <li class="page-item">
            <a class="page-link" href="#question5" onclick="currentSlide(5)" id="pagi1">Answers</a>  
          </li>
        </ul> 
      </div>
    </div>
  </div>
</nav>
<div class="slideshow-container" id="con1">
    <div class="mySlides">
      <div id="question1">
      <p class="questNo">Q.1 / 5 ) Write a PHP program to print sum of digits.</p>
      </div>
    </div> 
  </div>
<div class="slideshow-container overflow-auto" id="con2">
    <div class="mySlides">
      <div id="question2">
        <div>
          <?php
          include 'addUserModal.php';
          ?>
        <button type="button" class="btn btn-warning shadow-lg col-1 col-sm-1 col-md-1 col-lg-1" id="adduser" data-bs-toggle="modal" data-bs-target="#myModal">Add User</button>
      </div>

       
   <table class="table table-hover table-bordered">
  <thead>
    <tr>
    <th scope="col">Id:</th>
    <th scope="col">Name of Certificate:</th>
    <th scope="col">User Name:</th>
    <th scope="col">Password:</th>
    <th scope="col">selected language:</th>
    <th scope="col">Image:</th>
    <th scope="col">Permission:</th>
    <th scope="col">Update:</th>
    <th scope="col">Delete:</th>
    </tr>
  </thead>

<?php
// include 'userUpdateModal.php';
$per_page_record = 4;
 if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        } 

$start_from = ($page-1) * $per_page_record;
error_reporting();

$connect1=mysqli_connect('localhost','root','','examregisterdata');



  $selQuery1="SELECT `Id`, `Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo`, `Permission` FROM `regisdata` LIMIT $start_from, $per_page_record";
  $result1=mysqli_query($connect1,$selQuery1);
  $num1=mysqli_num_rows($result1);
  while($row=mysqli_fetch_array($result1)){
    // $register_id=$row['Id'];
    $_SESSION['Permission']=$row['Permission'];
    ?>
<tbody>
<tr>
  <th scope="row"><?php echo $row['Id'];?></th><br>
  <td><?php echo $row['Name_of_Certificate'];?></td>
  <td><?php echo $row['user_Name'];?></td>
  <td><?php echo $row['password'];?></td>
  <td><?php echo $row['select_Language'];?></td>
  <td><?php echo $row['user_photo'];?></td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"><a href="userPermission.php?userid2=<?php echo $row['Id'];?>"><?php echo $row['Permission'];?></a></button></td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12">
    <a href="userUpdateModal.php?userid1=<?php echo $row['Id'];?>">Update</a></button>
    </td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"><a href="userDelete.php?userid=<?php echo $row['Id']?>">X</a></button></td>
</tr>
</tbody>
    <?php
      }
      ?>
      </table>
      </div>
    </div> 
  </div>
<div class="pagination1">
        <?php
         $query = "SELECT COUNT(*) FROM `regisdata`";     
        $rs_result = mysqli_query($connect1, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];

        echo "</br>"; 

        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = ""; 

         if($page>=2){   
            echo "<a  href='adminDashboard.php?page=".($page-1)."'>  Prev </a>";   
        }

        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a  class = 'active' href='adminDashboard.php?page=".$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a  href='adminDashboard.php?page=".$i."'>".$i." </a>";     
          }   
        };     
        echo $pagLink;

         if($page<$total_pages){   
            echo "<a  href='adminDashboard.php?page=".($page+1)."'>  Next </a>";   
        }
        ?>
      </div>



  





   
<div class="slideshow-container overflow-auto" id="con3">
    <div class="mySlides">
    <div id="question3">
      <div>
          <?php
          include 'addAdminModal.php';
          ?>
        <button type="button" class="btn btn-warning shadow-lg col-1 col-sm-1 col-md-1 col-lg-1" id="addadmin" data-bs-toggle="modal" data-bs-target="#myModal2">Add Admin</button>
      </div>
      <table class="table table-hover table-bordered">
  <thead>
    <tr>
    <th scope="col">Id:</th>
    <th scope="col">Admin Name:</th>
    <th scope="col">Admin Id:</th>
    <th scope="col">Admin Phone Number:</th>
    <th scope="col">Admin Password:</th>
    <th scope="col">Admin Email:</th>
    <th scope="col">Admin Date Of Birth:</th>
    <th scope="col">Update:</th>
    <th scope="col">Delete:</th>
    </tr>
  </thead>

<?php
error_reporting();

$connect2=mysqli_connect('localhost','root','','examregisterdata');



  $selQuery2="SELECT `id`, `admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth` FROM `adminsignup`";
  $result2=mysqli_query($connect2,$selQuery2);
  $num2=mysqli_num_rows($result2);
  while($row1=mysqli_fetch_array($result2)){

    ?>
<tbody>
<tr>
  <th scope="row"><?php echo $row1['id'];?></th>
  <td><?php echo $row1['admin_name'];?></td>
  <td><?php echo $row1['admin_id'];?></td>
  <td><?php echo $row1['admin_phone_no'];?></td>
  <td><?php echo $row1['admin_password'];?></td>
  <td><?php echo $row1['admin_email'];?></td>
  <td><?php echo $row1['admin_date_of_birth'];?></td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12">
    <a href="adminUpdate.php?userid1=<?php echo $row1['id']?>">Update</a></button>
    </td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"><a href="adminDelete.php?userid=<?php echo $row1['id']?>">X</a></button></td>
</tr>
</tbody>
<?php
  }
?>
</table>
    
      </div>
    </div> 
  </div>
  <div class="slideshow-container overflow-auto" id="con4">
    <div class="mySlides">
    <div id="question4">
      <?php
          include 'addQuestionModal.php';
          ?>
        <button type="button" class="btn btn-warning shadow-lg col-1 col-sm-1 col-md-1 col-lg-1" id="addquestion" data-bs-toggle="modal" data-bs-target="#myModal3">Add Questions</button>
      </div>
     <table class="table table-hover table-bordered">
  <thead>
    <tr>
    <th scope="col">Id:</th>
    <th scope="col">Programming Languages:</th>
    <th scope="col">Q1:</th>
    <th scope="col">Q2:</th>
    <th scope="col">Q3:</th>
    <th scope="col">Q4:</th>
    <th scope="col">Q5:</th>
    <th scope="col">Q6:</th>
    <th scope="col">Q7:</th>
    <th scope="col">Q8:</th>
    <th scope="col">Q9:</th>
    <th scope="col">Q10:</th>
    <th scope="col">Update:</th>
    <th scope="col">Delete:</th>
    </tr>
  </thead>

<?php
error_reporting();

$connect3=mysqli_connect('localhost','root','','examregisterdata');



  $selQuery3="SELECT `id`, `Programming_Languages`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10` FROM `questions`";
  $result3=mysqli_query($connect3,$selQuery3);
  $num3=mysqli_num_rows($result3);
  while($row2=mysqli_fetch_array($result3)){
    ?>
<tbody>
<tr>
  <th scope="row"><?php echo $row2['id'];?></th>
  <td><?php echo $row2['Programming_Languages'];?></td>
  <td><?php echo $row2['Q1'];?></td>
  <td><?php echo $row2['Q2'];?></td>
  <td><?php echo $row2['Q3'];?></td>
  <td><?php echo $row2['Q4'];?></td>
  <td><?php echo $row2['Q5'];?></td>
  <td><?php echo $row2['Q6'];?></td>
  <td><?php echo $row2['Q7'];?></td>
  <td><?php echo $row2['Q8'];?></td>
  <td><?php echo $row2['Q9'];?></td>
  <td><?php echo $row2['Q10'];?></td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12">
    <a href="QuestionUpdate.php?userid1=<?php echo $row2['id']?>">Update</a></button>
    </td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"><a href="QuestionDelete.php?userid=<?php echo $row2['id']?>">X</button></td>
</tr>
</tbody>
<?php
  }
?>
</table>
      </div>
    </div> 
  </div>

  <div class="slideshow-container overflow-auto" id="con5">
    <div class="mySlides">
    <div id="question5">
      <table class="table table-hover table-bordered">
  <thead>
    <tr>
    <th scope="col">Id:</th>
    <th scope="col">User Name:</th>
    <th scope="col">Programming Languages:</th>
    <th scope="col">Q1:</th>
    <th scope="col">Q2:</th>
    <th scope="col">Q3:</th>
    <th scope="col">Q4:</th>
    <th scope="col">Q5:</th>
    <th scope="col">Q6:</th>
    <th scope="col">Q7:</th>
    <th scope="col">Q8:</th>
    <th scope="col">Q9:</th>
    <th scope="col">Q10:</th>
    <th scope="col">Grade</th>
    <th scope="col">Total Marks</th>
    <th scope="col">Delete</th>
    </tr>
  </thead>
<?php
error_reporting();

$connect4=mysqli_connect('localhost','root','','examregisterdata');



  $selQuery4="SELECT `id`, `user_name`, `Programming_Lang`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Grade`, `Marks` FROM `answers`";
  $result4=mysqli_query($connect4,$selQuery4);
  $num4=mysqli_num_rows($result4);
  while($row3=mysqli_fetch_array($result4)){
    ?>

<tbody>
<tr>
  <td><?php echo $row3['id'];?></td><br>
  <td><?php echo $row3['user_name'];?></td>
  <td><?php echo $row3['Programming_Lang'];?></td>
  <td><?php echo $row3['Q1'];?></td>
  <td><?php echo $row3['Q2'];?></td>
  <td><?php echo $row3['Q3'];?></td>
  <td><?php echo $row3['Q4'];?></td>
  <td><?php echo $row3['Q5'];?></td>
  <td><?php echo $row3['Q6'];?></td>
  <td><?php echo $row3['Q7'];?></td>
  <td><?php echo $row3['Q8'];?></td>
  <td><?php echo $row3['Q9'];?></td>
  <td><?php echo $row3['Q10'];?></td>
  <td><?php echo $row3['Grade'];?></td>
  <td><?php echo $row3['Marks'];?></td>
  <td><button type="button" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12"><a href="adminDelete.php?userid=<?php echo $row3['id']?>">X</button></td>
</tr>
</tbody>
<?php
  }
?>
</table>
      </div>
    </div> 
  </div>
</body>
</html>
<script src="adminScript.js"></script>
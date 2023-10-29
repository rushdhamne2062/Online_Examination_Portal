<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Update Modal</title>
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
                   <div>
                       <h4>Update User Detail</h4>
                  </div>

                  <!--  body -->
                <div class="">
                  <form method="post"  enctype="multipart/form-data">
                    <?php
$ID=isset($_GET["userid1"])?$_GET["userid1"]:null;
error_reporting();

$connect1=mysqli_connect('localhost','root','','examregisterdata');
if($ID){
  $selQuery1="SELECT `Id`, `Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo` FROM `regisdata` WHERE Id=$ID";
  $result1=mysqli_query($connect1,$selQuery1);
  $num1=mysqli_num_rows($result1);
  while($row=mysqli_fetch_array($result1)){
    ?>
                      <div class="form-floating container  mb-3 mt-5" >
                      <input type="text" name="nameCertificate" id="NaOCe" class="form-control form-control-sm mt-3 mb-3 border border-warning " value="<?php echo isset($row['Name_of_Certificate'])?$row['Name_of_Certificate']:null;?>">
                      <label class="form-label">Name of Certificate</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container mb-3 mt-5" >
                      <input type="text" name="uname" id="UsNa" class="form-control mt-3 mb-3 border border-warning" value="<?php echo isset($row['user_Name'])?$row['user_Name']:null;?>" placeholder="Enter UserName">
                      <label class="form-label">User Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container mb-3 mt-5">
                      <input type="password" name="password" id="PaWo" class="form-control mt-3 mb-3 border border-warning" value="<?php echo isset($row['password'])?$row['password']:null;?>" placeholder="Enter Password">
                      
                      <label class="form-label">Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container mb-3 mt-5">
                      <select class="form-select form-select-lg mt-3 mb-3 border border-warning" name="selectLng" id="SeLa">
                            <option selected><?php echo isset($row['select_Language'])?$row['select_Language']:null;?></option>
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                      </select>
                      
                      <label class="form-label">Select Your Language</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container mb-3 mt-5" >
                     <input type="file" name="choosefile" class="form-control mt-3 mb-3 border border-warning" value="<?php echo isset($row['user_photo'])?$row['user_photo']:null;?>" placeholder="Enter Photo" id="imguploadID">
                    <label class="form-label">User Picture</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                      <!--  footer -->
                      <div>
                        <button type="submit" class="btn btn-danger" name="UpdateSubmit">Submit</button>
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
if(isset($_POST['UpdateSubmit'])){

      $_nameofcer=isset($_POST['nameCertificate'])?$_POST['nameCertificate']:null;
      $_username=isset($_POST['uname'])?$_POST['uname']:null;
      $_password=isset($_POST['password'])?$_POST['password']:null;
      $_sel_lang=isset($_POST['selectLng'])?$_POST['selectLng']:null;
      $_image=isset($_FILES['choosefile']['name'])?$_FILES['choosefile']['name']:null;
      $tempname = isset($_FILES["choosefile"]["tmp_name"])?$_FILES["choosefile"]["tmp_name"]:null;
      $folder = "uploads/".$_image;
        error_reporting();
        $conn1 = mysqli_connect('localhost','root','','examregisterdata');

        $selimgq="SELECT * FROM `regisdata` WHERE Id=$ID";
        $result2=mysqli_query($conn1,$selimgq);
        $num2=mysqli_num_rows($result2);
        $rowup=mysqli_fetch_array($result2);
        $database_img=$rowup['user_photo'];
        // print_r($database_img);
        if($_image){
          unlink("uploads/"."$database_img");
          $updateq="UPDATE `regisdata` SET `user_photo`='$_image' WHERE Id=$ID";
          move_uploaded_file($tempname,$folder);
        }else{
          $updateq="UPDATE `regisdata` SET `Name_of_Certificate`='$_nameofcer',`user_Name`='$_username',`password`='$_password',`select_Language`='$_sel_lang' WHERE Id=$ID";
        }
        
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
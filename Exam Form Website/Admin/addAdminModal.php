<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<div class="modal" id="myModal2">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"> 

                  <!-- Modal Header -->
                  <div class="modal-header">
                       <h4 class="modal-title">Add Admin</h4>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                <div class="modal-body">
                  <form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12" enctype="multipart/form-data" action="newadminAdd.php">
                     <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Name" id="admin_Name" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Name" required>
                    <label class="form-label">Admin Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Id" id="admin_Id" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Id" required>
                    <label class="form-label">Admin Id</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Phone_No" id="admin_Phone_No" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Phone Number" required>
                    <label class="form-label">Admin Phone Number</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Password" id="admin_Password" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Password" required>
                    <label class="form-label">Admin Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="admin_Email" id="admin_Email" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Email" required>
                    <label class="form-label">Admin Email</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="date" name="admin_Date_of_Birth" id="admin_Date_of_Birth" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Date of Birth" required>
                    <label class="form-label">Admin Date Of Birth</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div> 
                    
                    
                  
                  
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="AddAdmin">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>   
              </div>
            </div>
        </div>
      </div>
</body>
</html>
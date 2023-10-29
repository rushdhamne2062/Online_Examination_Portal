<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<div class="modal" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"> 

                  <!-- Modal Header -->
                  <div class="modal-header">
                       <h4 class="modal-title">Add User</h4>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                <div class="modal-body">
                  <form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12" enctype="multipart/form-data" action="newuserAdd.php">
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="Name_Of_certi" id="nameOfCertificate" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Name of Certificate" required>
                    <label class="form-label">Name Of Certificate</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                      <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="user_Name" id="userName" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Name" required>
                    <label class="form-label">User Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="_password" id="pass" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Password" required>
                    <label class="form-label">Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating">
                      <select class="form-select form-select-lg mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" name="sel_lang" required>
                        <option>select language</option>
                        <option>C</option>
                        <option>C++</option>
                        <option>Java</option>
                        <option>Python</option>
                      </select>
                      <label class="form-label">Select Your Language</label>
                      <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                    <div class="form-floating">
                      <input type="file" name="_image" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Photo" id="imgupload" required>
                      <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    
                  
                  
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="AddUser">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>   
              </div>
            </div>
        </div>
      </div>
</body>
</html>
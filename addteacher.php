<div class="container">
  <!-- Modal -->
      <div class="modal fade" id="addteacher" role="dialog">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background:url('images/formbackground.jpg')">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 style='font-family:verdana;font-size:25;text-align:center;font-weight:bold;color:black'>Create Teacher Account</h4>
                </div>

                <div class="modal-body" style="background:url('images/formbackground.jpg')">

                  <div  class="row">  
                    <div class="col-sm-12">
                      <form data-toggle="validator" class="form-horizontal" method="post" action="">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="username">Username</label>
                            <div class="col-sm-6">          
                              <input type="text" class="form-control input-sm" name="username" data-error="You cant leave this empty or invalid" placeholder="kashifahmad" required>
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-4" for="password">Password</label>
                            <div class="col-sm-6">          
                              <input type="password" class="form-control input-sm" name="password" data-error="You cant leave this empty or invalid" placeholder="sialkot123" required>
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>

                         <div class="form-group">
                         <label class="control-label col-sm-4" for="password">Role</label>
                            <div class="col-sm-6">
                               <select class="form-control input-sm" id="sel1" name='role'>
                                  <option value='teacher'>Teacher</option>
                                  <option value='admin'>Admin</option>
                                </select>
                            </div>
                          </div>

                        <div class="form-group">        
                          <div class="col-sm-offset-5">
                            <button type="submit" name="add-teacher-account" class="btn btn-success btn-sm" style="width:30%"><subtitle>Submit</subtitle></button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>  

                  <div class="modal-footer" style="background:url('images/formbackground.jpg')">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
          </div>
        </div>
    </div>
</div>

<?php
        //$postid = mysql_escape_string(@$_GET['view_sassign']);
        include ("includes/db.php");
        if(isset($_POST['add-teacher-account'])){
            $User = mysql_real_escape_string($_POST['username']);
            $Pass = mysql_real_escape_string($_POST['password']);
            $Role = mysql_real_escape_string($_POST['role']);
            
            $que="INSERT INTO login (username,password,role) VALUES ('$User','$Pass','$Role')";

            if(mysql_query($que)){
              echo "<script>swal('Congratulations! Account Created Successfully!')</script>";  
            }
    }
?>
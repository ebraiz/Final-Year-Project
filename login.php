<?php
session_start();
?>

<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/loginbackground.jpg')">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <heading class="modal-title">Login (Only For Selected Students)</heading>
        </div>
        <div class="modal-body" style="background:url('images/loginbackground.jpg')">
          
		  <form class="form-inline" method='post' action=''>
   
	<div class="row">
      <div class="col-sm-4" style="padding-left:15px;padding-right:0px;">
        <label>&nbsp;Username or College No:</label>
        <input type='text' name='username' class='input-lg' maxlength="20" data-error="You cant leave this empty or invalid" placeholder="aryankhan" required style='width:80%'>
      </div>
	  
	  <div class="col-sm-4" style="padding-left:0px;padding-right:0px;">
        <label>Password:</label>
        <input type='password' name='password' class='input-lg' style='width:80%'>
      </div>
	 
	<div class="col-sm-4" style="padding-left:0px;padding-top:25px;padding-right:0px;">
        <button type="submit" name='submit-login' class="btn btn-info btn-lg">Log In</button>
		
    </div>	 
  </div>
</form>
		  
        </div>
        <div class="modal-footer" style="background:url('images/loginbackground.jpg')">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<?php
include ("includes/db.php");  
if(isset($_POST['submit-login']))
{
$user_name = $_SESSION['username'] = mysql_real_escape_string($_POST['username']);
$user_pass = $_SESSION['password'] = mysql_real_escape_string($_POST['password']);
  
$student_panel = "SELECT * FROM admission_form WHERE college_no='$user_name' AND password='$user_pass' AND role='student'";
$admin_panel = "SELECT * FROM login WHERE username='$user_name' AND password='$user_pass' AND role='admin'";
$teacher_panel = "SELECT * FROM login WHERE username='$user_name' AND password='$user_pass' AND role='teacher'";  

  if($run=mysql_query($student_panel)){
  
if(mysql_num_rows($run)>0){
    echo "<script>window.open('profile.php','_self')</script>";  
    exit(0);
    }
  }

if($run=mysql_query($teacher_panel)){
  
  if(mysql_num_rows($run)>0){
    echo "<script>window.open('tassignment.php','_self')</script>";  
    exit(0);
    }
  }

if($run=mysql_query($admin_panel)){
  
    if(mysql_num_rows($run)>0){
    echo "<script>window.open('viewforms.php','_self')</script>";
    exit(0);
    }
  
    else{
    echo "<script>swal('Username or Password is Incorrect!')</script>";
    } 
  }
}
?>
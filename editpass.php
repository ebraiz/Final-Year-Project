<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="editpass" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style='font-family:verdana;font-size:25;text-align:center;font-weight:bold;color:black'>Change Your Password Here</h4>
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">

<form data-toggle="validator" class="form-horizontal" method="post" action="">

      <div class="form-group">
          <label class="control-label col-sm-4" for="satitle">Change Password</label>
          <div class="col-sm-5">
          
          <input type='password' class="form-control input-sm" maxlength="30" data-error="You cant leave this empty or invalid" id="showPass" name='password' value='<?php echo $_SESSION['password']; ?>' /><span onmouseleave="document.getElementById('showPass').type = 'password';" onmouseover="document.getElementById('showPass').type = 'text';" ><h4 style='font-family:verdana;font-size:15;font-weight:bold'>Show Password</h4></span>          
            
          <div class="help-block with-errors"></div>
        </div>
      </div>

        <div class="form-group">        
            <div class="col-sm-offset-5">
              <button type="submit" name="changepass" class="btn btn-success btn-lg" style="width:30%"><subtitle>Submit</subtitle></button>
            </div>
        </div>

</form>


  </div>  

<div class="modal-footer" style="background:url('images/formbackground.jpg')">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
</div>

<?php
if(isset($_POST['changepass']))
{
include ("includes/db.php");  
$ID = $_SESSION['sid'];
$Pass = mysql_real_escape_string($_POST['password']);

$query= "UPDATE admission_form SET password='$Pass' WHERE sid='$ID'"; 

if(mysql_query($query)){
  echo "<script>window.open('index.php','_self')</script>";
  //echo "<script>swal('Password Changed!')</script>";
  }

  else{
    echo "<script>alert('Username or Password is Incorrect!')</script>";
  }
}
?>
<div class="container">
  
  <div class="modal fade" id="registration" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <heading class="modal-title">Online Registration Form</heading>
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">
          <div id="reg_info"> </div>

  <form data-toggle="validator" class="form-horizontal" method="post" action='' enctype="multipart/form-data">

    </br><subtitle>PERSONAL INFORMATION</subtitle>
     
    <div class="form-group">
      <label class="control-label col-sm-4" for="sname">Student Name:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="sname" pattern="[A-Za-z ]{0,30}" data-error="Can't Leave this Empty or Invalid" placeholder="Shahid Afridi" required>
      <div class="help-block with-errors"></div>
	  </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="fname">Father Name:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="fname" pattern="[A-Za-z ]{0,30}" data-error="Can't Leave this Empty or Invalid" placeholder="Umar Afridi" required>
      <div class="help-block with-errors"></div>
	  </div></div>

	  <div class="form-group">
     <label class="control-label col-sm-4" for="gender">Gender:</label>
     <div class="radio">
      <label><input type="radio" name="gender" value="male" checked>Male</label>
      <label><input type="radio" name="gender" value="female">Female</label>
     </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="dob">DOB:</label>
      <div class="col-sm-5">          
        <input type="date" class="form-control input-sm" name="dob">
      </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="cnic">CNIC:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="cnic" maxlength="13" pattern="[0-9]{13}" data-error="Please Enter Only Basic 13 Numeric Digits" placeholder="4210112312371" required>
      <div class="help-block with-errors"></div>
	  </div></div>

	<div class="form-group">
      <label class="control-label col-sm-4" for="cnic">Religion:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="religion" maxlength="10" pattern="[A-z]{2,10}" data-error="Can't Leave this Empty or Invalid" placeholder="Islam" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
    <div class="form-group">
      <label class="control-label col-sm-4" for="mobile">Mobile No:</label>
      <div class="col-sm-5">          
		<input type="text" class="form-control input-sm" name="mobile" maxlength="11" pattern="[0-9]{11,11}" data-error="Please Enter Only 11 Numeric Digits" placeholder="03339187423" required>
      <div class="help-block with-errors"></div>
	  </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-5">          
        <input type="email" class="form-control input-sm" name="email" placeholder="example@gmail.com" data-error="Email address is invalid" required>
      <div class="help-block with-errors"></div>
	  </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="paddress">Permanent Address:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="paddress" maxlength="100" data-error="Can't Leave this Empty or Invalid" required>
      <div class="help-block with-errors"></div>
	  </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="taddress">Temporary Address:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="taddress" maxlength="100" data-error="Can't Leave this Empty or Invalid" required>
      <div class="help-block with-errors"></div>
	  </div></div>

	     </br><subtitle>PREVIOUS ACADEMIC INFORMATION</subtitle>
   
    <div class="form-group">
      <label class="control-label col-sm-4" for="qualification">Qualification:</label>
	  <div class="col-sm-5"> 
    <select class="form-control" name="qualification">
      <option>FSC</option>
      <option>FCS</option>
      <option>BSC</option>
      <option>BA</option>
    </select></div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-4" for="year">Year of Passing:</label>
	  <div class="col-sm-5"> 
    <select class="form-control" name="year">
      <option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option>
	  <option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option><option>2023</option>
	  <option>2024</option><option>2025</option>
	  </select></div></div>
	  
	   <div class="form-group">
      <label class="control-label col-sm-4" for="sname">From Which University:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="university" pattern="[A-Za-z ]{0,50}" data-error="Can't Leave this Empty or Invalid" placeholder="Edwardes College" required>
	  <div class="help-block with-errors"></div>
    </div></div>
	  
	   <div class="form-group">
      <label class="control-label col-sm-4" for="sname">Obtained Marks:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="obtained" maxlength="4" pattern="[0-9]{3,4}" data-error="Can't Leave this Empty or Invalid" placeholder="950" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="sname">Total Marks:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="total" maxlength="4" pattern="[0-9]{3,4}" data-error="Can't Leave this Empty or Invalid" placeholder="1100" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	 
	  <div class="form-group">
      <label class="control-label col-sm-4" for="cgpa">CGPA:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="cgpa" maxlength="3" pattern="([2-9]{1}\.[0-9]{1})" data-error="Invalid GPA" placeholder="3.7">
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-4" for="subject">Subject In Which Addmission is Required:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="subject" maxlength="40" data-minlength="5" data-error="Can't Leave this Empty or Invalid" placeholder="Computer Science" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-4" for="photo">Attach Your Photo:</label>
      <div class="col-sm-5">          
        <input type="file" class="form-control input-sm" name="image">
      </div></div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2">
      <button type="submit" name="submit-reg" class="btn btn-default btn-lg" style="width:68%;"><subtitle>Submit</subtitle></button>
	  </div></div>
  </form>
</div></div>

<?php

include ("includes/db.php");
if(isset($_POST['submit-reg']))
    {
        //$username = $_POST['username'];
        //$password = $_POST['password'];
        $sname = mysql_real_escape_string($_POST['sname']);
        $fname = mysql_real_escape_string($_POST['fname']);
        $gender = mysql_real_escape_string($_POST['gender']);
        $dob = mysql_real_escape_string($_POST['dob']);
        $cnic = mysql_real_escape_string($_POST['cnic']);
        $religion = mysql_real_escape_string($_POST['religion']);
        $mobile = mysql_real_escape_string($_POST['mobile']);
        $email = mysql_real_escape_string($_POST['email']);
        $paddress = mysql_real_escape_string($_POST['paddress']);
        $taddress = mysql_real_escape_string($_POST['taddress']);
        $qualification = mysql_real_escape_string($_POST['qualification']);
        $year = mysql_real_escape_string($_POST['year']);
        $university = mysql_real_escape_string($_POST['university']);
        $obtained = mysql_real_escape_string($_POST['obtained']);
        $total = mysql_real_escape_string($_POST['total']);
        $cgpa = mysql_real_escape_string($_POST['cgpa']);
        $subject = mysql_real_escape_string($_POST['subject']);
        $img_name=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $org_path="images/$img_name";
        move_uploaded_file($tmp,$org_path);

        $que="INSERT INTO admission_form(sname,fname,gender,dob,cnic,religion,mobile,email,paddress,taddress,qualification,year,university,obtained,total,cgpa,subject,image)
        VALUES('$sname','$fname','$gender','$dob','$cnic','$religion','$mobile','$email','$paddress','$taddress','$qualification','$year','$university','$obtained','$total','$cgpa','$subject','$org_path')";

        if(mysql_query($que)){
        	
        echo "<script>swal('Congratulations! You have Submitted The Form Successfully!')</script>";
        //header('location:index.php');		
        }
    }
?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>      
</div>
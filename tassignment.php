<?php
session_start();
if(!$_SESSION['username']){
header('location:index.php');
die();
} 
?>
<!DOCTYPE html>
<html>

  <head>
        <title>Assignment Forms</title>
        <?php 
          include("includes/bootstrap-header.inc"); 
          include("editteacherpass.php"); 
        ?>
  </head>

<body link='white'>

<table border='0' width='100%' height='30%' valign='top'>

<!--Header-->
        <tr>
          <td bgcolor='green' colspan='6'>
              <table border='0' width='100%'>
                  <tr>
                    <td>
                       <h3 style='color:white' align='left'>&emsp;<?php echo "Welcome, " . $_SESSION['username'] . "!"; ?>
                    </td>
                        
                    <td valign='top'>
                        <a href='logout.php' style='color:white'><h4 style='text-align: right'>Logout</a>&emsp;|&emsp;
                        <a href='#' data-toggle='modal' style='color:white' data-target='#changeteacherpass' class='a_menu'>Change Password</h4></a>
                    </td>

                  </tr>
              </table>

            <h1 style='color:white' align='center'>Welcome To Edwardes College <br>(TEACHER PANEL)</h1>
          </td>
        </tr>


</table>

<div  class="row" style='background-image: url("images/background.png");width:100%;height:100%'>
<div class="col-sm-12">
<!--Menu Bar-->
        <div align='center'>
        <br>
          <a href='tassignment.php'><img src='images/form_assignment.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='viewstudentassign.php'><img src='images/view_students_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='sentteacherassign.php'><img src='images/sent_teacher_assignments.png' width='150px' /></a>
          <!--<td><a href='takeattendance.php'><img src='images/take_attendance.png' width='150px' /></a></td>
          <td><a href='viewattendance.php'><img src='images/view_attendance.png' width='150px' /></a></td>-->
        </div>

<form data-toggle="validator" class="form-horizontal" method="post" action="tassignment.php" enctype="multipart/form-data">

<div class="form-group" style='text-align:left'>
<div class="col-sm-offset-4">
<heading>Assignment Form For Teachers</heading>
</div></div>

 <div class="form-group">
      <label class="control-label col-sm-4" for="subject">Subject Name:</label>
    <div class="col-sm-5"> 
    <select class="form-control" name="subject">
<?php include('subject_name.php'); ?>
    </select></div></div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="teacher">Teacher Name:</label>
    <div class="col-sm-5"> 
    <select class="form-control" name="teacher">
      <option>Naveed Ali</option>
      <option>Changez Khan</option>
      <option>Abdul Hameed</option>
      <option>Abdul Mudassar</option>
      <option>Ali Raza</option>
    </select></div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="tatitle">Assignment Title:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="tatitle" maxlength="50" data-error="You cant leave this empty" placeholder="Data Structure Assignment 1" required>
      <div class="help-block with-errors"></div>
	  </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="tadesc">Assignment Description:</label>
      <div class="col-sm-5">          
        <textarea class="form-control input-sm" name="tadesc" rows="10" maxlength="5000" data-error="You cant leave this empty"></textarea>
      <div class="help-block with-errors"></div>
	  </div></div>
	  	  
	  <div class="form-group">
      <label class="control-label col-sm-4" for="semester">Semester:</label>
	  <div class="col-sm-5"> 
    <select class="form-control" name="semester">
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
    </select></div></div>

 <div class="form-group">
      <label class="control-label col-sm-4" for="batch-tassign">Batch_No:</label>
    <div class="col-sm-5"> 
    <select class="form-control" name="batch-tassign">
      <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
    </select></div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="tadate">Deadline:</label>
      <div class="col-sm-5">          
        <input type="date" class="form-control input-sm" name="tadate">
      </div></div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="tatotal">Total Marks:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control input-sm" name="tatotal" maxlength="4" pattern="[0-9]{2,4}" data-error="You cant leave this empty" placeholder="25" required>
      <div class="help-block with-errors"></div>
	  </div></div>

	  <div class="form-group">
      <label class="control-label col-sm-4" for="tafile">Attach File:</label>
      <div class="col-sm-5">          
        <input type="file" class="form-control input-sm" name="tafile">
      </div></div>

    <div class="form-group">        
      <div class="col-sm-offset-5">
      <button type="submit" name="tassign-submit" class="btn btn-success btn-lg" style="width:30%;"><subtitle>Submit</subtitle></button>
	  </div></div>
  </form>

  </div></div>

       
        <footer>
          <subtitle>
            Copyright 2016 | All Right Reserved | By Edwardes College
          </subtitle> 
        </footer>
      
  </body>
  </html>
<?php

include ("includes/db.php");

if(isset($_POST['tassign-submit']))
{
      $subject = mysql_real_escape_string($_POST['subject']);
      $teacher = mysql_real_escape_string($_POST['teacher']);
      $tatitle = mysql_real_escape_string($_POST['tatitle']);
      $tadesc = mysql_real_escape_string($_POST['tadesc']);
      $semester = mysql_real_escape_string($_POST['semester']);
      $batch_tassign = mysql_real_escape_string($_POST['batch-tassign']);
      $tadate = mysql_real_escape_string($_POST['tadate']);
      $tatotal = mysql_real_escape_string($_POST['tatotal']);
      $file_name = $_FILES['tafile']['name'];
      $tmp = $_FILES['tafile']['tmp_name'];
      $org_path = "tassignment/" . $file_name;
      move_uploaded_file($tmp,$org_path);

      $que = "INSERT INTO assignment(subject,teacher,title,t_desc,semester,batch_no,deadline,tot_marks,file_upload) VALUES('$subject','$teacher','$tatitle','$tadesc','$semester','$batch_tassign','$tadate','$tatotal','$org_path')";

        if(mysql_query($que)){
        echo "<script>swal('Congratulations! You Have Submitted The Form Successfully!')</script>";
        exit();
        }
          else{
          echo "<script>swal('Sorry! Unable to Submit, Please Try Again')</script>";
          exit();
          }
  }
?>
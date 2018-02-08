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
		<title>Edit Teacher's Sent Assignment</title>

		<?php 
			include("editteacherpass.php"); 
			include("includes/bootstrap-header.inc");
		?>

	</head>

<body link='white'>

<table border='0' width='100%' height='30%' valign='top'>

<!--Header-->
<tr>
<td bgcolor='green' colspan='6'>


<table border='0' width='100%'>
<tr>
<td><h3 style='color:white' align='left'>&emsp;<?php echo "Welcome, " . $_SESSION['username'] . "!"; ?></td>

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

<table border='0' width='100%' height='100%' valign='bottom' style='background-image: url("images/background.png");width:100%;height:100%'>
<!--Menu Bar-->
        <tr height='25%' align='center'>
          <td colspan='3'><a href='tassignment.php'><img src='images/form_assignment.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='viewstudentassign.php'><img src='images/view_students_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='sentteacherassign.php'><img src='images/sent_teacher_assignments.png' width='150px' /></a></td>
          <!--<td><a href='takeattendance.php'><img src='images/take_attendance.png' width='150px' /></a></td>
          <td><a href='viewattendance.php'><img src='images/view_attendance.png' width='150px' /></a></td>-->
        </tr>

<tr>
<td colspan='6'>

<!-- Body Begins -->

<!-- Selecting Personal Data From Database for Editing -->
<?php
include ("includes/db.php");
$d= mysql_real_escape_string(@$_GET['d']);

$query = mysql_query("SELECT * FROM assignment WHERE assignid='$d'") or die(mysql_error());
$run = mysql_fetch_assoc($query);

$AID = $run['assignid'];
$Subject = $run['subject'];
$Teacher = $run['teacher'];
$Title = $run['title'];
$T_desc = $run['t_desc'];
$Semester = $run['semester'];
$Batch_no = $run['batch_no'];
$File_upload = $run['file_upload'];
$Deadline = $run['deadline'];
$Totmarks = $run['tot_marks'];
$Receiveddate = $run['received_date'];
?>

<!-- Showing Selected Information into Form -->

<form method='post' action='edittassign.php'>
<br><br>

<table border='1' align='center'>

<tr><td colspan='2'><h4 align='center'>Edit Assignment</h4></td></tr>
<tr><td>Assignment ID: </td><td><input type='text' name='A_ID' value="<?php echo $AID; ?>"/></td></tr>
<tr><td>Subject Name: </td><td><input type='text' name='Subject' value="<?php echo $Subject; ?>"/></td></tr>
<tr><td>Teacher Name: </td><td><input type='text' name='Teacher' value="<?php echo $Teacher; ?>"/></td></tr>
<tr><td>Title: </td><td><input type='text' name='Title' value="<?php echo $Title; ?>"/></td></tr>
<tr><td>Teacher Description: </td><td><textarea type='text' name='T_desc' rows='10' cols='18' ><?php echo $T_desc; ?></textarea></td></tr>
<tr><td>Semester: </td><td><input type='text' name='Semester' value="<?php echo $Semester; ?>"/></td></tr>
<tr><td>Batch No: </td><td><input type='text' name='Batch_no' value="<?php echo $Batch_no; ?>"/></td></tr>
<tr><td>File Upload: </td><td><input type='text' name='File_Upload' value="<?php echo $File_upload; ?>"/></td></tr>
<tr><td>Deadline: </td><td><input type='text' name='Deadline' value="<?php echo $Deadline; ?>"/></td></tr>
<tr><td>Total Marks: </td><td><input type='text' name='Total_Marks' value="<?php echo $Totmarks; ?>"/></td></tr>
<tr><td>Received Date: </td><td><input type='text' name='Received_Date' value="<?php echo $Receiveddate; ?>"/></td></tr>
<tr><td align='center' colspan='2'><input type='submit' name='edit-assign' value='Update'></td></tr>
</table>
</form>

<!-- Update Section -->
<?php
include ("includes/db.php");
if(isset($_POST['edit-assign']))
{
$A_ID = mysql_real_escape_string($_POST['A_ID']);
$Sub = mysql_real_escape_string($_POST['Subject']);
$Tea = mysql_real_escape_string($_POST['Teacher']);
$Tit = mysql_real_escape_string($_POST['Title']);
$T_des = mysql_real_escape_string($_POST['T_desc']);
$Sem = mysql_real_escape_string($_POST['Semester']);
$Bat = mysql_real_escape_string($_POST['Batch_no']);
$Fil = mysql_real_escape_string($_POST['File_Upload']);
$Dea = mysql_real_escape_string($_POST['Deadline']);
$Tot = mysql_real_escape_string($_POST['Total_Marks']);
$Rec = mysql_real_escape_string($_POST['Received_Date']);

$query= "UPDATE assignment SET subject='$Sub',teacher='$Tea',title='$Tit', t_desc='$T_des',semester='$Sem',batch_no='$Bat',file_upload='$Fil',deadline='$Dea',tot_marks='$Tot',received_date='$Rec' WHERE assignid='$A_ID'"; 

if(mysql_query($query)){
	echo "<script>window.open('sentteacherassign.php?Upd=Assignment Updated!','_self')</script>";
	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!')</script>";
	}
}
?>

<!-- End of Body   -->

</td>
</tr>
</table>
	<footer>
		<subtitle>
			Copyright 2016 | All Right Reserved | By Edwardes College
		</subtitle>	
	</footer>
</body>
</html>
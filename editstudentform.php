<?php

session_start();
if(!$_SESSION['username']){
	header('location:index.php');
	die();

}	
?>
<html>

	<head>
		<title>Change Student Information</title>
		<?php
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

<h1 style='color:white' align='center'>Welcome To Edwardes College <br>(ADMIN PANEL)</h1>
</td>
</tr>

</table>

<table border='0' width='100%' height='70%' valign='bottom' style='background-image: url("images/background.png");width:100%;height:100%'>

<!--Menu Bar-->
		<tr height='25%' align='center'>
			<td colspan='2'><a href='viewforms.php'><img src='images/forms_received.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='selected.php'><img src='images/selected_students.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='senttassign.php'><img src='images/sent_teacher_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewsassign.php'><img src='images/view_students_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewnotice.php'><img src='images/manage_notices.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewteacheraccount.php'><img src='images/teacher_accounts.png' width='150px' /></a></td>
		</tr>
<tr>
<td colspan='6'>

<!-- Body Begins -->

<!-- Selecting Personal Data From Database for Editing -->
<?php
include ("includes/db.php");
$d= mysql_real_escape_string(@$_GET['d']);
$query = mysql_query("SELECT * FROM admission_form WHERE sid='$d'") or die(mysql_error());
$run = mysql_fetch_assoc($query);
$SID = $run['sid'];
$roll = $run['college_no'];
$bat_no = $run['batch_no'];
$user = $run['username'];
$pass = $run['password'];
$s_name = $run['sname'];
$f_name = $run['fname'];
$gender = $run['gender'];
$dob = $run['dob'];
$cnic = $run['cnic'];
$mobile = $run['mobile'];
$email = $run['email'];
$paddress = $run['paddress'];
$taddress = $run['taddress'];
$qualification = $run['qualification'];
$year = $run['year'];
$university = $run['university'];
$obtained = $run['obtained'];
$total = $run['total'];
$cgpa = $run['cgpa'];
$subject = $run['subject'];
$image = $run['image'];
?>

<!-- Showing Selected Information into Form -->
<html>
<body>
<form method='post' action='editstudentform.php'>
<br><br><table border='1' align='center'>

<tr><td colspan='2'><h4 align='center'>Edit Student Form</h4></td></tr>
<tr><td>S_ID: </td><td><input type='text' name='S_ID' value="<?php echo $SID; ?>"/></td></tr>
<tr><td>Roll No: </td><td><input type='text' name='collegeno' value="<?php echo $roll; ?>"/></td></tr>
<tr><td>Batch No: </td><td><input type='text' name='batch' value="<?php echo $bat_no; ?>"/></td></tr>
<tr><td>Username: </td><td><input type='text' name='user' value="<?php echo $user; ?>"/></td></tr>
<tr><td>Password: </td><td><input type='text' name='pass' value="<?php echo $pass; ?>"/></td></tr>
<tr><td>Student Name: </td><td><input type='text' name='s_name' value="<?php echo $s_name; ?>"/></td></tr>
<tr><td>Father Name: </td><td><input type='text'  name='f_name' value="<?php echo $f_name; ?>"/></td></tr>
<tr><td>Gender: </td><td><input type='text'  name='gender' value="<?php echo $gender; ?>"/></td></tr>
<tr><td>DOB: </td><td><input type='text'  name='dob' value="<?php echo $dob; ?>" /></td></tr>
<tr><td>CNIC: </td><td><input type='text'  name='cnic' value="<?php echo $cnic; ?>"/></td></tr>
<tr><td>Mobile NO: </td><td><input type='text'  name='mobile' value="<?php echo $mobile; ?>"/></td></tr>
<tr><td>Email: </td><td><input type='text'  name='email' value="<?php echo $email; ?>"/></td></tr>
<tr><td>Permanent Address: </td><td><input type='text' name='paddress' value="<?php echo $paddress; ?>"/></td></tr>
<tr><td>Temporary Address: </td><td><input type='text' name='taddress' value="<?php echo $taddress; ?>"/></td></tr>
<tr><td>Qualification: </td><td><input type='text' name='qualification' value="<?php echo $qualification; ?>"/></td></tr>
<tr><td>Year: </td><td><input type='text' name='year' value="<?php echo $year; ?>"/></td></tr>
<tr><td>Institute: </td><td><input type='text' name='university' value="<?php echo $university; ?>"/></td></tr>
<tr><td>Obtained Marks: </td><td><input type='text' name='obtained' value="<?php echo $obtained; ?>"/></td></tr>
<tr><td>Total Marks: </td><td><input type='text' name='total' value="<?php echo $total; ?>"/></td></tr>
<tr><td>CGPA: </td><td><input type='text' name='cgpa' value="<?php echo $cgpa; ?>"/></td></tr>
<tr><td>Subject: </td><td><input type='text' name='subject' value="<?php echo $subject; ?>"/></td></tr>
<tr><td>Photo: </td><td><input type='text' name='image' value="<?php echo $image; ?>"/></td></tr>
<tr><td align='center' colspan='2'><input type='submit' name='update' value='Update'></td></tr>
</table>
</form>
</body>
</html>

<!-- Update Section -->
<?php
include ("includes/db.php");
if(isset($_POST['update']))
{
$S_ID = mysql_real_escape_string($_POST['S_ID']);
$Roll = mysql_real_escape_string($_POST['collegeno']);
$Batch = mysql_real_escape_string($_POST['batch']);
$User = mysql_real_escape_string($_POST['user']);
$Pass = mysql_real_escape_string($_POST['pass']);
$S_name = mysql_real_escape_string($_POST['s_name']);
$F_name = mysql_real_escape_string($_POST['f_name']);
$Gender = mysql_real_escape_string($_POST['gender']);
$Dob = mysql_real_escape_string($_POST['dob']);
$Cnic = mysql_real_escape_string($_POST['cnic']);
$Mobile = mysql_real_escape_string($_POST['mobile']);
$Email = mysql_real_escape_string($_POST['email']);
$P_address = mysql_real_escape_string($_POST['paddress']);
$T_address = mysql_real_escape_string($_POST['taddress']);
$Qualification = mysql_real_escape_string($_POST['qualification']);
$Year = mysql_real_escape_string($_POST['year']);
$University = mysql_real_escape_string($_POST['university']);
$Obtained = mysql_real_escape_string($_POST['obtained']);
$Total = mysql_real_escape_string($_POST['total']);
$Cgpa = mysql_real_escape_string($_POST['cgpa']);
$Subject = mysql_real_escape_string($_POST['subject']);
$org_path = $_POST['image'];

$query= "UPDATE admission_form SET username='$User',password='$Pass',batch_no='$Batch',college_no='$Roll', sname='$S_name', fname='$F_name', gender='$Gender', dob='$Dob', cnic='$Cnic', mobile='$Mobile', email='$Email', paddress='$P_address', taddress='$T_address', qualification='$Qualification', year='$Year', university='$University', obtained='$Obtained', total='$Total', cgpa='$Cgpa', subject='$Subject', image='$org_path' WHERE sid='$S_ID'"; 

if(mysql_query($query)){
	echo "<script>window.open('selected.php?Upd=Forms Updated!','_self')</script>";
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
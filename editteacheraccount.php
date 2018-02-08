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
		<title>Edit Teacher's Accounts</title>
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

<h1 style='color:white' align='center'>Welcome To Edwardes College <br>(ADMIN PANEL)</h1>
</td>
</tr>

</table>

<table border='0' width='100%' height='100%' valign='bottom' style='background-image: url("images/background.png");width:100%;height:100%'>
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
$d= mysql_real_escape_string(@$_GET['edit-acc']);

$query = mysql_query("SELECT * FROM login WHERE id = '$d'") or die(mysql_error());
$run = mysql_fetch_assoc($query);

$AccID = $run['id'];
$Username = $run['username'];
$Password = $run['password'];
$Role = $run['role'];

?>

<!-- Showing Selected Information into Form -->

<form method='post' action='editteacheraccount.php'>
<br><br>

<table border='1' align='center'>


<tr><td colspan='2'><h4 align='center'>Edit Teacher Account</h4></td></tr>
<tr><td>Account ID: </td><td><input type='text' name='accid' value="<?php echo $AccID; ?>"/></td></tr>
<tr><td>Username: </td><td><input type='text' name='user' value="<?php echo $Username; ?>"/></td></tr>
<tr><td>Password: </td><td><input type='text' name='pass' value="<?php echo $Password; ?>"/></td></tr>
<tr><td>Role: </td><td><input type='text' name='rol' value="<?php echo $Role; ?>"/></td></tr>


<tr><td align='center' colspan='2'><input type='submit' name='edit-acc' value='Update'></td></tr>
</table>
</form>

<!-- Update Section -->
<?php
include ("includes/db.php");
if(isset($_POST['edit-acc']))
{
$Accid = mysql_real_escape_string($_POST['accid']);
$User = mysql_real_escape_string($_POST['user']);
$Pass = mysql_real_escape_string($_POST['pass']);
$Rol = mysql_real_escape_string($_POST['rol']);

$query= "UPDATE login SET username='$User',password='$Pass',role='$Rol' WHERE id='$Accid'"; 

if(mysql_query($query)){
	echo "<script>window.open('viewteacheraccount.php?Upd=Teacher Account Updated!','_self')</script>";
	}

	else{
		echo "<script>swal('Sorry Not Updated Please Try Again!')</script>";
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
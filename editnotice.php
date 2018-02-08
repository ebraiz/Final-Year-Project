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
		<title>Edit Notice</title>
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
$d= mysql_real_escape_string(@$_GET['edit-not']);

$query = mysql_query("SELECT * FROM notice_board WHERE noticeID='$d'") or die(mysql_error());
$run = mysql_fetch_assoc($query);

$NotID = $run['noticeID'];
$Title = $run['title'];
$Description = $run['description'];
$PubDate = $run['time'];
$Image = $run['image'];

?>

<!-- Showing Selected Information into Form -->

<form method='post' action='editnotice.php'>
<table border='1' height='100%' align='center'>

<tr><td colspan='2' align='center'><h4>Edit Your Notice Here</h4></td></tr>
<tr><td>Notice ID: </td><td><input type='text' name='nid' value="<?php echo $NotID; ?>" /></td></tr>
<tr><td>Notice Title: </td><td><input type='text' name='tit' value="<?php echo $Title; ?>" /></td></tr>
<tr><td>Notice Description: </td><td><input type='text' name='desc' value="<?php echo $Description; ?>" /></td></tr>
<tr><td>Publish Date: </td><td><input type='text' name='tim' value="<?php echo $PubDate; ?>" /></td></tr>
<tr><td>Image: </td><td><input type='text' name='img' value="<?php echo $Image; ?>" /></td></tr>

<tr><td align='center' colspan='2'><input type='submit' name='edit-notice' value='Update'></td></tr>
</table>
<br>
</form>

<!-- Update Section -->
<?php
include ("includes/db.php");
if(isset($_POST['edit-notice']))
{
$Nid = mysql_real_escape_string($_POST['nid']);
$Tit = mysql_real_escape_string($_POST['tit']);
$Des = mysql_real_escape_string($_POST['desc']);
$Tim = mysql_real_escape_string($_POST['tim']);
$Img = mysql_real_escape_string($_POST['img']);

$query= "UPDATE notice_board SET title='$Tit',description='$Des',time='$Tim',image='$Img' WHERE noticeID='$Nid'"; 

if(mysql_query($query)){
	//echo "<script>window.open('viewnotice.php?Upd=Notice Updated!','_self')</script>";
	echo "<script>window.open('viewnotice.php?Upd=Notice Updated!','_self')</script>";
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
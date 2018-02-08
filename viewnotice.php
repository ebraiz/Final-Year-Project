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
<title>View Notices</title>

<?php 
include("includes/bootstrap-header.inc"); 
include("editteacherpass.php"); 
include("addnotice.php"); 
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

<table border='0' width='100%' height='100%' style='background-image: url("images/background.png");width:100%;height:100%'>

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

		<td valign='top'>

					<table border='1' align='left' width='100%'>
					<tr><td colspan='7' align='center'><h3><b>Manage Notices</b></h3></td></tr>
					<tr><td colspan='7' align='center' style='text-color:green'><b><?php echo @$_GET['Upd'] . @$_GET['del'] ?> </b></td></tr>
					<tr><td colspan='7' align='center'><h4><b><a href='#' data-toggle='modal' data-target='#addnotice' class='a_menu'>Add Notices</a></b></h4></td></tr>
					<tr><th>Notice ID</th><th>Notice Title</th><th>Published Date</th><th>Image</th><th>View</th><th>Edit</th><th>Delete</th></tr>

					<?php
								
					include ("includes/db.php");

					$query = mysql_query("SELECT * FROM notice_board") or die(mysql_error());

					while($result = mysql_fetch_assoc($query)){

					$NID = $result['noticeID'];

					echo "<tr><td>" . $NID . "</td><td>" . $result['title'] . "</td><td>" . date('D, M - Y', strtotime($result['time'])) . "</td><td>" . $result['image'] . "</td>

					<td><a href='viewnotice.php?view_notice=" . $NID . "'><b>View</b></a></td>

					<td><a href='editnotice.php?edit-not=" . $NID . "'><b>Edit</b></a></td>

					<td><a href='deletenotice.php?del-not=" . $NID . "'><b>Delete</b></a></td>

					</tr>";

					}
					?>
					
					</table>
		</td>

		<td valign='top'>

					<table border='1' align='right' width='90%'>
					<?php
						include ("includes/db.php");
						$noticeid = mysql_real_escape_string(@$_GET['view_notice']);

					$query = mysql_query("SELECT * FROM notice_board WHERE noticeID='$noticeid' ") or die(mysql_error());

						while($result = mysql_fetch_assoc($query))
							{
								$title = $result['title'];
								$desc = $result['description'];
								$org_path = $result['image'];
									
								echo "<tr><th style='text-align:center;' colspan='1'>" . $title . "</th><td colspan='1' align='right'><a href='viewnotice.php'><img src='images/cross.png' /></a></td></tr>";
						
								echo "<tr><td style='text-align:center;' colspan='2'>" . "<img src='$org_path' height='150px' width='250px' />" . "</td></tr>";
						
								echo "<tr><td colspan='2'>" . $desc . "</td></tr>";
							}

					?>
					</table>
		</td>
</tr>
</body>
</html>
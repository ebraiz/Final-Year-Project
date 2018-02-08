
<?php
session_start();
if(!$_SESSION['username']){
header('location:index.php');
die();
}	
?>

<!DOCTYPE html>

<html>
<head><title>View Teacher Accounts</title>

<?php 
include("includes/bootstrap-header.inc");
include("editteacherpass.php"); 
include("addteacher.php"); 
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
				
					<tr><td colspan='7' align='center'><h3><b>Showing Teacher's Total Accounts</b></h3></td></tr>
					<tr><td colspan='7' align='center' valign='top'><b><?php echo @$_GET['Upd'] . @$_GET['del'] ?> </b></td></tr>
					<tr><td colspan='7' align='center'><h4><b><a href='#' data-toggle='modal' data-target='#addteacher' class='a_menu'>Add Teacher's Account</a></b></h4></td></tr>
					<tr><th>Account ID</th><th>Username</th><th>Password</th><th>Role</th><th>Edit</th><th>Delete</th></tr>

					<?php
								
					include ("includes/db.php");

					$query = mysql_query("SELECT * FROM login") or die(mysql_error());

					while($result = mysql_fetch_assoc($query)){

					$LID = $result['id'];

					echo "<tr><td>" . $LID . "</td><td>" . $result['username'] . "</td><td>" . $result['password'] . "</td><td>" . $result['role'] . "</td>

					<td><a href='editteacheraccount.php?edit-acc=" . $LID . "'><b>Edit</b></a></td>

					<td><a href='deleteteacheraccount.php?del-acc=" . $LID . "'><b>Delete</b></a></td>

					</tr>";

					}
					?>
					
					</table>
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
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
        <title>Teacher Sent Assignments</title>
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

<tr><td colspan='8' align='center'><h3><b><?php echo @$_GET['Upd'] . @$_GET['del'] ?> </b></h3></td></tr>
<tr>
<td valign='top'>

	<table border='1' width='90%' style='border-collapse: separate' align='center'>
		<tr>
			<td colspan='9'>
				<h3 align='center'>	
					Showing Teacher's Sent Assignments
				</h3>
			</td>
		</tr>

		<tr>
			<td colspan='9' align='center'>
								<form class="form-inline" method='post' action='senttassign.php'>

								   	<div class="form-group">
								   		<div class="col-sm-12">
								   			<select class="form-control input-lg" id="sel1" name='teach'>
									    					
											    <option value='Changez Khan'>Show Sent Assignment of Changez Khan</option>
											    <option value='Ali Raza'>Show Sent Assignment of Ali Raza</option>
												<option value='Abdul Hameed'>Show Sent Assignment of Abdul Hameed</option>
												<option value='Abdul Muddasar'>Show Sent Assignment of Abdul Mudassar</option>

											</select>
								   		</div>
								   	</div>

								   <input class="form-control input-lg" type="submit" class="btn btn-default" name='senttassign-filter' Value='Filter' />
									  
								</form>
			</td>
		</tr>

	<?php
			include ("includes/db.php");				
			if(isset($_POST['senttassign-filter'])){
								                                             	
			$teacher = $_SESSION['teach'] = mysql_real_escape_string($_POST['teach']);	

			$query = mysql_query("SELECT * FROM assignment WHERE teacher='$teacher' ORDER BY assignid DESC") or die(mysql_error());
			
			echo "<tr><td colspan='9'><h3 align='center'>Showing Sent Assignments of " . $_SESSION['teach'] . "</h3></td></tr>";
			echo "<tr><th>Teacher Name</th><th>Subject</th><th>Title</th><th>Batch</th><th>Deadline</th><th>Total Marks</th><th>Received Date</th><th>Action</th></tr>";

			while($result = mysql_fetch_assoc($query)){
			$assignid = $result['assignid'];
			
			echo "<tr><td>" . $result['teacher'] . "</td><td>" . $result['subject'] . "</td><td>" . $result['title'] . "</td><td>" . $result['batch_no'] . "</td>
			<td>" . $result['deadline'] . "</td><td>" . $result['tot_marks'] . "</td><td>" . $result['received_date'] . "</td>
			<td><a href='senttassign.php?sent_tassign=" . $assignid . "'><b>View</b></a></td></tr>";
					}
			}

			else{
				echo "<tr><td colspan='9'><h3 align='center'>Showing All The Assignments From All Teachers</h3></td></tr>";	
				$query = mysql_query("SELECT * FROM assignment ORDER BY assignid DESC") or die(mysql_error());
				
				//echo "<tr><td colspan='9'><h3 align='center'>Showing Sent Assignments of " . $_SESSION['teach'] . "</h3></td></tr>";
				echo "<tr><th>Teacher Name</th><th>Subject</th><th>Title</th><th>Batch</th><th>Deadline</th><th>Total Marks</th><th>Received Date</th><th>Action</th></tr>";
				while($result = mysql_fetch_assoc($query)){

				$assignid = $result['assignid'];
				
				echo "<tr><td>" . $result['teacher'] . "</td><td>" . $result['subject'] . "</td><td>" . $result['title'] . "</td><td>" . $result['batch_no'] . "</td>
				<td>" . $result['deadline'] . "</td><td>" . $result['tot_marks'] . "</td><td>" . $result['received_date'] . "</td>
				<td><a href='senttassign.php?sent_tassign=" . $assignid . "'><b>View</b></a></td></tr>";
					
					}
			}
	?>
			

</table>

</td>

<!-- View individual Student Forms on Right Side (Body Begins) -->

<td align='left' valign='top'>

<table border='1' style='border-collapse: separate;text-align: center'>

<?php

include ("includes/db.php");
$postid = mysql_real_escape_string(@$_GET['sent_tassign']);
$query = mysql_query("SELECT * FROM assignment WHERE assignid='$postid'") or die(mysql_error());

	while($result = mysql_fetch_assoc($query))
		{	
			$id = $result['assignid'];
			$title = $result['title'];
			$teac = $result['teacher'];
			$bat = $result['batch_no'];
			$subj = $result['subject'];
			
			echo "<tr><td colspan='3'><h4><b>Teacher Name: " . $teac . "</b></h4></td><td colspan='1'><a href='senttassign.php'><img src='images/cross.png' /></a></td></tr>";
			echo "<tr><td colspan='4'><b>SEMESTER NUMBER:</b>" . $result['semester'] . "<br><b>BATCH NUMBER:</b>" . $bat . "</td></tr>";
			echo "<tr><td colspan='4'><b>" . $title . "</b></td></tr>";
			echo "<tr><td colspan='4' align='justify'><b>" . $result['t_desc'] . "</b></td></tr>";
			echo "<tr><td><b>Subject Name: </b></td><td>" . $subj . "</td>"; 
			echo "<td><b>Total Marks: </b></td><td>" . $result['tot_marks'] . "</td></tr>";
			echo "<tr><td colspan='4'><b>Submit Before: </b>" . $result['deadline'] . "</td></tr>";
			echo "<tr><td colspan='4'><b>Sent Date: </b>" . $result['received_date'] . "</td></tr>";
			//echo "<tr align='center'><td colspan='4'><a href='delete-tassign.php?d=$id'><h4 color='blue'>Delete</h4></a></td></tr>";
			//echo "<td colspan='2'>" . "<a href='edittassign.php?d=$id'><h4 color='blue'>Edit</h4></a>" . "</td></tr>";
			echo "</table>";
			
		}
?>
</td>
<!-- End of Body   -->

</tr>
</table>
</body>
</html>
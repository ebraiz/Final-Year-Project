
<?php
session_start();
if(!$_SESSION['username']){
header('location:index.php');
die();
}	
?>

<!DOCTYPE html>
<html>

		<head><title>View Student Assignments</title>

		<?php 
		include("includes/bootstrap-header.inc"); 
		include("editteacherpass.php"); 
		?>

		<script type="text/javascript">
		function setid(x) {
		document.getElementById("uniqid").setAttribute("value", x);
		}
		</script>

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

							<td colspan='6' valign='top'>

								<br><br>
								<table border='1' align='center'>
									<tr><td colspan='11'><h3 align='center'>Admin Viewing Received Assignments of Students</h3></td></tr>

									<tr>
										<td colspan='11' align='center'>
										
											<form class="form-inline" method='post' action='viewsassign.php'>

									    		<div class="form-group">
									      			<div class="col-sm-12">
									      				<select class="form-control input-lg" id="sel1" name='batch'>
									    					
														    <option value='12'>Show Students of Batch 12</option>
														    <option value='13'>Show Students of Batch 13</option>
															<option value='14'>Show Students of Batch 14</option>
															<option value='15'>Show Students of Batch 15</option>
									  					</select>
									    			</div>
									    		</div>

									    		<input class="form-control input-lg" type="submit" class="btn btn-default" name='assign-filter' Value='Filter' />
									  		</form>
										</td>
									</tr>			

		<?php
		include ("includes/db.php");				
		if(isset($_POST['assign-filter'])){
		                                             
		//$teacher = mysql_real_escape_string($_POST['teacher']);	
		$batch = mysql_real_escape_string($_POST['batch']);	

		$sql = "SELECT * FROM sassignment WHERE batch_no='$batch'";

		echo "<tr><td colspan='9'><h3 align='center'>Showing Assignments of Batch " . $_POST['batch'] . "</h3></td></tr>";		
		echo "<tr><th>College No</th><th>Student Name</th><th>Assignment Title</th><th>Subject</th><th>Batch</th><th>Submitted-To</th><th>Received Date</th><th>Obtained Marks</th><th>Download</th></tr>";
	
		$query = mysql_query($sql);
		while($result = mysql_fetch_assoc($query)){

		$assignid = $result['sa_id'];

		echo "<tr><td>" . $result['college_no'] . "</td><td>" . $result['s_name'] . "</td><td>" . $result['atitle'] . "</td><td>" . $result['subject'] . "</td><td>" . $result['batch_no'] . "</td><td>" . $result['submit_to'] . "</td><td>" . $result['date'] . "</td><td>" . $result['obt_marks'] . "</td><td><a href='" . $result['file_upload'] . "' download><b>Download</b></a></td></tr>";
											
					}
		
		}
		else{

			$sql = "SELECT * FROM sassignment";
		echo "<tr><td colspan='9'><h3 align='center'>Showing All The Assignments From All Batches</h3></td></tr>";
		echo "<tr><th>College No</th><th>Student Name</th><th>Assignment Title</th><th>Subject</th><th>Batch</th><th>Submitted-To</th><th>Received Date</th><th>Obtained Marks</th><th>Download</th></tr>";
	
		$query = mysql_query($sql);
		while($result = mysql_fetch_assoc($query)){

		$assignid = $result['sa_id'];

		echo "<tr><td>" . $result['college_no'] . "</td><td>" . $result['s_name'] . "</td><td>" . $result['atitle'] . "</td><td>" . $result['subject'] . "</td><td>" . $result['batch_no'] . "</td><td>" . $result['submit_to'] . "</td><td>" . $result['date'] . "</td><td>" . $result['obt_marks'] . "</td><td><a href='" . $result['file_upload'] . "' download><b>Download</b></a></td></tr>";
										
					}
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
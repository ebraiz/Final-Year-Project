
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
	<?php include("obtmarks.php"); ?>

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

		
		<table border='0' width='100%' height='100%' style='background-image: url("images/background.png");width:100%;height:100%'>
			
		<!--Menu Bar-->
        
        <tr height='25%' align='center'>
          <td><a href='tassignment.php'><img src='images/form_assignment.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='viewstudentassign.php'><img src='images/view_students_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;
          <a href='sentteacherassign.php'><img src='images/sent_teacher_assignments.png' width='150px' /></a></td>
          <!--<td><a href='takeattendance.php'><img src='images/take_attendance.png' width='150px' /></a></td>
          <td><a href='viewattendance.php'><img src='images/view_attendance.png' width='150px' /></a></td>-->
        </tr>

			<tr>
				<td colspan='6' valign='top'><br>

						<table border='1' align='center'>
								<tr>
									<td colspan='10'>
										<h3 align='center'>
											Sir <?php echo $_SESSION['username']; ?> Viewing His All Received Assignments From Students
										</h3>
									</td>
								</tr>

								<tr>
									<td colspan='10' align='center'>
										<form class="form-inline" method='post' action='viewstudentassign.php'>
											<div class="form-group">
												<div class="col-sm-12">
													<select class="form-control input-lg" id="sel1" name='batch'>
														
													    <option value='12' selected>Batch 12</option>
													    <option value='13'>Batch 13</option>
														<option value='14'>Batch 14</option>
														<option value='15'>Batch 15</option>
													</select>
												</div>
											</div>

											<input class="form-control input-lg" type="submit" class="btn btn-default" name='sassign-filter' Value='Filter' />
										</form>
									</td>
								</tr>

								<?php
									include_once ("includes/db.php");				
									if(isset($_POST['sassign-filter'])){
												                                             
										$teacher = $_SESSION['username'];	
										$batch = mysql_real_escape_string($_POST['batch']);
																					
										$sql = "SELECT * FROM sassignment WHERE submit_to='$teacher' AND batch_no='$batch'";
									
										echo "<tr><td colspan='10'><h3 align='center'>Showing All Assignments of Batch ". $_POST['batch'] . "</h3></td></tr>";
								echo "<tr><th>College No</th><th>Student Name</th><th>Assignment Title</th><th>Subject</th><th>Batch</th><th>Submitted-To</th><th>Received Date</th><th>Obt Marks</th><th>Download</th><th>Give Marks</th></tr>";
								
										$query = mysql_query($sql);
											while($result = mysql_fetch_assoc($query)){
												$assignid = $result['sa_id'];

												echo "<tr><td>" . $result['college_no'] . "</td><td>" . $result['s_name'] . "</td><td>" . $result['atitle'] . "</td>
												<td>" . $result['subject'] . "</td><td>" . $result['batch_no'] . "</td><td>" . $result['submit_to'] . "</td>
												<td>" . $result['date'] . "</td><td>" . $result['obt_marks'] . "</td><td><a href='" . $result['file_upload'] . "' download><b>Download</b>
												</a></td><td><a href='#' onclick='setid(" . $assignid . ");' data-toggle='modal' data-target='#obtmarks' class='a_menu'><b>Give Marks</b></a></td></tr>";
											}
									}
									else {
										
										$teacher = $_SESSION['username'];
										$sql = "SELECT * FROM sassignment WHERE submit_to='$teacher'";
										$query = mysql_query($sql);
										echo "<tr><th>College No</th><th>Student Name</th><th>Assignment Title</th><th>Subject</th><th>Batch</th><th>Submitted-To</th><th>Received Date</th><th>Obt Marks</th><th>Download</th><th>Give Marks</th></tr>";
								
										while($result = mysql_fetch_assoc($query)){
										$assignid = $result['sa_id'];

										echo "<tr><td>" . $result['college_no'] . "</td><td>" . $result['s_name'] . "</td><td>" . $result['atitle'] . "</td>
										<td>" . $result['subject'] . "</td><td>" . $result['batch_no'] . "</td><td>" . $result['submit_to'] . "</td>
										<td>" . $result['date'] . "</td><td>" . $result['obt_marks'] . "</td><td><a href='" . $result['file_upload'] . "' download><b>Download</b>
										</a></td><td><a href='#' onclick='setid(" . $assignid . ");' data-toggle='modal' data-target='#obtmarks' class='a_menu'><b>Give Marks</b></a></td></tr>";
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
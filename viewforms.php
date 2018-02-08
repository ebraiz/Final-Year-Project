
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
<title>View Student Forms</title>

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
							<h3 style='color:white' align='left'>&emsp;	<?php echo "Welcome, " . $_SESSION['username'] . "!"; ?>
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
			<td colspan='10'><a href='viewforms.php'><img src='images/forms_received.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='selected.php'><img src='images/selected_students.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='senttassign.php'><img src='images/sent_teacher_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewsassign.php'><img src='images/view_students_assignments.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewnotice.php'><img src='images/manage_notices.png' width='150px' /></a>&emsp;&emsp;&emsp;&emsp;
			<a href='viewteacheraccount.php'><img src='images/teacher_accounts.png' width='150px' /></a></td>
		</tr>

	<tr>
		<td colspan='6' valign='top'>

			<table border='1' align='center'>
				<tr>
					<td colspan='9'>
						<h3 align='center'>	
							Viewing Received Admission Forms
						</h3>
					</td>
				</tr>

				<tr>
					<td colspan='9' align='center'>
						<h3>
							<b><?php echo @$_GET['Upd'] . @$_GET['del'] ?> </b>
						</h3>
					</td>
				</tr>

				<tr>	
					<td align='center' colspan='9'>
						<div>
						    <form class="form-inline" method='post' action='viewforms.php'>
							    <div class="form-group">
					      			<div class="col-sm-8">
					      				<select class="form-control input-lg" id="sel1" name='filter'>
					    					<option>Highest Marks on Top</option>
										    <option>Show FSC Students</option>
										    <option>Show FCS Students</option>
											<option>Forms of Session 2016</option>
											<option>Forms of Session 2015</option>
											<option>Forms of Session 2014</option>
											<option>Forms of Session 2013</option>
											<option>Show Batch 13 Students</option>
											<option>Show Batch 14 Students</option>
					  					</select>
					    			</div>
					    		</div>			    
					    		<input class="form-control input-lg" type="submit" class="btn btn-default" name='Filter' Value='Filter' />
					  		</form>
						</div>
					</td>
				</tr>	
<!-- Student Forms List on Left Side (Body Begins) -->

				<?php
				include ("includes/db.php");
						
				if(isset($_POST['Filter'])){

				$filter = $_POST['filter'];	

					if($filter == 'Highest Marks on Top'){
						$query = mysql_query("SELECT * FROM admission_form order by obtained desc") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing Student forms with Highest Marks</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Show FSC Students'){
						$query = mysql_query("SELECT * FROM admission_form WHERE qualification='FSC'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing All FSC Students List</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Show FCS Students'){
						$query = mysql_query("SELECT * FROM admission_form WHERE qualification='FCS'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing All FCS Students List</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Forms of Session 2016'){
						$query = mysql_query("SELECT * FROM admission_form WHERE session='2016'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Form for Session 2016</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Forms of Session 2015'){
						$query = mysql_query("SELECT * FROM admission_form WHERE session='2015'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Form for Session 2015</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Forms of Session 2014'){
						$query = mysql_query("SELECT * FROM admission_form WHERE session='2014'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Form for Session 2014</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Forms of Session 2013'){
						$query = mysql_query("SELECT * FROM admission_form WHERE session='2013'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Form for Session 2013</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Show Batch 13 Students'){
						$query = mysql_query("SELECT * FROM admission_form WHERE batch_no='13'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Forms for Batch 13</h3></td></tr>";
							include('formfilter.php');
						}

					else if($filter == 'Show Batch 14 Students'){	
						$query = mysql_query("SELECT * FROM admission_form WHERE batch_no='14'") or die(mysql_error());
						echo "<tr><td colspan='9'><h3 align='center'>Showing List of Forms for Batch 14</h3></td></tr>";
							include('formfilter.php');
						}
				}
					else {
						$query = mysql_query("SELECT * FROM admission_form order by sid desc") or die(mysql_error());
						include('formfilter.php');
					}
				?>

			</table>
		</td>	
	
<!-- View individual Student Forms on Right Side of the main table-->
		<td valign='top'>
			<?php

				include ("includes/db.php");
				$postid = mysql_real_escape_string(@$_GET['view_form']);

				$query = mysql_query("SELECT * FROM admission_form WHERE sid='$postid'") or die(mysql_error());

				echo "
				<table border='2' align='right'>";

					while($result = mysql_fetch_assoc($query))
						{
							$org_path = $result['image'];	
							$id = $result['sid'];

							echo "<tr><td colspan='3'><h4 align='center'><b>" . $result['sname'] . "</b></h4></td><td colspan='1' align='right'><a href='viewforms.php'><img src='images/cross.png' /></a></td></tr>";
							echo "<tr><td colspan='2' align='center'><b>ROLL NUMBER:</b>" . $result['college_no'] . "<br><b>BATCH NUMBER:</b>" . $result['batch_no'] . "</td>";
							echo "<th colspan='2'><img src='$org_path' height='125px' width='125px' /></th></tr>";
							echo "<tr><td colspan='2' align='center'><b>Student Info</b></td><td colspan='2' align='center'><b>Academic Record</b></td></tr>";
							echo "<tr><td><b>Student Name: </b></td><td>" . $result['sname'] . "</td>"; 
							echo "<td><b>Qualification: </b></td><td>" . $result['qualification'] . "</td></tr>";
							echo "<tr><td><b>Father Name: </b></td><td>" . $result['fname'] . "</td>"; 
							echo "<td><b>Year of Passing: </b></td><td>" . $result['year'] . "</td></tr>";
							echo "<tr><td><b>Gender: </b></td><td>" . $result['gender'] . "</td>"; 
							echo "<td><b>Institute: </b></td><td>" . $result['university'] . "</td></tr>";
							echo "<tr><td><b>Date of Birth: </b></td><td>" . $result['dob'] . "</td>"; 
							echo "<td><b>Obtained Marks: </b></td><td>" . $result['obtained'] . "</td></tr>";
							echo "<tr><td><b>CNIC: </b></td><td>" . $result['cnic'] . "</td>";
							echo "<td><b>Total Marks: </b></td><td>" . $result['total'] . "</td></tr>";
							echo "<tr><td><b>Mobile No: </b></td><td>" . $result['mobile'] . "</td>"; 
							echo "<td><b>CGPA: </b></td><td>" . $result['cgpa'] . "</td></tr>";
							echo "<tr><td><b>Email: </b></td><td>" . $result['email'] . "</td>"; 
							echo "<td><b>Subject: </b></td><td>" . $result['subject'] . "</td></tr>";
							echo "<tr><td colspan='2'><b>Permanent Address : </b></td><td colspan='2'>" . $result['paddress'] . "</td></tr>";
							echo "<tr><td colspan='2'><b>Temporary Address: </b></td><td colspan='2'>" . $result['taddress'] . "</td></tr>";
							echo "<tr align='center'><td colspan='4'><a href='deleteselectedform.php?d=$id'><h3 color='blue'>Delete</h3></a></td></tr>";
						}
			echo "</table>";			
			?>

		</td>
	</tr>
</table>
</body>
</html>
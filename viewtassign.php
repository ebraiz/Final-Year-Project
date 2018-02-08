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
        <title>Assignment Forms</title>
        <?php include("includes/bootstrap-header.inc");
        include("sassignment.php"); 
        include("editpass.php");
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
                      <a href='#' data-toggle='modal' style='color:white' data-target='#editpass' class='a_menu'>Change Password</h4></a>
                    </td>
                </tr>
              </table>

              <h1 style='color:white' align='center'>Welcome To Edwardes College <br>(STUDENT PANEL)</h1>
            </td>
        </tr>

</table>

<table border='0' width='100%' height='100%' style='background-image: url("images/background.png");width:100%;height:100%'>

<!--Menu Bar-->
			 <tr height='25%' align='center'>
			          <td colspan='8'><a href='profile.php'><img src='images/my_profile.png' width='150px' /></a>&emsp;&emsp;&emsp;
           			  <a href='viewtassign.php'><img src='images/view_assignments.png' width='150px' /></a></td>
			  </tr>

	<tr>	
		<td colspan='8' align='center'>
			<h3>
				<b><?php echo @$_GET['Upd'] . @$_GET['del'] ?> </b>
			</h3>
		</td>
	</tr>

<tr>
	<td colspan='6' valign='top'>
		<table border='2' style='border-collapse: separate' align='center'>
			
			<tr>
				<td colspan='9' align='center'>
					<form class="form-inline" method='post' action='viewtassign.php'>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<select class="form-control input-lg" id="sel1" name='teach'>
						    					
								    <option value='Changez Khan'>Show Assignment of Changez Khan</option>
								    <option value='Ali Raza'>Show Assignment of Ali Raza</option>
									<option value='Abdul Hameed'>Show Assignment of Abdul Hameed</option>
									<option value='Abdul Muddasar'>Show Assignment of Abdul Mudassar</option>

								</select>
					   		</div>
					   	</div>

						<input class="form-control input-lg" type="submit" class="btn btn-default" name='viewtassign-filter' value='Filter' />
						  
					</form>
				</td>
			</tr>

				<?php
			include ("includes/db.php");		

			if(isset($_POST['viewtassign-filter'])){
								                                             	
			$teacher = $_SESSION['teach'] = mysql_real_escape_string($_POST['teach']);	
			$batch = $_SESSION['batch_no'];
			$query = mysql_query("SELECT * FROM assignment WHERE teacher='$teacher' AND batch_no='$batch' ORDER BY assignid DESC") or die(mysql_error());
			
			echo "<tr>
					<td colspan='9'>
						<h3 align='center'>
							Showing Assignments of " . $_SESSION['teach'] . "
						</h3>
					</td>
				</tr>";

			echo "<tr>
					<th>Teacher Name</th>
					<th>Subject</th>
					<th>Title</th>
					<th>Batch</th>
					<th>Deadline</th>
					<th>Total Marks</th>
					<th>Received Date</th>
					<th>Download</th>
					<th>Action</th>
				</tr>";

			while($result = mysql_fetch_assoc($query)){
			$assignid = $result['assignid'];
			
			echo "<tr>
					<td>" . $result['teacher'] . "</td>
					<td>" . $result['subject'] . "</td>
					<td>" . $result['title'] . "</td>
					<td>" . $result['batch_no'] . "</td>
					<td>" . $result['deadline'] . "</td>
					<td>" . $result['tot_marks'] . "</td>
					<td>" . $result['received_date'] . "</td>
					<td><a href='" . $result['file_upload'] . "' download ><b>Download</b></a></td>
					<td><a href='viewtassign.php?view_tassign=" . $assignid . "'><b>View</b></a></td>
				</tr>";
					}
			}

			else{
				$batch = $_SESSION['batch_no'];
				$query = mysql_query("SELECT * FROM assignment WHERE batch_no='$batch' ORDER BY assignid DESC") or die(mysql_error());
				
				echo "<tr>
						<td colspan='9'>
							<h3 align='center'>
								Viewing Assignments From Teacher
							</h3>
						</td>	
					</tr>";

				echo "<tr>
						<th>Teacher Name</th>
						<th>Subject</th>
						<th>Title</th>
						<th>Batch</th>
						<th>Deadline</th>
						<th>Total Marks</th>
						<th>Received Date</th>
						<th>Download</th>
						<th>Action</th>
					</tr>";

				while($result = mysql_fetch_assoc($query)){

				$assignid = $result['assignid'];
				
				echo "<tr>
						<td>" . $result['teacher'] . "</td>
						<td>" . $result['subject'] . "</td>
						<td>" . $result['title'] . "</td>
						<td>" . $result['batch_no'] . "</td>
						<td>" . $result['deadline'] . "</td>
						<td>" . $result['tot_marks'] . "</td>
						<td>" . $result['received_date'] . "</td>
						<td><a href='" . $result['file_upload'] . "' download ><b>Download</b></a></td>
						<td><a href='viewtassign.php?view_tassign=" . $assignid . "'><b>View</b></a></td>
					</tr>";
					}
			}
	?>
		</table>
	</td>

<!-- View individual Student Forms on Right Side (Body Begins) -->

<td colspan='4' align='center' valign='top'>

<?php

include ("includes/db.php");
$postid = mysql_real_escape_string(@$_GET['view_tassign']);
$query = mysql_query("SELECT * FROM assignment WHERE assignid='$postid'") or die(mysql_error());

echo "<table border='2' style='border-collapse: separate' align='center'>";

	while($result = mysql_fetch_assoc($query))
		{	
			$id = $result['assignid'];
			$title = $_SESSION['title'] = $result['title'];
			$teac = $_SESSION['teacher'] = $result['teacher'];
			$bat = $_SESSION['batch_no'] = $result['batch_no'];
			$subj = $_SESSION['subject'] = $result['subject'];
			
			echo "<tr><td colspan='3'><h4 align='center'><b>Teacher Name: " . $teac . "</b></h4></td><td colspan='1'><a href='viewtassign.php'><img src='images/cross.png' /></a></td></tr>";
			echo "<tr><td colspan='4' align='center'><b>SEMESTER NUMBER:</b>" . $result['semester'] . "<br><b>BATCH NUMBER:</b>" . $bat . "</td></tr>";
			echo "<tr><td colspan='4' align='center'><b>" . $title . "</b></td></tr>";
			echo "<tr><td colspan='4' align='justify'><b>" . $result['t_desc'] . "</b></td></tr>";
			echo "<tr><td><b>Subject Name: </b></td><td>" . $subj . "</td>"; 
			echo "<td><b>Total Marks: </b></td><td>" . $result['tot_marks'] . "</td></tr>";
			echo "<tr><td colspan='4'><b>Submit Before: </b>" . $result['deadline'] . "</td></tr>";
			echo "<tr><td colspan='4'><b>Received Date: </b>" . $result['received_date'] . "</td></tr>";
			echo "<tr><td colspan='4' align='center'><a href='#' data-toggle='modal' data-target='#sassignment' class='a_menu'>Submit Your Assignment Here</a></td></tr>";
			echo "</table>";
		}
?>
</td>
<!-- End of Body   -->

</tr>
</table>
</body>
</html>
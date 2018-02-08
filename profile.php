<?php
session_start();

if(!$_SESSION['username']){
	header('location:index.php');
	die();
}	
?>

<!DOCTYPE html>
<html>

<head><title>View Teacher's Assignment</title>
<?php include("includes/bootstrap-header.inc"); 
include("editpass.php");?>
</head>

<body link='white'>

<table border='0' width='100%' height='25%' valign='top'>

<!--Header-->
			<tr>
				<td bgcolor='green' colspan='6'>

							<table border='0' width='100%'>
								<tr>
									<td>
										<h3 style='color:white' align='left'>&emsp;
											<?php echo "Welcome, " . $_SESSION['username'] . "!"; ?>
										</h3>
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

				<div id='info_section' style='background-image: url("images/background.png");width:100%;height:100%'>
<!--Menu Bar-->
			 <div align='center'>
			          <a href='profile.php'><img src='images/my_profile.png' width='150px' /></a>&emsp;&emsp;&emsp;
           			  <a href='viewtassign.php'><img src='images/view_assignments.png' width='150px' /></a>
			  </div>
			<?php
					$name = $_SESSION['username'];  
					include('includes/db.php');
					$query = "SELECT * FROM admission_form WHERE college_no='$name'";		
					$run = mysql_query($query);
					while($result = mysql_fetch_assoc($run)) {
													
						$sid = $_SESSION['sid'] = $result['sid']; 
						$colno = $_SESSION['college_no'] = $result['college_no'];
						$batch_no = $_SESSION['batch_no'] = $result['batch_no'];
						$sname = $_SESSION['sname'] = $result['sname'];
						$fname = $result['fname'];
						$dob = $result['dob'];
						$gender = $result['gender'];	
						$p_address = $result['paddress'];
						$t_address = $result['taddress'];	
						$religion = $result['religion'];
						$time = $result['session'];
						$org_path = $result['image'];
					}
			?>
			
					<div class="table-responsive">
<br><br>
						<table border='0' class="table">
							<tbody>
								
								<tr>
									<td style='font-size:20px;font-weight:bold;text-align:center'colspan='3'>My Profile</td>
								</tr>

								<tr>	
										<td align='center'>
										<h4><b>Student Name:</b> <?php echo $sname; ?><br><br>
										<b>Father Name:</b> <?php echo $fname; ?><br><br>
										<b>Current Address:</b> <?php echo $t_address; ?><br><br>
										<b>Parmenent Address:</b> <?php echo $p_address; ?><br><br>
										<b>Registration Date:</b> <?php echo date('M-Y', strtotime($time)); ?><br>	
										</h4>	
										</td>

										<td>
											<img src='<?php echo $org_path; ?>' width='200px' height='200px'>
										</td>

										<td align='center'>
										<h4>
											<b>College No:</b> <?php echo $colno; ?><br><br>
											<b>Batch No:</b> <?php echo $batch_no; ?><br><br>
											<b>Gender:</b> <?php echo $gender; ?><br><br>
											<b>Religion:</b> <?php echo $religion; ?><br><br>
											<b>DOB:</b> <?php echo $dob; ?><br><br>	
										</h4>
										</td>
								</tr>

							</tbody>
						</table>
<br>
					</div>
				</div>
				
				<footer>
					<subtitle>
						Copyright 2016 | All Right Reserved | By Edwardes College
					</subtitle>	
				</footer>
	</body>
</html>		
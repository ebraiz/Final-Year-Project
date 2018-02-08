
<?php 

include ("includes/db.php");  
$d = mysql_real_escape_string(@$_GET['d']);

$query = ("DELETE FROM assignment WHERE assignid='$d'") or die(mysql_error());

if(mysql_query($query)){
	echo "<script>window.open('senttassign.php?del=Record has been Deleted!','_self')</script>";
	exit(0);
	}

	else{
		echo "<script>swal('Sorry, Not Deleted, Try again!')</script>";
		exit(0);
	}
?>

<?php

include ("includes/db.php");   
$d = mysql_real_escape_string(@$_GET['d']);

$query = ("DELETE FROM admission_form WHERE sid='$d'") or die(mysql_error());

if(mysql_query($query)){
	echo "<script>window.open('selected.php?del=Record has been Deleted!','_self')</script>";
	exit(0);
	}

	else{
		echo "<script>alert('Sorry, Not Deleted, Try again!')</script>";
		exit(0);
	}
?>



<?php 

include ("includes/db.php");  
$d = mysql_real_escape_string(@$_GET['del-acc']);

$query = ("DELETE FROM login WHERE id='$d'") or die(mysql_error());

if(mysql_query($query)){
	echo "<script>window.open('viewteacheraccount.php?del = Teacher Account has been Deleted!','_self')</script>";
	exit(0);
	}

	else{
		echo "<script>alert('Sorry, Not Deleted, Try again!')</script>";
		exit(0);
	}
?>
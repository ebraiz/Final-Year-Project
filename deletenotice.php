
<?php 

include ("includes/db.php");  
$d = mysql_real_escape_string(@$_GET['del-not']);

$query = ("DELETE FROM notice_board WHERE noticeID='$d'") or die(mysql_error());

if(mysql_query($query)){
	echo "<script>window.open('viewnotice.php?del=Notice has been Deleted!','_self')</script>";
	exit(0);
	}

	else{
		echo "<script>alert('Sorry, Not Deleted, Try again!')</script>";
		exit(0);
	}
?>
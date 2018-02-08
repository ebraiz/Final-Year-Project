
<tr>
	<th></th>

		<th>Merit ID</th>

			<th>Student Name</th>

				<th>Father Name</th>

					<th>Obtained Marks</th>

						<th>Qualification</th>

							<th>Batch</th>

								<th>Session</th>

									<th>Action</th>
</tr>

<form method='post'>
<?php
$postid = @$_GET['view_form'];
while($result = mysql_fetch_assoc($query)){

$SID = $result['sid'];
echo "<tr>

		<td><input type='checkbox' name='select[]' value='".$result['sid']."'></td>

		<td>" . $SID . "</td>

		<td>" . $result['sname'] . "</td>

		<td>" . $result['fname'] . "</td>

		<td>" . $result['obtained'] . "</td>

		<td>" . $result['qualification'] . "</td>

		<td>" . $result['batch_no'] . "</td>

		<td>" . date('Y', strtotime($result['session'])) . "</td>

		<td><a href='viewforms.php?view_form=" . $SID . "'><b>View</b></a></td>

		</tr>";
}
?>

<tr>
	<td colspan='9' align='center'>
		<input type='submit' name='Check' value='Admit Students' style='text-align:center;width:50%;border-radius:5px'>
	</td>
</tr>
</form>

<?php

if(!empty($_POST['Check']) && isset($_POST['select']) && !empty($_POST['select'])) {
	$in = "";
	foreach($_POST['select'] as $value) {
		$in .= $value . ",";
	}
	$in = substr($in,0,-1);

    $que = "UPDATE admission_form SET selection='Selected' WHERE sid IN ({$in})";

	if(mysql_query($que)){
		echo "<script>swal('Congratulations! Students are Admitted Successfully!')</script>";	
	}
    
    }


?>

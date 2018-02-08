<?php
include ("includes/db.php");
?>
		
		<?php 
		$notice = @$_GET['notice'];
		if (!$notice) $notice = '""';
			$query = "select * from notice_board where noticeID=$notice"; 
			$run = mysql_query($query);
			while($row = mysql_fetch_assoc($run)){
			$title = $row['title'];
			$desc = $row['description'];
			$org_path = $row['image'];
			
			
			echo "<tr><th style='text-align:center;'>"; echo $title; echo "</th></tr>";
			echo "<tr><td></td></tr>";
			echo "<tr><td style='text-align:center;'>"; echo "<img src='$org_path' height='150px' width='250px' />"; echo "</td></tr>";
			echo "<tr><td></td></tr>";
			echo "<tr><td>"; echo $desc; echo "</td></tr>";
		}
		
			
		?>
		
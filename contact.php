<html><body>

<form data-toggle="validator" class="form-horizontal" method="POST" action="index.php#section5">

<div class="form-group">
<heading>Feel Free To Contact Us</heading>
</div>

<div class="form-group">
	<div class="col-sm-10" style="padding-left:0px;padding-right:0px;">
	<subtitle>Your Email:</subtitle>
		<input type="email" class="form-control input-sm" name="from" maxlength="40" data-minlength="5" data-error="Invalid Email" placeholder="edwardes@gmail.com" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
	<div class="col-sm-10" style="padding-left:0px;padding-right:0px;">
	<subtitle>Subject:</subtitle>
		<input type="text" class="form-control input-sm" name="subject" maxlength="30" data-minlength="5" data-error="Invalid Subject" placeholder="Computer Science" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
	<div class="col-sm-10" style="padding-left:0px;padding-right:0px;">
	<subtitle>Message:</subtitle>
		<textarea class="form-control" rows="10" name="message" maxlength="1000" data-minlength="5" data-error="Incomplete Message" required></textarea>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
<button type="submit" name="send" class="btn btn-danger btn-sm" style="width:84%;"><subtitle>Click To Send</subtitle></button>
</div>

</form>

</body></html>
<?php
if(isset($_POST['send'])){

$from = $_POST['from'];	
$subject = $_POST['subject'];
$message = $_POST['message'];

mail('cricchamber@gmail.com',$subject,$message,"From:".$from);

echo "<script>swal('Congratulations! Your Message has been send Successfully!')</script>";	
}

?>
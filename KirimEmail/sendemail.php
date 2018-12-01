<!DOCTYPE html>
<html>
<head>
<title>Coba Kirim Email</title>
<link rel="stylesheet" type="text/css" href="../../bootstrap-3.3.7-dist/css/bootstrap.css">
</head>

<body>
<div class="container">
<h2>Kirim Email</h2><hr>
    <form>
    <div class="row col-lg-6">
	    Email penerima <input type="email" name="to" class="form-control" required>
	    Subject <input type="text" name="subject" class="form-control" required>
	    Pesan <textarea name="message" class="form-control" required rows="6"></textarea><br>
        <div class="col col-sm-3">
		    <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
		</div>
        <div class="col col-sm-3">
        	<input type="reset" class="form-control">
		</div>
    </div>
    </form>
</div>
</body>
</html>
<?php
include "sendEmail-v156.php";
if(isset($_REQUEST['submit'])){
	$to       = $_REQUEST['to'];
	$subject  = $_REQUEST['subject'];
	$message  = $_REQUEST['message'];
	 
	// user dan password gmail
	$sender   = 'moneymanagerdev@gmail.com';
	$password = 'moneymanager321';
	 
	if(email_localhost($to, $subject, $message, $sender, $password))
		echo "Email sent";
	else
		echo "Email sending failed";
}
//sumber http://latcoding.com/2015/08/17/cara-mengirim-email-dari-localhost-melalui-xampp-2015/
?>
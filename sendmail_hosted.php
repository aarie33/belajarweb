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
$to = $_REQUEST['to'];
$subject = $_REQUEST['subject'];

$message = $_REQUEST['message'];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <moneymanagerdev@gmail.com>' . "\r\n";
$headers .= 'Cc: moneymanagerdev@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
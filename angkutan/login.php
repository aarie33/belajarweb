<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat Datang</title>
<style type="text/css">
table{
	margin-top:15%;
}
#head{
	color:#09F;
	font-size:70px;
	font-weight:bold;
}
#head a{
	font-size:24px;
}
</style>
</head>
<body>
<center>
<form>
<table>
<tr><td colspan="5" align="center" id="head">Angkutan Massal<a>.com</a></td></tr>
<tr><td>username</td><td><input type="text" name="user" /></td><td>password</td><td><input type="password" name="pass" /></td><td><input type="submit" name="Masuk" /></td></tr>
</table>
</form>
<?php
if($_REQUEST[user]<>"admin"||$_REQUEST[pass]<>"admin"){
	/*echo "<script> alert(\"Username atau Password tidak tersedia!\");</script>";*/
}else{
	echo "<script> document.location='index.php';</script>";
	$_SESSION[user]=$_REQUEST[user];
}
?>
</center>
</body>
</html>
<?php session_start(); 
if($_SESSION[jenis]=="Ekonomi"){
	$_SESSION[tarif]=50000;
}else if($_SESSION[jenis]=="Bisnis"){
	$_SESSION[tarif]=100000;
}else{
	$_SESSION[tarif]=150000;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form method="post" action="bayar[proses].php">
Tiket Penumpang
<table>
<tr><td>No Tiket</td><td><?php echo time();?></td></tr>
<tr><td>Nama Calon Penumpang</td><td><?php echo $_SESSION[nama];?></td></tr>
<tr><td>Tujuan</td><td><?php echo $_SESSION[tujuan];?></td></tr>
<tr><td>Jenis</td><td><?php echo $_SESSION[jenis];?></td></tr>
<tr><td>Tarif</td><td><?php echo $_SESSION[tarif];?></td></tr>
<tr><td>Bayar</td><td><input type="text" name="bayar" /></td></tr>
<tr><td><a href="tiket.php"><input type="button" value="Kembali" /></a></td><td align="right"><input type="submit" value="Bayar"/></td></tr>
</table>
</form>
</center>
<?php $_SESSION[no]=time(); ?>
</body>
</html>
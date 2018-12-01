<?php session_start();
$_SESSION[bayar]=$_REQUEST[bayar];
$uang=$_SESSION[bayar]-$_SESSION[tarif];
?>
<html>
<head>
<title>Bayar</title>
</head>
<body>
<center>
<?php
if($_SESSION[bayar] < $_SESSION[tarif]){
	echo "<script> alert(\"Uang Anda Kurang!\");
	document.location='tampil_tiket.php';</script>";
}else{
	echo "Kembali <br>".$uang;
}
?><br>
<a href="print.php"><input type="submit" value="Cetak Tiket"></a>
</center>
</body>
</html>
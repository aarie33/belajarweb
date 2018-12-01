<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lingkaran</title>
</head>

<body>
Menghitung Luas Lingkaran
<form>
phi:22/7<br />
<br />
<input type="text" name="jari" />
<input type="submit" value="Hitung"/>
<br />
<br />
</form>

<?php
if ($_REQUEST["jari"]<> "")
{
	echo "Rumus hitung luas lingkaran=phi x r x r <p>";
	$Hasil=(22/7)*$_REQUEST["jari"]*$_REQUEST["jari"];
	echo "Luas lingkaran tersebut adalah = ".$Hasil;
}

else
{
	echo "Masukkan Jari-jari terlebih dahulu !!";
}
?>

</body>
</html>
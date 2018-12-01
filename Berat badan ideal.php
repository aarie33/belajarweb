<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Berat Badan Ideal</title>
</head>

<body>
<center><h2>Hitung Berat Badan Ideal Anda</h2><br>

<form>
Nama Anda <input type="text" name="nama"><br>
Tinggi Badan Anda <input type="text" name="TB"><br>
Berat Badan Anda Sekarang <input type="text" name="BB"><br>
<input type="submit" value="Hitung">
</form>

<?php
$ideal=($_REQUEST["TB"]-100)*90/100;
echo "<h3>Berat Badan Ideal ".$_REQUEST["nama"]." Adalah : ".$ideal."<br />";

if ($_REQUEST["BB"]>$ideal+$ideal*20/100)
{
	echo "Anda Obesitas !!";
}
elseif ($_REQUEST["BB"]<$ideal-$ideal*20/100)
{
	echo "Anda Kekurusan !!";
}
else
{
	echo "Anda Ideal !!";
}
?>
</center>
</body>
</html>
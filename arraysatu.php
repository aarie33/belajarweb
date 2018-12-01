<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array satu form</title>
</head>

<body>
<center>
<h1>BELAJAR ARRAY COY</h1>
<form>
1. Berapa makanan favoritmu ??<br />
<input type="text" name="angka" />
<input type="submit" value="Hitung" /><br />

<?php
for($i=1;$i<=$_REQUEST["angka"];$i++)
{
	echo $i."<input type=text name=makanan$i> <br />";
}
if ($_REQUEST["angka"]<>"")
{
echo "<input type=submit value=Tampil />";
}
?>

<?php
for($i=1;$i<=$_REQUEST["angka"];$i++)
{
	echo $i.". ".$_REQUEST["makanan$i"]."<br />";
}
?>
</form>
</center>
</body>
</html>
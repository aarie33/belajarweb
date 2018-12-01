<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#FFCC33">
<center>
<h1>BELAJAR ARRAY COY</h1>
<form>
<input type="text" name="angka" />
<input type="submit" value="Hitung" /><br />

<?php
for($i=1;$i<=10;$i++)
{
	$hasil=$i+$_REQUEST["angka"]*3;
	echo $hasil."<br>";
}
?>
</form>
</center>
</body>
</html>
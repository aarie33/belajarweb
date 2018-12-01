<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Angsuran Beli
<form><center>
Harga<input type="text" name ="harga"  /><br />
Gaji<input type="text" name  ="gaji"  /><br />
Lama<input type="text" name  ="lama"  /><br />
Bunga<input type="text" name  ="bunga"  /><br />
<input type="submit"  />
</center>
<?php
if ($_REQUEST["harga"]<=$_REQUEST["gaji"]*30/100)
{
	echo "Status : Disetujui"."<br />";
}
else
{
	echo "Status : Tidak Disetujui"."<br />";
}
$DP=30/100*$_REQUEST["harga"];
echo "DP :".$DP;
$angsuran=$_REQUEST["harga"]-$DP
?>
</form>
</body>
</html>
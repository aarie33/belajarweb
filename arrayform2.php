<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array PHP</title>
</head>

<body>
<center>
Masukkan angka!!!<br />
<form method="post" action="arrayform3.php">
<input type="hidden" name="ss" value="<?php echo $_REQUEST[angka]?>" />
<?php
for($i=1;$i<=$_REQUEST["angka"];$i++)
{
	echo $i."<input type=text name=makanan$i> <br />";
}
?>
<input type="submit" value="Tampil" />
</form>
</center>
</body>
</html>
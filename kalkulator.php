<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<input type="text" name="x" />
<select name="tanda">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="bagi">/</option>
<option value="kali">*</option></select>
<input type="text" name="y"/>
<input type="submit" value="=" />
</form>
<?php echo "<center>";
$a=$_REQUEST["x"];
$b=$_REQUEST["y"];
if ($_REQUEST["tanda"]=="tambah")
{
	$hasil=$a+$b;
	echo "hasil :".$hasil;
}
else if($_REQUEST["tanda"]=="kurang")
{
	$hasil=$a-$b;
	echo "hasil :".$hasil;
}
else if($_REQUEST["tanda"]=="bagi")
{
	$hasil=$a/$b;
	echo "hasil :".$hasil;
}
else if($_REQUEST["tanda"]=="kali");
{
	$hasil=$a*$b;
	echo "hasil :".$hasil;
}


?>
</body>
</html>
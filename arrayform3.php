<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array PHP</title>
</head>

<body>
<center>
<form method="post" action="arrayform.php">
<?php
for($i=1;$i<=$_REQUEST["ss"];$i++)
{
	/*echo $i.". ".$_REQUEST["makanan$i"]."<br />";*/
	echo $_REQUEST["makanan$i"];
	$hasil=$_REQUEST["makanan$i"]+$hasil;

	/*if($_REQUEST["makanan$i"]<>"")
	{
	}
	else
	{
		$_REQUEST["makanan$i"]=0;
	}*/

	if ($i<$_REQUEST["ss"])
	{
		echo "+";
	}
}
echo "=".$hasil
?>
<br />
<br />
<input type="submit" value="Kembali" />
</form>
</center>
</body>
</html>
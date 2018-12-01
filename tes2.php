<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
Tampilkan Hasil Ke ??<br />
<input type="text" name="bil1" /><br />
<input type="submit"  /><br />
<?php

$hasil=1;
for($i=1;$i<=$_REQUEST["bil1"];$i++)
{
	$hasil=$hasil*2;
	
}
echo $hasil;
?>
</form>
</body>
</html>
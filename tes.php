<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<input type="text" name="banyak" /><br />
<input type="submit" value="Ma'af" /><br />
<?php
for($i=1;$i<=$_REQUEST["banyak"];$i++)
{
	echo "Ma'afkan Kesalahan Saya! <br>";
}
?>
</form>
</body>
</html>
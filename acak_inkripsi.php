<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acak Incripsi</title>
</head>

<body>
<form>
<input type="text" name="acak" />
<input type="submit" value="Acak" /><br />

<?php
echo "Inputan : ".$_REQUEST["acak"]."<br />";
echo "Hasil acak : ".md5($_REQUEST["acak"]);
?>
</form>
</body>
</html>
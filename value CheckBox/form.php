<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="tampil.php">
<?php
for($i=1;$i<=3;$i++){ ?>
	<input type="checkbox" name="coba<?php echo $i;?>" value="<?php echo $i;?>000" /> <?php echo $i;?>000<br />
<?php
} ?>
<input type="submit" />
</form>
</body>
</html>
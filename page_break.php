<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.halaman{
    page-break-after: always;
    page-break-inside: avoid;
}
</style>
</head>

<body>
<?php
for($i=1;$i<=5;$i++){ ?>
<div class="halaman">Halaman <?php echo $i;?></div>
<?php } ?>
</body>
</html>

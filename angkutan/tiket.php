<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form method="post" action="tampil[proses].php">
<h2>Pendaftaran Calon Penumpang</h2>
<table>
<tr><td>Nama Calon Penumpang</td><td><input type="text" name="nama" /></td></tr>
<tr><td>Tujuan</td><td><input type="text" name="tujuan" /></td></tr>
<tr><td>Jenis</td><td><select name="jenis"><option>Ekonomi</option><option>Bisnis</option><option>Eksekutif</option></select></td></tr>
<tr><td colspan="2" align="right"><input type="submit" value="Daftar" /></td></tr>
</table>
</form>
</center>
</body>
</html>
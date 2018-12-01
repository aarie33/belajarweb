<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiket Penumpang Angkutan Massal</title>
</head>

<body>
<center>
<form>
<fieldset>
<center><h2>TIKET ANGKUTAN</h2></center>
<table width="100%">
<tr><td></td><td></td></tr>
<tr><td colspan="2" align="right">Kencong,<?php echo date('d M Y');?></td></tr>
<tr><td>No Tiket</td><td><?php echo $_SESSION[no];?></td></tr>
<tr><td>Nama Calon Penumpang</td><td><?php echo $_SESSION[nama];?></td></tr>
<tr><td>Tujuan</td><td><?php echo $_SESSION[tujuan];?></td></tr>
<tr><td>Jenis</td><td><?php echo $_SESSION[jenis];?></td></tr>
<tr><td></td><td></td></tr>
<tr><td colspan="2" align="right">Petugas</td></tr>
</table>
</fieldset>
</form>
</center>
<script>
window.print();
</script>
</body>
</html>
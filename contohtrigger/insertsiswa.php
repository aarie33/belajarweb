<?php include "koneksi.php"; ?>
<html>
<head>
<title>Insert Data Siswa</title>
</head>

<body>
<center>
<form method="post" action="insert[proses].php">
<h4>Masukkan Data Barang</h4>
<table>
<tr><td>NIS</td>
<td><input type="text" name="nis"/></td></tr>
<tr><td>Nama Siswa</td>
<td><input type="text" name="nama"/></td></tr>
<tr><td>Kelas</td>
<td><input type="text" name="kelas"/></td></tr>
</table><br>
<input type="submit" value="Insert" />
</form>
</center>
</body>
</html>
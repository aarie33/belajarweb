<?php session_start(); ?>
<html>
<head>
<title>Update</title>
<link href="style_umum.css" rel="stylesheet" type="text/css">
</head>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
$data=mysql_query("select*from data_orang where nama='$_REQUEST[nm]'");
$isi=mysql_fetch_array($data);
?>
<body>
<form method="post" action="update[proses].php">
<table>
<tr bgcolor="#CCCC00"><td colspan="2">Update Data</td></tr>
<tr><td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $isi[0]; ?> /></td></tr>
<tr><td>Tempat Lahir</td>
<td><input type="text" name="tempat" value=<?php echo $isi[1]; ?> /></td></tr>
<tr><td>Tanggal Lahir</td>
<td><input type="text" name="tanggal" value=<?php echo $isi[2]; ?> /></td></tr>
<tr><td>Jenis Kelamin</td>
<td><input type="text" name="jkel" value=<?php echo $isi[3]; ?>></td></tr>
<tr><td>Alamat</td>
<td><input type="text" name="alamat" value=<?php echo $isi[4]; ?>></td></tr>
</table>
<a href="update_delete.php"><input type="button" value="Back"></a>
<a href="update[proses].php"><input type="submit" value="Update" /></a>
</form>

</body>
</html>
<?php session_start(); ?>
<html>
<head>
<title>Delete</title>
<link href="style_umum.css" rel="stylesheet" type="text/css">
</head>
<?php
$_SESSION["nm"]=$_REQUEST["nm"];
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
$data=mysql_query("select*from data_orang where nama='$_SESSION[nm]'");
$isi=mysql_fetch_array($data);
?>
<body>
<form method="post" action="delete[proses].php">
Apakah Anda yakin akan menghapus data ini ?<br />
<table>
<tr><td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $isi[0]; ?>  disabled/></td></tr>
<tr><td>Tempat Lahir</td>
<td><input type="text" name="tempat" value=<?php echo $isi[1]; ?> disabled/></td></tr>
<tr><td>Tanggal Lahir</td>
<td><input type="text" name="tanggal" value=<?php echo $isi[2]; ?> disabled/></td></tr>
<tr><td>Jenis Kelamin</td>
<td><input type="text" name="jkel" value=<?php echo $isi[3]; ?> disabled/></td></tr>
<tr><td>Alamat</td>
<td><input type="text" name="alamat" value=<?php echo $isi[4]; ?> disabled/></td></tr>
</table>
<a href="update_delete.php"><input type="submit" value="Back" ></a>
<a href="update_delete[proses].php"><input type="submit" value="Delete" /></a>
</form>
</body>
</html>
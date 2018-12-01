<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Ekstra Kurikuler</title>
</head>

<body>
<!--<form method="post" action="ekskul_utama.php">
<input type="submit" value="Home" />
</form>-->
<center>
<h3>Data Ekstra Kurikuler</h3>
<form>
<table>
<tr>
	<td>Kode</td>
    <td><input type="text" name="kode" /></td>
</tr>
<tr>
    <td>Nama Ekskul</td>
    <td><input type="text" name="nm_ekskul" /></td>
</tr>
<tr>
	<td>Pelatih</td>
    <td><input type="text" name="pelatih" /></td>
</tr>
</table>

<br /><input type="submit" value="Simpan" />

<?php
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");

if($_REQUEST["kode"]<>""||$_REQUEST["nm_ekskul"]<>""||$_REQUEST["pelatih"]<>"")
{
	mysql_query("insert into ekskul values('$_REQUEST[kode]','$_REQUEST[nm_ekskul]','$_REQUEST[pelatih]')");
	echo "<br />Penyimpanan Data BERHASIL!";
}
else
{
	echo "<br />Penyimpanan Data GAGAL!";
}
?>
<br /><br /><br />

<table border="1">
<tr><strong>
	<td>No.</td>
    <td>Kode</td>
    <td>Nama Ekskul</td>
    <td>Pelatih</td>
    </strong>
</tr>
<?php
$data=mysql_query("select*from ekskul");
$i=1;
while($isi=mysql_fetch_array($data))
{
?>
<tr>
	<td><?php echo $i++;?></td>
    <td><?php echo $isi[0];?></td>
    <td><?php echo $isi[1];?></td>
    <td><?php echo $isi[2];?></td>
</tr>
<?php } ?>
</table>
</form>
</center>
</body>
</html>
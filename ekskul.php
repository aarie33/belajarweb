<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Siswa</title>
</head>

<body>
<!--<form method="post" action="ekskul_utama.php">
<input type="submit" value="Home" />
</form>-->

<center>
<h3>Data Siswa</h3>
<form>
<table>
<tr>
	<td>NIM</td>
    <td><input type="text" name="nim" /></td>
</tr>
<tr>
	<td>Nama</td>
    <td><input type="text" name="nama" /></td>
</tr>
<tr>
	<td>Kelas</td>
    <td><select name="kelas">
    <option></option>
    <option>X</option>
    <option>XI</option>
    <option>XII</option>
    </select></td>
</tr>
<tr>
	<td>Alamat</td>
    <td><input type="text" name="alamat" /></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
    <td><input type="radio" name="jkel" value="Laki-laki" />Laki-laki
    <br /><input type="radio" name="jkel" value="Perempuan" />Perempuan		</td>
</tr>
</table>


<input type="submit" value="Cari Siswa" />
<?php 
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");

$cari=mysql_query("select*from siswa where NIS='$_REQUEST[nim]'");
$tamcari=mysql_fetch_array($cari);
if (mysql_num_rows($cari)<>0)
{
	echo $tamcari['nama']."<br>";
	echo $tamcari['kelas']."<br>";
	echo $tamcari['alamat']."<br>";
	echo $tamcari['jkel'];
}
else
{
	echo "<br>Data siswa yang Anda cari tidak tersedia!";
}
?>

<input type="submit" value="Simpan" /><br />
<?php
if($_REQUEST["nim"]<>""||$_REQUEST["nama"]<>""||$_REQUEST["kelas"]<>""||$_REQUEST["alamat"]<>""||$_REQUEST["jkel"]<>"")
{
	mysql_query("insert into siswa values('$_REQUEST[nim]','$_REQUEST[nama]','$_REQUEST[kelas]','$_REQUEST[alamat]','$_REQUEST[jkel]')");
	echo "<br />Penyimpanan Data BERHASIL!";
}
else
{
	echo "<br />Penyimpanan Data GAGAL!";
}
?>

<table border="1">
<tr><strong>
	<td>No.</td>
    <td>NIS</td>
    <td>Nama</td>
    <td>Kelas</td>
    <td>Alamat</td>
    <td>Jenis Kelamin</td>
    </strong>
</tr>
<?php
$data=mysql_query("select*from siswa");
$i=1;
while($isi=mysql_fetch_array($data))
{
?>
<tr>
	<td><?php echo $i++;?></td>
    <td><?php echo $isi[0];?></td>
    <td><?php echo $isi[1];?></td>
    <td><?php echo $isi[2];?></td>
    <td><?php echo $isi[3];?></td>
    <td><?php echo $isi[4];?></td>
</tr>
<?php } ?>
</table>
</form>
</center>
</body>
</html>
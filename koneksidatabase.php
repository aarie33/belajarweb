<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Teman</title>
</head>

<body>
<center>
<h1>Koneksi PHP dengan Database MySQL</h1>
Tempat mengisikan data teman-temanku :
<form>
<table>
<tr>
	<td>
	Nama 
    </td>
    <td>
    <input type="text" name="nama" />
    </td>
</tr>
<tr>
	<td>
    Alamat 
    </td>
    <td>
    <input type="text" name="alamat" />
    </td>
</tr>
<tr>
	<td>
    Kelas
    </td>
    <td>
    <input type="text" name="kelas" />
    </td>
</tr>
</table>

<input type="submit" value="Simpan" />

<?php
mysql_connect("localhost","root","");
mysql_select_db("konekcoba");

if($_REQUEST["nama"]<>""||$_REQUEST["alamat"]<>""||$_REQUEST["kelas"]<>"")
{
	mysql_query("insert into teman values('$_REQUEST[nama]','$_REQUEST[alamat]','$_REQUEST[kelas]')");
	echo "<br />Penyimpanan Data BERHASIL!";
}
else
{
	echo "<br />Penyimpanan Data GAGAL!";
}

/*$nyambung=mysql_connect("localhost","root","");
if ($nyambung)
{
	echo "Database berhasil disambungkan";
}
else
{
	echo "Database gagal disambungkan";
}*/
?>

<h2>Data Teman</h2>
<table border="1">
<tr><strong>
	<td>No.</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Kelas</td>
    </strong>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("konekcoba");

$data=mysql_query("select*from teman");
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
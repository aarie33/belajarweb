<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail Data</title>
<link href="style_umum.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h3>Data Siswa</h3>
<form>
<table>
<tr bgcolor="#33CCFF">
	<td>No</td>
    <td>Nis</td>
    <td>Nama</td>
    <td>Kelas</td>
    <td>Alamat</td>
    <td>Jkel</td>
    <td>Detail</td>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");
$data=mysql_query("select*from siswa");
$i=1;
while($isi=mysql_fetch_array($data))
{?>
<tr bgcolor="#CCCCCC">
	<td><?php echo $i++; ?></td>
    <td><?php echo $isi[0]; ?></td>
    <td><?php echo $isi[1]; ?></td>
    <td><?php echo $isi[2]; ?></td>
    <td><?php echo $isi[3]; ?></td>
    <td><?php echo $isi[4]; ?></td>
    <td><a href="detail_hasil.php?NIS=<?php echo $isi[0]; ?>" target="isiframe"">Detail</a></td>
</tr>
<?php } ?>
</table>
</form>
<br /><iframe name="isiframe" width="25%"/>
</body>
</html>
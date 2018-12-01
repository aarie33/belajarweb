<html>
<head>
<title>Data siswa</title>
</head>

<body>
<center>
<form>
<h3>Data Siswa</h3>
<table>
<tr bgcolor="#0099FF">
	<td><center>No.</center></td>
    <td><center>NIS</center></td>
    <td><center>Nama Siswa</center></td>
    <td><center>Kelas</center></td>
    <td colspan="2"><center>Action</center></td>
</tr>
<?php
include "koneksi.php";
$data=mysql_query("select*from siswa");
$i=1;
while($isi=mysql_fetch_array($data))
{ 
?>
<tr bgcolor="#CCFFFF">
	<td><? echo $i++; ?></td>
    <td><? echo $isi[0]; ?></td>
    <td><? echo $isi[1]; ?></td>
    <td><? echo $isi[2]; ?></td>
    <td><a href="update_barang.php?kd=<?php echo $isi[0]; ?>"><font color="#0033FF">Update</font></a></td>
    <td><a href="delete_barang.php?kd=<?php echo $isi[0]; ?>"><font color="#FF0000">Delete</font></a></td>
</tr>
<?php  } ?>
<tr>
	<td colspan="4"></td>
    <td colspan="2" bgcolor="#0099FF"><center></strong><a href="insertsiswa.php"><font color="#FFFF00">Insert</font></a></center></td>
</tr>
</table>
</form>
</center>
</body>
</html>
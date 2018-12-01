<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tampil Database</title>
</head>

<body>
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
</body>
</html>

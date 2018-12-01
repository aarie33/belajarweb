<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
alert("Berhasil . . . . !);
</script>

<title>Orang Darah Biru</title>
</head>

<body>
<center>
<h2>Data Orang Penting</h2>

<form>
<table>
<tr>
	<td>Masukkan Nama</td>
    <td><input type="text" name="nama" /></td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
    <td><select name="tanggal">
    <?php for($i=1;$i<=31;$i++)
    {?>
    <option><?php echo $i;?></option>
    <?php } ?>
    </select>

    <select name="bulan">
    <?php for($i=1;$i<=12;$i++)
    {?>
    <option><?php echo $i;?></option>
    <?php } ?>
    </select>
	
    <select name="tahun">
    <?php for($i=2014;$i>=1945;$i--)
    {?>
    <option><?php echo $i;?></option>
    <?php } ?>
    </select>
    </td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
    <td><input type="radio" name="jkel" value="Laki-laki" />Laki-laki<br />
	<input type="radio" name="jkel" value="Perempuan" />Perempuan
    </td>
</tr>
<tr>
	<td>Agama</td>
    <td><select name="agama">
    <option></option>
    <option>Islam</option>
    <option>Kristen</option>
    <option>Katholik</option>
    <option>Hindu</option>
    <option>Budha</option>
    <option>Konghuchu</option></select>
    </td>
</tr>
<tr>
	<td>Alamat</td>
    <td><textarea name="alamat" cols="" rows=""></textarea></td>
</tr>
</table>

<br /><input type="submit" name="Simpan" />
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
$tgl=$_REQUEST["tanggal"]."-".$_REQUEST["bulan"]."-".$_REQUEST["tahun"];

if ($_REQUEST["nama"]<>""||$_REQUEST["jkel"]<>""||$_REQUEST["agama"]<>""||$_REQUEST["alamat"]<>"")
{
mysql_query("insert into data_orang values('$_REQUEST[nama]','$tgl','$_REQUEST[jkel]','$_REQUEST[agama]','$_REQUEST[alamat]')");
}
?>

<br />
<br />
<table>
<tr>
	<td><?php echo "Nama" ?></td>
    <td><?php echo $_REQUEST["nama"] ?></td>
</tr>
<tr>
    <td><?php echo "Tanggal Lahir" ?></td>
    <td><?php echo $tgl ?></td>
</tr>
<tr>
    <td><?php echo "Jenis Kelamin" ?></td>
    <td><?php echo $_REQUEST["jkel"] ?></td>
</tr>
    <td><?php echo "Agama" ?></td>
    <td><?php echo $_REQUEST["agama"] ?></td>
<tr>
    <td><?php echo "Alamat" ?> </td>
    <td><?php echo $_REQUEST["alamat"] ?></td>
</tr>
</table>
</form>

<br />
<br />
<br />

<table border="1" bordercolor="#FFFF33">
<tr>
	<td>No</td>
    <td>Nama</td>
    <td>Tanggal Lahir</td>
    <td>Jenis Kelamin</td>
    <td>Agama</td>
    <td>Alamat</td>
</tr>
<?php 
$data=mysql_query("select*from data_orang");
$x=1;
while ($isi=mysql_fetch_array($data))
{
?>
<tr>
	<td><?php echo $x++;?></td>
    <td><?php echo $isi[0];?></td>
    <td><?php echo $isi[1];?></td>
    <td><?php echo $isi[2];?></td>
    <td><?php echo $isi[3];?></td>
    <td><?php echo $isi[4];?></td>
</tr>
<?php } ?>
</table>
</center>
</body>
</html>
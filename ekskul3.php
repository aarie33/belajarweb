<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pilih Ekstra Kurikuler</title>
</head>
<link href="sessionstyle.css" rel="stylesheet" type="text/css" />

<body>
<a href="session.php">Logout</a>
<!--<form method="post" action="ekskul_utama.php">
<input type="submit" value="Home" />
</form>-->
<center>
<h3>Pilih Ekstra Kurikuler Yang Akan Diikuti</h3>
<form>
<table>
<!--<tr>
	<td>Masukkan NIS</td>
    <td><input type="text" name="nis" /></td>
</tr>-->
<tr>
	<td>Pilih Ekskul</td>
    <td>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");

echo "<select name=ekskul>";
    $myquery="select nama_ekskul from ekskul";
    $daftar_eks=mysql_query($myquery) or die (mysql_error());
	echo "<option></option>";
    while($dataku=mysql_fetch_object($daftar_eks))
    {
        //perulangan menampilkan data
        echo "<option value=\"$dataku->nama_ekskul\">$dataku->nama_ekskul</option>";
    }
    echo "</select>";
?>
	</td>
</tr>
</table><br />

<input type="submit" value="Simpan" />
<?php
$nis=mysql_query("select*from siswa where NIS='$_SESSION[sandi]'");
$kod=mysql_query("select*from ekskul where nama_ekskul='$_REQUEST[ekskul]'");
$isikod=mysql_fetch_array($kod);
$isinis=mysql_fetch_array($nis);
$cek=mysql_query("select*from ikut where NIS='$isinis[NIS]' and kode='$isikod[kode]'");
$isicek=mysql_num_rows($cek);

if($_REQUEST["ekskul"]<>"")
{
	if($isicek==0)
	{
		mysql_query("insert into ikut values('$isinis[NIS]','$isikod[kode]')");
		mysql_query("insert into hasil values('$isinis[nama]','$isinis[kelas]','$isikod[nama_ekskul]')");
		echo "<br>Berhasil Simpan!";
	}
	else
	{
		echo "<br>Siswa dengan Nama <strong>".$_SESSION["nm"]."</strong> telah terdaftar kedalam Ekskul <strong>".$_REQUEST["ekskul"]."</strong>";
		echo "<br/>Penyimpanan ditolak!";
	}
}
else
{
	echo "<br>Harap isi semua field!";
}
?>
</form>

<?php /*?><!--<table border="1">
<tr>
	<td>No.</td>
    
<?php $baris=mysql_query("select*from ekskul");
$x=1;
while($jlh=mysql_fetch_array($baris))
{
echo "<td>".$jlh[$x]."</td>";
$tbl_isi=mysql_query("select*from hasil where nama_ekskul='$jlh[$x]'");
$tmpl_data=mysql_num_rows($tbl_isi);
echo ",".$tmpl_data[$x];
} 
?>
</tr>
<tr>
<?php 
?>
</tr>
</table>--><?php */?>


</center>
</body>
</html>
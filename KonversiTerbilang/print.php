<?
session_start()
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?
mysql_connect("localhost","root","");
mysql_select_db("psg");
$data=mysql_query("select * from siswa where nis='$_SESSION[nis]'");
$isi=mysql_fetch_array($data);
?>
<table width="927" height="403" border="0">
  <tr>
    <td height="70" colspan="4" align="center">
    <h1>KWITANSI PEMBAYARAN PSG DAN BLKI </h1>
    </td>
  </tr>
  <tr>
    <td width="170">No Kwitansi</td>
    <td width="377"><? echo $_SESSION[nokwitansi]; ?></td>
    <td width="314" align="center">KENCONG,<? echo date("d/m/y");?></td>
  </tr>
  <tr>
    <td>Di Terima Oleh</td>
    <td><? echo $isi[1];?></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Kelas</td>
    <td><? echo $_SESSION["kelas"];?></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Kategori</td>
    <td><? echo $_SESSION["kategori"];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pilih Bayar</td>
    <td><? echo $_SESSION["pilih"];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nominal</td>
    <td>
    <?php
require "classConversi.php";
	//membuat objek
$oConver = new classConversi();
$data = $_SESSION["jumlah"];
//memberikan titik angka
$titik = number_format($data, 0, '','.');
$cAngka = $oConver->conversiAngka($data);
$b = ucfirst(strtolower($cAngka));
echo $b;
?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bayar</td>
    <td><? echo $_SESSION["bayar"];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kembali</td>
    <td><? echo $_SESSION["kembali"];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td align="center">( <? echo  $_SESSION["user"]; ?> ) </td>
  </tr>
  
</table>

<script type="text/javascript">
window.print();
window.location='pembayaran.php';
</script>
</body>
</html>
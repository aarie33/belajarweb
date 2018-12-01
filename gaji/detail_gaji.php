<?php session_start();
//$_SESSION[nip]=$_REQUEST[nip];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gaji Pegawai</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include "koneksi.php"; include "index.php"; 
$peg=mysql_query("select*from pegawai where nip='$_REQUEST[nip]'");
$isi=mysql_fetch_array($peg);
$data=mysql_query("select golongan.ruang,golongan.golongan,golongan.gaji_pokok,pegawai.status from pegawai inner join golongan on pegawai.kd_ruang=golongan.kd_ruang where nip='$_REQUEST[nip]'");
$isi_gaji=mysql_fetch_array($data);
if($isi[3]=="Menikah"){
$tun_kel=$isi_gaji[2]*15/100;
}else{$tun_kel=0;}
if($isi[4]>=2){
	$tun_anak=1200000;
}else if($isi[4] > 0 &&$isi[4] < 2){
	$tun_anak=600000;
}else{$tun_anak=0;}
$gaji_pegawai=$isi_gaji[2]+$tun_kel+$tun_anak;
?>
<center>
<div id="judul">Detail Gaji Pegawai</div>
<table width="300">
<tr><td align="left">NIP</td><td>:</td><td align="right"><?php echo $isi[0];?></td></tr>
<tr><td align="left">Nama Pegawai</td><td>:</td><td align="right"><?php echo $isi[1];?></td></tr>
<tr><td align="left">Ruang</td><td>:</td><td align="right"><?php echo $isi_gaji[0];?></td></tr>
<tr><td align="left">Golongan</td><td>:</td><td align="right"><?php echo $isi_gaji[1];?></td></tr>
<tr><td align="left">Gapok</td><td>:</td><td align="right"><i><?php echo $isi_gaji[2];?></i></td></tr>
<tr><td align="left">Status</td><td>:</td><td align="right"><?php echo $isi[3];?></td></tr>
<tr><td align="left">Tunjangan Keluarga</td><td>:</td><td align="right"><i><?php echo $tun_kel;?></i></td></tr>
<tr><td align="left">Jumlah Anak</td><td>:</td><td align="right"><?php echo $isi[4];?></td></tr>
<tr><td align="left">Tunjangan Anak</td><td>:</td><td align="right"><i><?php echo $tun_anak;?></i></td></tr>
<tr><td align="left">Gaji Pegawai</td><td>:</td><td align="right"><i><?php echo $gaji_pegawai;?></i></td></tr>
</table>
</center>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pembagian Kelompok xii_rpl</title>
<script>
function fokus(){ document.getElementById("acak").focus();}
function cek(input){ 
if(input.acak.value==""){alert("Isikan Nama dengan benar!");return false;}
}
</script>
<style type="text/css">
body{font-family:"Times New Roman", Times, serif;}
</style>
</head>

<body onload="fokus()"><center>
<font color="#0066FF"><h2>Pembagian Kelompok Tugas</h2></font>
<font color="#FF0000"><h3>Acak Aja Klo Brani...!!!</h3></font>
<form name="input" onsubmit="return cek(this)">
Masukkan Nama Lengkap <input type="text" name="acak" id="acak" /><input type="submit" value="Random" />
</form><br /><br />
<b>Daftar Kelompok</b>
<table cellpadding="2" cellspacing="1">
<tr bgcolor="#999999"><th>No</th><th>Kelompok</th><th>Anggota</th></tr>
<?php include "koneksi.php";
$tmp=mysql_query("select kelompok.nama,siswa.nama from anggota INNER JOIN kelompok ON anggota.no=kelompok.no INNER JOIN siswa ON anggota.nis=siswa.nis order by anggota.no");
$i=1;
while($isi_tmp=mysql_fetch_array($tmp)){?>
<tr bgcolor="#CCCCCC">
<td><?php echo $i++;?></td>
<td><?php echo $isi_tmp[0];?></td>
<td><?php echo $isi_tmp[1];?></td>
</tr><?php }?>
</table>
<?php 
//for($x=1;$x<9;$x++){}
if($_REQUEST[acak]<>""){
	$no=rand(1,9);
	$data=mysql_query("select*from siswa where status='belum' and nama='$_REQUEST[acak]'");
	$cek=mysql_num_rows($data);
	$isi=mysql_fetch_array($data);
	if($cek<>0){
		if($no==8||$no==9){
			$enam=mysql_query("select*from anggota where no='$no'");
			$cek_enam=mysql_num_rows($enam);
			if($cek_enam>6){
				echo "<script>alert(\"GAGAL, silahkan coba lagi!\");</script>";
			}else{
				mysql_query("insert into anggota values('$no','$isi[nis]')");
				mysql_query("update siswa set status='sudah' where nama='$isi[nama]'");}
		}else{
				$angg=mysql_query("select*from anggota where no='$no'");
				$cek_angg=mysql_num_rows($angg);
				if($cek_angg>5){
					echo "<script>alert(\"GAGAL, silahkan coba lagi!\");</script>";
				}else{
					mysql_query("insert into anggota values('$no','$isi[nis]')");
					mysql_query("update siswa set status='sudah' where nama='$isi[nama]'");}
		}
	/*}else{echo "<script>alert(\"GAGAL, silahkan coba lagi!\");</script>";}*/
}else{ echo "<script>alert(\"Nama tidak tersedia atau telah terdaftar!\");</script>";}
}
?>
</center>
</body>
</html>
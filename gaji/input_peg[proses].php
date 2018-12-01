<?php session_start();
$_SESSION[nip]=$_REQUEST[nip];
$_SESSION[nama]=$_REQUEST[nama];
$_SESSION[ruang]=$_REQUEST[ruang];
$_SESSION[status]=$_REQUEST[status];
$_SESSION[jml_anak]=$_REQUEST[jml_anak];
include "koneksi.php";
$cek=mysql_query("select*from pegawai where nip='$_REQUEST[nip]'");
$isi=mysql_num_rows($cek);
if($isi==0){
mysql_query("insert into pegawai values('$_SESSION[nip]','$_SESSION[nama]','$_SESSION[ruang]','$_SESSION[status]','$_SESSION[jml_anak]')");
header('location:data_pegawai.php');
}else{
	echo "<script> alert(\"Data tersedia !\"); window.location='input_peg.php';</script>";
}
?>
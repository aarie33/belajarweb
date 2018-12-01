<?php
include "koneksi.php";
$id=$_REQUEST["id"];
$data=mysqli_query($db,"SELECT*FROM mahasiswa WHERE id_mhs='$id'");
$isi_data=mysqli_fetch_array($data);
unlink("images/".$isi_data["foto"]);
$query=mysqli_query($db,"DELETE FROM mahasiswa WHERE id_mhs='$id'");
if($query){
	echo "<script> alert(\"Data Berhasil Dihapus...!\"); window.location=\"hasil.php\"; </script>";
}else{
	echo "<script> alert(\"Data Gagal Dihapus...!\"); window.location=\"hasil.php\"; </script>";
}
?>
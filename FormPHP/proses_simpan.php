<?php
include "koneksi.php";
$nama=$_REQUEST["nama"];
$telp=$_REQUEST["telp"];
$prodi=$_REQUEST["prodi"];
$jk=$_REQUEST["jk"];
$nama_foto=$_FILES["foto"]["name"]; //nama inputan
$lokasi_folder=$_FILES["foto"]["tmp_name"]; //lokasi folder awal gambar
copy($lokasi_folder, "images/".$nama_foto); //copy file
$sql="INSERT INTO mahasiswa VALUES('','$nama','$telp','$prodi','$jk','$nama_foto')";
$query=mysqli_query($db,$sql);
if($query){
	echo "<script> alert(\"Data Berhasil Disimpan...!\"); window.location=\"hasil.php\"; </script>";
}else{
	echo "<script> alert(\"Data Gagal Disimpan...!\"); window.location=\"index.php\"; </script>";
}
?>
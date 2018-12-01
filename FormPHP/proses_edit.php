<?php
include "koneksi.php";
$data=mysqli_query($db,"SELECT*FROM mahasiswa WHERE id_mhs='$_REQUEST[nim]'");
$isi_data=mysqli_fetch_array($data);
$nama_foto=$_FILES["foto"]["name"];
$lokasi=$_FILES["foto"]["tmp_name"];
if($nama_foto==""){
	$query=mysqli_query($db, "UPDATE mahasiswa SET nama_mhs='$_REQUEST[nama]', telp='$_REQUEST[telp]', prodi='$_REQUEST[prodi]', jenis_kelamin='$_REQUEST[jk]' WHERE id_mhs='$_REQUEST[nim]'");
}else{
	unlink("images/".$isi_data["foto"]);
	copy($lokasi, "images/".$nama_foto);
	$query=mysqli_query($db, "UPDATE mahasiswa SET nama_mhs='$_REQUEST[nama]', telp='$_REQUEST[telp]', prodi='$_REQUEST[prodi]', jenis_kelamin='$_REQUEST[jk]', foto='$nama_foto' WHERE id_mhs='$_REQUEST[nim]'");
}
if($query){
	echo "<script> alert(\"Data Berhasil Diedit...!\"); window.location=\"hasil.php\"; </script>";
}else{
	echo "<script> alert(\"Data Gagal Diedit...!\"); window.location=\"hasil.php\"; </script>" ;
}
?>
<?php
require '../pages/config.php';
// proses menghapus data mahasiswa
if(isset($_POST['hapus'])) {
	$delete="DELETE FROM berita WHERE id=".$_POST['hapus'];
	mysql_query($delete);
	echo "data telah dihapus";
} else {
	// deklarasikan variabel
	$id	= $_POST['id'];
	$judul	= $_POST['judul'];
	$isi	= $_POST['isi'];
	$status	= $_POST['status'];
	$tanggal= $_POST['tanggal'];
	
	// validasi agar tidak ada data yang kosong
	if($judul!="" && $isi!="" && $status!="") {
		// proses tambah data mahasiswa
		if($id == 0) {
			mysql_query("INSERT INTO berita(id,judul,isi,status,tanggal) VALUES('','$judul','$isi','$status','$tanggal')");
			echo "data telah ditambahkan";
		// proses ubah data mahasiswa
		} else {
			$update="UPDATE berita SET 
			id = '$id',
			judul = '$judul',
			isi = '$isi',
			status = '$status',
			tanggal = '$tanggal'
			WHERE id = $id
			";
			mysql_query($update);
			echo "data telah diperbarui";
		}
	}
}

// tutup koneksi ke database mysql

?>

<?php 
	$page=$_GET['page'];
	switch($page){
		case 'data_jaringan':
			header('Location:../peserta/daftar_jaringan.php');
			break;
		case 'ubah_data_jaringan':
			header('Location:../peserta/ubah_jaringan.php');
			break;
		case 'cetak_jaringan':
			header('Location:../peserta/cetak_bukti_daftar_jaringan.php');
			break;
		case 'data_animasi':
			header('Location:../peserta/daftar_animasi.php');
			break;
		case 'ubah_data_animasi':
			header('Location:../peserta/ubah_animasi.php');
			break;
		case 'cetak_animasi':
			header('Location:../peserta/cetak_bukti_daftar_animasi.php');
			break;

	}

?>
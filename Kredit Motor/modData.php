<?php
ini_set("display_errors",0);
include("kelfin-includes/defines.php");
include("kelfin-includes/fungsi.php");
include("kelfin-includes/connect.php");
cekSession();
//inisiasi untuk action
$tipe = $_REQUEST['tipe'];
//inisiasi untuk edit motor
$kodeMotor = $_POST['txtKodeMotor'];
$merek = $_POST['txtMerek'];
$warna = $_POST['txtWarna'];
$harga = $_POST['txtHarga'];
//inisiasi untuk edit pelanggan
$kodePelanggan = $_REQUEST['txtKodePelanggan'];
$NamaPelanggan = $_REQUEST['txtNama'];
$Alamat = $_REQUEST['txtAlamat'];
$Telepon = $_REQUEST['txtTelepon'];
$HP = $_REQUEST['txtHp'];
$noKtp = $_REQUEST['txtNoKtp'];
$KK = $_REQUEST['txtKk'];
$slipGaji = $_REQUEST['txtSlipGaji'];
$Keterangan = $_REQUEST['txtKeterangan'];

switch ($tipe){
	case 'simpanMotor':
	//query edit motor
  	$query = "update motor set KodeMotor = '$kodeMotor',
							   Merk = '$merek',
							   Warna = '$warna',
							   Harga = '$harga'
						   where KodeMotor = '$kodeMotor'";
	$url = "index.php?page=view_motor";
	$alert = "Update data Motor Berhasil";
  	break;

	case 'tambahMotor':
	//query tambah motor
	$query = "insert into motor (kodeMotor,
									Merk,
									Warna,
									Harga)
								values('$kodeMotor',
									   '$merek',
									   '$warna',
									   '$harga')";
	$url = "index.php?page=view_motor";
	$alert = "Tambah data Motor Berhasil";
	break;
	
	case 'hapusMotor':
	//query for hapus motor
	$query = "delete from motor where kodeMotor = $_GET[id]";
	$url = "index.php?page=view_motor";
	$alert = "Hapus data Motor Berhasil";
	break;
	
	case 'tambahPelanggan':
	//query untuk tambah pelanggan
	$query = "Insert into pelanggan(
           					KodeCust,
		   					Nama,
		  				    Alamat,
		 				    Telepon,
		 				    HP,
		   					NoKTP,
		   					KK,
		   					SlipGaji,
		   					Keterangan)
						value (
		   					'$_POST[KodeCust]',
		   					'$_POST[Nama]',
		   					'$_POST[Alamat]',
		   					'$_POST[Telepon]',
		   					'$_POST[HP]',
		   					'$_POST[NoKTP]',
		   					'$_POST[KK]',
		   					'$_POST[SlipGaji]',
		   					'$_POST[Keterangan]')";
	$url = "index.php?page=view_pelanggan";
	$alert = "Penambahan Pelanggan berhasil";
	break;
	
	case 'simpanPelanggan':
	//query untuk edit pelanggan
	$query = "update pelanggan set KodeCust = '$kodePelanggan',
							   Nama = '$NamaPelanggan',
							   Alamat = '$Alamat',
							   Telepon = '$Telepon',
							   HP = '$HP',
							   NoKTP = '$noKtp',
							   KK = '$KK',
							   SlipGaji = '$slipGaji',
							   Keterangan = '$Keterangan'
							  where KodeCust = '$kodePelanggan'";
	$url = "index.php?page=view_pelanggan";
	$alert = "Update data Pelanggan Berhasil";
	break;
	case 'hapusPelanggan':
	//query for hapus Pelanggan
		$query = "delete from pelanggan where KodeCust = $_GET[id]";
		$url = "index.php?page=view_pelanggan";
		$alert = "Hapus data Pelanggan Berhasil";
	break;
	case 'updateBelicash':
	//Edit beli cash
		$query = "update belicash set
						KodeCash='$_POST[KodeCash]',
   				 		TanggalCash='$_POST[TanggalCash]',
						KodeCust='$_POST[KodeCust]',
			 			KodeMotor='$_POST[KodeMotor]',
			 			Harga='$_POST[Harga]',
			 			Bayar='$_POST[Bayar]',
			 			Keterangan='$_POST[Keterangan]'
			 			Where
			 			KodeCash='$_POST[KodeCash]'";
	break;
	case 'hapusBeliCash':
		$query = "delete from belicash where KodeCash='$_GET[id]'";
		$url = "index.php?page=belicash_view";
		$alert = "Hapus data Beli Cash Berhasil";
	break;
	case 'inputBeliCash':
	 	$query ="Insert into belicash(
           				KodeCash,
		   				TanggalCash,
		  				KodeCust,
		   				KodeMotor,
		   				Harga,
		   				Bayar,
		   				Keterangan) value (
		   				'$_POST[KodeCash]',
		   				'$_POST[TanggalCash]',
		   				'$_POST[KodeCust]',
		   				'$_POST[KodeMotor]',
		   				'$_POST[Harga]',
		   				'$_POST[Bayar]',
		   				'$_POST[Keterangan]')";
		$url = "index.php?page=belicash_view";
		$alert = "Tambah Data Beli Cash Berhasil";
	break;
	case 'beliKredit_input_pelanggan':
	//query untuk tambah pelanggan di beli kredit
	$query = "Insert into pelanggan(
           					KodeCust,
		   					Nama,
		  				    Alamat,
		 				    Telepon,
		 				    HP,
		   					NoKTP,
		   					KK,
		   					SlipGaji,
		   					Keterangan)
						value (
		   					'$_POST[KodeCust]',
		   					'$_POST[Nama]',
		   					'$_POST[Alamat]',
		   					'$_POST[Telepon]',
		   					'$_POST[HP]',
		   					'$_POST[NoKTP]',
		   					'$_POST[KK]',
		   					'$_POST[SlipGaji]',
		   					'$_POST[Keterangan]')";
	$url = "index.php?page=beliKredit_input&KodeCust=$_POST[KodeCust]";
	$alert = "Penambahan Pelanggan berhasil";
	break;
	case 'inputBeliKredit':
		$sisa = $_POST[Harga]-$_POST[uangMuka];
	 	$query ="Insert into belikredit(
           				KodeKredit,
		   				TanggalKredit,
		  				KodeCust,
		   				KodeMotor,
		   				Harga,
		   				UangMuka,
						Bunga,
						LamaCicilan,
						AngsuranKe,
						TelahBayar,
						Sisa,
		   				Keterangan) value (
		   				'$_POST[kodeKredit]',
		   				'$_POST[tanggalKredit]',
		   				'$_POST[kodeCust]',
		   				'$_POST[KodeMotor]',
		   				'$_POST[Harga]',
		   				'$_POST[uangMuka]',
						'$_POST[bunga]',
						'$_POST[lamaCicilan]',
						'1',
						'$_POST[uangMuka]',
						'$sisa',
		   				'$_POST[Keterangan]')";
		$url = "index.php?page=beliKredit_view";
		$alert = "Tambah Data Beli Cash Berhasil";
	break;
	case 'bayarCicilan':
	//query for bayar cicilan
	//sisa
	$sqlsisa = mysql_query("SELECT sisa - $_POST[jumlah] AS a FROM belikredit WHERE KodeKredit = '$_POST[kodeKredit]'");
	$sisa1 = mysql_fetch_array($sqlsisa);
	//cicilanKe
	$sqlcicilan = mysql_query("SELECT AngsuranKe + 1 as b FROM belikredit WHERE KodeKredit = '$_POST[kodeKredit]'");
	$cicilan = mysql_fetch_array($sqlcicilan);
	//bulan angsuran
	$ket = "Pembayaran bulan ".date("M");
	$query = "insert into bayarcicilan(
					 NomorByr,
					 TanggalByr,
					 KodeKredit,
					 Jumlah,
					 Sisa,
					 Cicilan,
					 Keterangan) values (
					 '$_POST[nomorBayar]',
					 '$_POST[tanggalBayar]',
					 '$_POST[kodeKredit]',
					 '$_POST[jumlah]',
					 '$sisa1[a]',
					 '$cicilan[b]',
					 '$ket')";
	//telah bayar
	$sqlTelahBayar = mysql_query("SELECT TelahBayar FROM belikredit WHERE KodeKredit = '$_POST[kodeKredit]'");
	$telah = mysql_fetch_array($sqlTelahBayar);
	$telahbayar = ($telah[TelahBayar]+$_POST[jumlah]);
	//Update tabel beli kredit
	$update = "update belikredit set
							AngsuranKe='$cicilan[b]', 
         					TelahBayar = '$telahbayar',
         					Sisa = '$sisa1[a]'
						where KodeKredit = '$_POST[kodeKredit]'";
	mysql_query($update);
	$url = "index.php?page=beliKredit_view";
	$alert = "Bayar cicilan berhasil";
	break;
}
mysql_query($query);
       if($tipe != ""){
	 echo "<script>
		window.alert('$alert');
		window.location = '$url';
		</script>";
	   }
?>
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['level']=="peserta"){
//		echo "Selamat datang ".$_SESSION['username']." anda berada pada level ".$_SESSION['level'];
	require'../pages/config.php';
	require'link.php';
}else{
	header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.min.js"></script><!-- scrolling -->
	<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
	<style>
		label{ font-weight: normal; 
		}
		.form-horizontal .control-label {
			text-align: left;
		}
  </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><strong>Lomba Animasi</strong></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="daftar_animasi.php" class="page-scroll" ><span class="glyphicon glyphicon-list" style="font-size:12px;"></span> Data Team</a></li>
					<li><a href="?page=ubah_data_animasi" class="page-scroll" ><span class="glyphicon glyphicon-edit" style="font-size:12px;"></span> Ubah Data</a>					</li>
					<li><a href="logout.php" class="page-scroll"><span  class="glyphicon glyphicon-log-out" style="font-size:12px;"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top:50px; min-height:75px;">
		<?php 
		$select = "SELECT * FROM daftar_animasi WHERE username = '".$_SESSION['username']."'";
		$query_select = mysql_query($select);
		$data = mysql_fetch_array($query_select);


		//echo $select;
		/*echo " id : ".$data['id_daftar'];
		echo " hp : ".$data['no_hp'];
		echo " mail : ".$data['email'];
		echo " sekolah : ".$data['sekolah'];
		echo " foto anggota1 : ".$data['foto_anggoto1'];
		echo " anggota1 : ".$data['anggota1'];
		echo " foto anggota2 : ".$data['foto_anggota2'];
		echo " anggota2 : ".$data['anggota2'];*/

		$_SESSION['status'] = $data['status'];
		$id=$data['id_daftar'];
		$team=$data['nama_team'];
		$verifikasi = @$_POST['verifikasi'];
		$upload_bukti_bayar = @$_POST['upload_bukti_bayar'];
		$upload_link = @$_POST['upload_link'];

		if(isset($verifikasi)){
			$update="UPDATE daftar_animasi SET status='1' WHERE id_daftar='$id'";
			$query_update=mysql_query($update);
			?> <meta http-equiv="refresh" content="0"><?php 
		}
		if(isset($upload_bukti_bayar)){
			$nameBuktiBayar = $_FILES['bukti_bayar']['name'];
			echo $nameBuktiBayar;
			if($_FILES['bukti_bayar']['error']==0 && !empty($_FILES['bukti_bayar']['tmp_name'])){
				if($_FILES['bukti_bayar']['type']=="image/jpg"){
					$fileBuktiBayarFix = "ImgBuktiBayar_".$team.".jpg";
					move_uploaded_file( $_FILES['bukti_bayar']['tmp_name'], "../img/foto/animasi/bukti_bayar/". $fileBuktiBayarFix);
				}else if($_FILES['bukti_bayar']['type']=="image/jpeg"){
					$fileBuktiBayarFix = "ImgBuktiBayar_".$team.".jpeg";
					move_uploaded_file( $_FILES['bukti_bayar']['tmp_name'], "../img/foto/animasi/bukti_bayar/". $fileBuktiBayarFix);
				}
				$update="UPDATE daftar_animasi SET bukti_bayar='$fileBuktiBayarFix' WHERE id_daftar='$id'";
				$query_update=mysql_query($update);
				if ($query_update) { ?> 
					<div class="alert alert-success" id="success-alert">
				    <button type="button" class="close" data-dismiss="alert">x</button>
				    <strong>Success! </strong> 
					</div><meta http-equiv="refresh" content="1"><?php
				}
			}
		}
		if(isset($upload_link)){
			$link = $_POST['link'];
			$update="UPDATE daftar_animasi SET link='$link' WHERE id_daftar='$id'";
			$query_update=mysql_query($update);
			?> <meta http-equiv="refresh" content="0"><?php 
		}
		?>
	</div>

	<div class="container" >
		<div class="col-md-6 col-md-offset-3">
			<h2 for="" class="col-md-12 text-center"><?php echo $data['nama_team']; ?></h2>
			<form action="" method="" class="form-horizontal" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<img src="../img/foto/animasi/<?php echo $data['foto_ketua']; ?>" class="img-responsive" alt="">
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="col-md-4 control-label" for="nama">Ketua</label>
							<div class="col-md-8"><input type="text" readonly class="form-control input-md" id="nama" value="<?php echo $data['nama_ketua']; ?>"></div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="email">Email</label>
							<div class="col-md-8"><input type="mail" readonly class="form-control input-md" id="email" value="<?php echo $data['email']; ?>"></div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="no_hp">No Telpon</label>
							<div class="col-md-8"><input type="text" readonly class="form-control input-md" id="no_hp" value="<?php echo $data['no_hp']; ?>"></div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="sekolah">Asal Sekolah</label>
							<div class="col-md-8"><input type="text" readonly class="form-control input-md" id="sekolah" value="<?php echo $data['sekolah']; ?>"></div>
						</div>
					</div><!-- col-md-8 -->
				</div><!-- row -->
				<div class="row">
					<div class="col-md-4">
						<img src="../img/foto/animasi/<?php echo $data['foto_anggota1']; ?>" class="img-responsive" alt="">
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="col-md-4 control-label" for="nama">Anggota 1</label>
							<div class="col-md-8"><input type="text" readonly class="form-control input-md" id="nama" value="<?php echo $data['anggota1']; ?>"></div>
						</div>
					</div><!-- col-md-8 -->
				</div><!-- row -->
				<div class="row">
					<div class="col-md-4">
						<img src="../img/foto/animasi/<?php echo $data['foto_anggota2']; ?>" class="img-responsive" alt="">
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="col-md-4 control-label" for="nama">Anggota 2</label>
							<div class="col-md-8"><input type="text" readonly class="form-control input-md" id="nama" value="<?php echo $data['anggota2']; ?>"></div>
						</div>
					</div><!-- col-md-8 -->
				</div><!-- row -->
			</form>
			<div class="row">
				<form action="" method="post" enctype="multipart/form-data">
				<?php if($data['status'] == "1"){ ?>
					<div class="form-group" style="margin-top:25px; text-align:center;">
						<?php if($data['bukti_bayar']!=""){ ?>
							<a href="../img/foto/animasi/bukti_bayar/<?php echo $data['bukti_bayar']; ?>"><span><i>Lihat bukti scan pembayaran</i></span></a><br>
						<?php
						} ?>
				    <label class="control-label">Upload scan bukti pembayaran</label>
						<input name="bukti_bayar" type="file">	
						<button class="btn btn-default text-center" style="margin-top:25px;"name="upload_bukti_bayar" type="submit"><span class="glyphicon glyphicon-upload" style="font-size:12px;"></span> Upload Bukti Bayar</button>
					</div>
					<div class="form-group" style="margin-top:25px; text-align:center;">
				    <label class="control-label">Link video animasi</label>
						<input type="text" class="form-control input-md" id="link" name="link" value="<?php echo $data['link']; ?>">
						<button class="btn btn-default text-center" style="margin-top:25px;"name="upload_link" type="submit"><span class="glyphicon glyphicon-upload" style="font-size:12px;"></span> Upload Link</button>
					</div>
				<?php }else if($data['status'] == "0"){ ?>
					<div class="form-group" style="margin-top:25px; text-align:center;">
				    <button class="btn btn-danger" name="verifikasi" type="submit" onclick="return confirm('Data yang sudah diverifikasi tidak dapat diubah lagi!')">Verifikasi</button>
					</div>
				<?php } ?>
				</form>
				<?php 
					if($data['status'] == "2"){ ?>
					<div class="form-group" style="margin-top:25px; text-align:center;">
				    <!-- <label class="control-label">Cetak bukti pendaftaran</label> -->
						<a href="?page=cetak_animasi"><button class="btn btn-default" name="cetak" type="submit"><!-- <span class="glyphicon glyphicon-upload" style="font-size:12px;"></span> --> Cetak</button></a>
					</div>
				<?php } ?>
			</div><!-- row upload -->
			<!-- <div class="row text-center">
				<img src="../img/foto/jaringan/bukti_bayar/<?php echo $data['bukti_bayar']; ?>" class="img-responsive" alt="" style="max-width:700px; max-height:200px; margin:0 auto;">
			</div> -->
		</div><!-- col-md-6 col-md-offset-3 -->
	</div><!-- container -->
	</div>
	<div class="container" style="min-height:50px;"></div>
</body>
</html>
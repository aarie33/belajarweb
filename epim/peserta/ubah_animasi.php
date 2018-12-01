<?php
	session_start();
	if(isset($_SESSION['username']) && $_SESSION['level']=="peserta" && $_SESSION['status']==0){
	//		echo "Selamat datang ".$_SESSION['username']." anda berada pada level ".$_SESSION['level'];
		require'../pages/config.php';
		require'link.php';
		$select="SELECT * FROM daftar_animasi WHERE username = '".$_SESSION['username']."'";
		$query_select=mysql_query($select);
		$data = mysql_fetch_array($query_select);
	}else if(isset($_SESSION['username']) && $_SESSION['level']=="peserta" && $_SESSION['status']!=0){
		header('Location: daftar_animasi.php');
	}else{
		header('Location: ../index.php');
	}

	$id = $data['id_daftar'];
	$foto_ketua = $data['foto_ketua'];
	$foto_anggota1 = $data['foto_anggota1'];
	$foto_anggota2 = $data['foto_anggota2'];
	$nama_team = $_POST['nama_team'];
	$nama_ketua = $_POST['nama_ketua'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$sekolah = $_POST['sekolah'];
	$anggota1 = $_POST['anggota1'];
	$anggota2 = $_POST['anggota2'];
	$link	= $_POST['link'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery.min.js"></script>  
	<script src="../js/bootstrap.min.js"></script>
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
					<li><a href="?page=data_animasi" class="page-scroll" ><span class="glyphicon glyphicon-list" style="font-size:12px;"></span> Data Team</a></li>
					<li><a href="?page=ubah_data_animasi" class="page-scroll" ><span class="glyphicon glyphicon-edit" style="font-size:12px;"></span> Ubah Data</a></li>
					<li><a href="logout.php" class="page-scroll"><span  class="glyphicon glyphicon-log-out" style="font-size:12px;"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:50px; min-height:75px;">
		<?php 	
		if(isset($_POST['simpan'])){

			$dirFile = "../img/foto/animasi/";
			if(!empty($_FILES['foto_ketua']['tmp_name']) && $_FILES['foto_ketua']['error']==0){
				if($_FILES['foto_ketua']['type']=="image/jpg"){
					$foto_ketuaFix = "ImgPesertaAnimasi_".$_POST['nama_team']."_ketua.jpg";
					move_uploaded_file( $_FILES['foto_ketua']['tmp_name'], $dirFile. $foto_ketuaFix);
				}else if($_FILES['foto_ketua']['type']=="image/jpeg"){
					$foto_ketuaFix = "ImgPesertaAnimasi_".$_POST['nama_team']."_ketua.jpeg";;
					move_uploaded_file( $_FILES['foto_ketua']['tmp_name'], $dirFile. $foto_ketuaFix);
				}else{
					$foto_ketuaFix = $foto_ketua;
				}
			}else{
				$foto_ketuaFix = $foto_ketua;
			}
			if(!empty($_FILES['foto_anggota1']['tmp_name']) && $_FILES['foto_anggota1']['error']==0){
				if($_FILES['foto_anggota1']['type']=="image/jpg"){
					$foto_anggota1Fix = "ImgPesertaAnimasi_".$_POST['nama_team']."_anggota1.jpg";
					move_uploaded_file( $_FILES['foto_anggota1']['tmp_name'], $dirFile. $foto_anggota1Fix);
				}else if($_FILES['foto_anggota1']['type']=="image/jpeg"){
					$foto_anggota1Fix = "ImgPesertaAnimasi_".$_POST['nama_team']."_anggota1.jpeg";
					move_uploaded_file( $_FILES['foto_anggota1']['tmp_name'], $dirFile. $foto_anggota1Fix);
				}else{
					$foto_anggota1Fix = $foto_anggota1;
				}
			}else{
				$foto_anggota1Fix = $foto_anggota1;
			}
			if(!empty($_FILES['foto_anggota2']['tmp_name']) && $_FILES['foto_anggota2']['error']==0){
				if($_FILES['foto_anggota2']['type']=="image/jpg"){
					$foto_anggota2Fix = "ImgPesertaAnimasi_".$_POST['nama_team']."_anggota2.jpg";
					move_uploaded_file( $_FILES['foto_anggota2']['tmp_name'], $dirFile. $foto_anggota2Fix);
				}else if($_FILES['foto_anggota2']['type']=="image/jpeg"){
					$foto_anggota2Fix = "ImgPesertaAnimasi_".$_POST['nama_team']."_anggota2.jpg";
					move_uploaded_file( $_FILES['foto_anggota2']['tmp_name'], $dirFile. $foto_anggota2Fix);
				}else{
					$foto_anggota2Fix = $foto_anggota2;
				}
			}else{
				$foto_anggota2Fix = $foto_anggota2;
			}
			
			
			
			//echo " ketua : ".$foto_ketuaFix;
			//echo " anggota 1 :".$foto_anggota1Fix;
			//echo " anggota 2 ;".$foto_anggota2Fix;
			/*$dirFile = "../img/foto/animasi/";
			
			if($_FILES['foto_ketua']['name']==""){
				$nmFotoKetua = $foto_ketua;
			}else{
				move_uploaded_file( $_FILES['foto_ketua']['tmp_name'], $dirFile. $nmFotoKetua);
			}
			if($_FILES['foto_anggota1']['name']==""){
				$nmFotoAnggota1 = $foto_anggota1;
			}else{
				 move_uploaded_file( $_FILES['foto_anggota1']['tmp_name'], $dirFile. $nmFotoAnggota1);
			}
			if($_FILES['foto_anggota2']['name']==""){
				$nmFotoAnggota2 = $foto_anggota2;
			}else{
				move_uploaded_file( $_FILES['foto_anggota2']['tmp_name'], $dirFile. $nmFotoAnggota2);
			}*/
			
			$update="UPDATE daftar_animasi SET nama_team='$nama_team', nama_ketua='$nama_ketua',sekolah='$sekolah',email='$email', no_hp='$no_hp',foto_ketua='$foto_ketuaFix',anggota1='$anggota1', foto_anggota1='$foto_anggota1Fix',anggota2='$anggota2',foto_anggota2='$foto_anggota2Fix' WHERE id_daftar='$id'";
			$query_update=mysql_query($update);
			if($query_update){
				?> <div class="alert alert-success" id="success-alert">
			    <button type="button" class="close" data-dismiss="alert">x</button>
			    <strong>Success! </strong> Data telah diperbarui
				</div>
				<meta http-equiv="refresh" content="3"><?php
			}else{
				?> <div class="alert alert-warning" id="success-alert">
			    <button type="button" class="close" data-dismiss="alert">x</button>
			    <strong>Error! </strong> Data gagal diperbarui
				</div>
				<meta http-equiv="refresh" content="3"><?php
			}
		}
		?>
	</div>

	<div class="container">
		<div class="col-md-6 col-md-offset-3">
		<!-- <div class="col-md-4 align-center">
			<img src="../img/foto/jaringan/<?php echo $data['foto']; ?>" class="img-responsive"alt="">
		</div> -->
		<div class="col-md-12">
			<div class="row">
				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-4 control-label" for="nama_team">Nama Team</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="nama_team" name="nama_team" value="<?php echo $data['nama_team']; ?>" disabled></div>
					</div>
					<b>Ketua</b>
					<div class="form-group">
						<label class="col-md-4 control-label" for="nama_ketua">Nama</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="nama_ketua" name="nama_ketua" value="<?php echo $data['nama_ketua']; ?>" ></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email">Email</label>
						<div class="col-md-8"><input type="mail" class="form-control input-md" id="email" name="email" value="<?php echo $data['email']; ?>"></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="no_hp">No Telpon</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>"></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="sekolah">Asal Sekolah</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="sekolah" name="sekolah" value="<?php echo $data['sekolah']; ?>"></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="foto_ketua">Foto (*.jpg, *.jpeg)</label>
						<div class="col-md-8"><input type="file" name="foto_ketua"></div>
					</div>
					<b>Anggota 1</b>
					<div class="form-group">
						<label class="col-md-4 control-label" for="anggota1">Nama</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="anggota1" name="anggota1" value="<?php echo $data['anggota1']; ?>" ></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="foto_anggota1">Foto (*.jpg, *.jpeg)</label>
						<div class="col-md-8"><input type="file" name="foto_anggota1"></div>
					</div>
					<b>Anggota 2</b>
					<div class="form-group">
						<label class="col-md-4 control-label" for="anggota2">Nama</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="anggota2" name="anggota2" value="<?php echo $data['anggota2']; ?>" ></div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="foto_anggota2">Foto (*.jpg, *.jpeg)</label>
						<div class="col-md-8"><input type="file" name="foto_anggota2"></div>
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-4"><button type="submit" name="simpan" value="simpan" class="btn btn-primary">Simpan</button></div>
					</div>
				</form>
			</div><!-- row -->
			</div>
		</div>
	</div>
</body>
</html>
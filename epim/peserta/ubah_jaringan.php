<?php
	session_start();
	if(isset($_SESSION['username']) && $_SESSION['level']=="peserta" && $_SESSION['status']==0){
	//		echo "Selamat datang ".$_SESSION['username']." anda berada pada level ".$_SESSION['level'];
		require'../pages/config.php';
		require'link.php';
		$select="SELECT * FROM daftar_jaringan WHERE username = '".$_SESSION['username']."'";
		$query_select=mysql_query($select);
		$data = mysql_fetch_array($query_select);
	}else if(isset($_SESSION['username']) && $_SESSION['level']=="peserta" && $_SESSION['status']!=0){
		header('Location: daftar_jaringan.php');
	}else{
		header('Location: ../index.php');
	}
	$id = $data['id_daftar'];
	$nama = strip_tags($_POST['nama']);
	$sekolah =strip_tags($_POST['sekolah']);
	$email = strip_tags($_POST['email']);
	$no_hp = strip_tags($_POST['no_hp']);
	$foto = $data['foto'];
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
				<a class="navbar-brand" href="#"><strong>Lomba Jaringan</strong></a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse navbar-right">
	      <ul class="nav navbar-nav">
					<li><a href="?page=data_jaringan" class="page-scroll" ><span class="glyphicon glyphicon-list" style="font-size:12px;"></span> Data Team</a></li>
					<li><a href="?page=ubah_data_jaringan" class="page-scroll" ><span class="glyphicon glyphicon-edit" style="font-size:12px;"></span> Ubah Data</a></li>
					<li><a href="logout.php" class="page-scroll"><span  class="glyphicon glyphicon-log-out" style="font-size:12px;"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:50px; min-height:75px;">
		<?php 
		if(isset($_POST['simpan'])){
			$tmpFile = $_FILES['foto']['tmp_name'];
			$fileName =  $_FILES['foto']['name'];
			$fileSize =  $_FILES['foto']['size'];
			$fileType =  $_FILES['foto']['type'];
			$fileError =  $_FILES['foto']['error'];
			$dirFile = "../img/foto/jaringan/";
			if($fileError==0 && !empty($tmpFile)){
				if($fileType=="image/jpg"){ 
					$fileNameFix = "ImgPesertaJaringan_".$_SESSION['username'].".jpg";
					move_uploaded_file( $tmpFile, $dirFile. $fileNameFix);
				}else if($fileType=="image/jpeg"){ 
					$fileNameFix = "ImgPesertaJaringan_".$_SESSION['username'].".jpeg";
					move_uploaded_file( $tmpFile, $dirFile. $fileNameFix);
				}else{ 
					$fileNameFix = $foto;
				}
			}else{
				$fileNameFix = $foto;
			}
			
			$update="UPDATE daftar_jaringan SET nama='$nama',sekolah='$sekolah',email='$email', no_hp='$no_hp',foto='$fileNameFix' WHERE id_daftar='$id'";
			$query_update=mysql_query($update);
			if($query_update){?> 
				<div class="alert alert-success" id="success-alert"> <button type="button" class="close" data-dismiss="alert">x</button>
			    <strong>Success! </strong> Data telah diperbarui</div><meta http-equiv="refresh" content="3"><?php
			}else{?> 
				<div class="alert alert-warning" id="success-alert"><button type="button" class="close" data-dismiss="alert">x</button>
			    <strong>Error! </strong> Data gagal diperbarui</div><meta http-equiv="refresh" content="3"><?php
			}
		}
		?>
	</div>

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
		<!-- <div class="col-md-4 align-center">
			<img src="../img/foto/jaringan/<?php echo $data['foto']; ?>" class="img-responsive"alt="">
		</div> -->
		<div class="col-md-12">
			<div class="row">
				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-4 control-label" for="nama">Nama</label>
						<div class="col-md-8"><input type="text" class="form-control input-md" id="nama" name="nama" value="<?php echo $data['nama']; ?>" ></div>
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
						<label class="col-md-4 control-label" for="foto">Foto</label>
						<div class="col-md-8">
							<input type="file" name="foto">
						</div>
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
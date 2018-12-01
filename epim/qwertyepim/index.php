<?php
	/*session_start();
	if(isset($_SESSION['username']) && $_SESSION['level']=="admin"){
//		echo "Selamat datang ".$_SESSION['username']." anda berada pada level ".$_SESSION['level'];
	}else{
		header('Location:login.php');
	}*/
?>
<?php require'../pages/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
	<title>Berita</title>
	<link rel="stylesheet" href="bootstrap.min.css">
  	<style>
		.modal-body{position:relative;overflow-y:auto;max-height:400px;padding:15px;}
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
				<a class="navbar-brand" href="#"><strong>Administrator</strong></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
						<li><a href="../index.php" class="page-scroll" ><span class="glyphicon glyphicon-star" style="font-size:12px;"></span> Epim 2015</a></li>
						<li><a href="index.php" class="page-scroll" ><span class="glyphicon glyphicon-bullhorn" style="font-size:12px;"></span> Berita</a></li>
						<li class="dropdown"><a href="#berita" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt" style="font-size:12px;"></span> Data Pendaftar</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="data-animasi" >Data Animasi</a></li>
							<li><a href="#" class="data-jaringan">Data Jaringan</a></li>
						</ul>
					</li>
						<li><a href="logout.php" class="page-scroll"><span  class="glyphicon glyphicon-log-out" style="font-size:12px;"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

<div id="konten">
	<div class="container">
		
		<div class="row">
			<div id="data-konten"></div>
		</div>
	</div>
	
	<!-- modal dialog-berita -->
  <div class="row">
	<div id="dialog-berita" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	   <!--  Modal content -->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 id="myModalLabel" class="modal-title">Tambah Berita</h4>
	      </div>
	  	
	      <div class="modal-body"></div>

	      <div class="modal-footer">
	        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
	  		<button id="simpan-berita" class="btn btn-success">Simpan</button>
	      </div>
	    </div><!-- modal content -->

	  </div><!-- modal dialog -->
	</div>
  </div>
<!-- akhir modal dialog berita -->

</div>
	<!--script src="jquery.min.js"></script--> <!-- satu -->
	<script src="jquery-1.8.3.min.js"></script> <!-- dua -->
  	<script src="bootstrap.min.js"></script> <!-- dua -->
  	<!--script src="bootstrap.min1.js"></script--> <!-- satu -->
	<script src="aplikasi.js"></script>
</body>
</html>



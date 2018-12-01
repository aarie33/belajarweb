<?php
require'pages/config.php';
require'pages/fungsi_tgl.php';

function antiInjection($data){
	$filter_sql = mysql_real_escape_string(stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter_sql;
}
function salah(){
	?><script type="text/javascript">alert("Username dan Password salah!"+$username $password);</script> <?php 
}
$username = antiInjection(@$_POST['username']);
$password = antiInjection(md5(@$_POST['password']));
$login = @$_POST['login'];
if($login){
	if ($username == "" || strip_tags(htmlspecialchars($_POST['password'] ,ENT_QUOTES))== "") {
	?><script type="text/javascript">alert("Username dan Password tidak boleh kosong");</script> <?php 
	}else{
		$cek_1 = mysql_query("SELECT * FROM daftar_animasi WHERE username='$username' AND password='$password'");
		$hasil_1 = mysql_fetch_array($cek_1);
		$row_1 = mysql_num_rows($cek_1);
		$cek_2 = mysql_query("SELECT * FROM daftar_jaringan WHERE username='$username' AND password='$password'");
		$hasil_2 = mysql_fetch_array($cek_2);
		$row_2 = mysql_num_rows($cek_2);

		if($row_1 == 1 && $hasil_1['lomba'] == 'animasi'){
			session_register('username');
			session_register('level');
			$_SESSION['username'] = $hasil_1['username'];
			$_SESSION['level'] = $hasil_1['level'];
			header('Location: peserta/daftar_animasi.php');
		}else if($row_2 == 1 && $hasil_2['lomba'] == 'jaringan'){
			session_register('username');
			session_register('level');
			$_SESSION['username'] = $hasil_2['username'];
			$_SESSION['level'] = $hasil_2['level'];
			header('Location: peserta/daftar_jaringan.php');
		}else{
			salah();
		}
	}
}//klik login
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EPIM-2015</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://jti.polije.ac.id/templates/jt001_j25/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script><!-- scrolling -->
  <script src="js/scrolling-nav.js"></script>
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/full-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><strong>#EPIM-2015</strong></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li ><a href="#myCarousel" class="page-scroll"><span class="glyphicon glyphicon-home" style="font-size:12px;"></span> Beranda</a></li>
					<li><a href="#epim2015" class="page-scroll" ><span class="glyphicon glyphicon-star" style="font-size:12px;"></span> Epim 2015</a></li>
					<li><a href="#berita" class="page-scroll" ><span class="glyphicon glyphicon-bullhorn" style="font-size:12px;"></span> Berita</a></li>
					<li><a href="#kegiatan" class="page-scroll"><span  class="glyphicon glyphicon-tags" style="font-size:12px;"></span> Kegiatan</a></li>
					<li><a href="#daftar" class="page-scroll"><span  class="glyphicon glyphicon-th-list" style="font-size:12px;"></span> Daftar</a></li>
          <li><a href="#kontak" class="page-scroll"><span class="glyphicon glyphicon-earphone" style="font-size:12px;"></span> Kontak</a></li>
         	<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-log-in" style="font-size:12px;"></span> Login</a>
	        	<div class="dropdown-menu" style="padding:15px;" role="menu">
              <form class="form-horizontal" action="" method="POST">
								<input class="form-control login" type="text" name="username" placeholder="username">
								<input class="form-control login" type="password" name="password" placeholder="password">
								<input class="btn btn-success login" type="submit" name="login" value="Login">
							</form>
						</div>
					</li>
        </ul>
      </div>
    </div>
	</nav>

<!-- Carousel
================================================== -->
<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/epim.jpg');">
            </div>
            <!-- <div class="carousel-caption">
                <h2>Caption 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div> -->
        </div>
        <div class="item">
        				  <!-- Set the second background image using inline CSS below. -->
        					<div class="fill" style="background-image:url('img/slider/slider1.jpg');"></div>
        				</div>
        <div class="item">
        				  <!-- Set the second background image using inline CSS below. -->
        					<div class="fill" style="background-image:url('img/slider/slider2.jpg');"></div>
        				</div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>

<!-- Beranda -->
<!-- <section id="beranda" class="beranda-section">
	<img src="img/slider/epim.jpg" alt="" width="100%" height="auto">
	img src="img/bg/bg_services.jpg" alt="" width="100%" height="auto"
	<div class="desc-beranda">
		
		<a href="#epim2015" class="page-scroll"><button class="btn btn-primary">Pelajari Selengkapnya</button></a>
	</div>
</section> -->

<!-- Epim-2015 -->	
<section id="epim2015" class="epim2015-section">
	<div class="container">
		<div class="heading-epim2015">
	    	<h1>EPIM-2015</h1>
	    </div>
	    <div class="row">
	    	<div class="col-md-6">
	    		<img src="img/epim-2015.jpg" alt="gambar" width="100%" height="auto">
	    	</div>
	    	<div class="col-md-6">
	    		<div class="konten-epim2015 text-justify">
		    		<p>Expo Pekan Ilmiah Mahasiswa (EPIM-TI) merupakan agenda kegiatan rutin tahunan yang akan diselenggarakan oleh Jurusan Teknologi Informasi Politeknik Negeri Jember. Kegiatan ini melibatkan segenap civitas akademika Jurusan Teknologi Informasi sehinggu juga menjadi agenda rutin tahunan Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ-TI)</p>

					<p>Pada tahun 2015 ini, rangkaian kegiatan akan diselenggarakan pada tanggal 10-12 Desember 2015 di Gedung Aula Soetrisno Widjaja dan Gedung Olahraga Perjuangan 45 Politeknik Negeri Jember. EPIM Sendiri akan menghadirkan beberapa lomba lomba-lomba bidang TI dan pameran teknologi informasi yang melibatkan berbagai pemangku kepentingan dan pelaku usaha dibidang teknologi informasi dan bidang Agroindustri yang tentunya sayang untuk di lewatkan event akbar ini.</p>

		    	</div>
	    	</div>
	    </div>
	</div>
</section><!-- /epim2015-section -->

<!-- Berita -->
<section id="berita" class="berita-section">
  <div class="container">
    <div class="heading-berita">
    	<h1>Berita Terbaru</h1>
    </div>
   <div class="row">
	   	
	<?php 
                    $q="SELECT * FROM berita where status = 1 ORDER BY tanggal desc ";
                    $r=mysql_query($q);
                    while ($row=mysql_fetch_array($r)) {
    ?>
		<div class="col-md-6" style="padding:0;">
	   		<a href="pages/berita.php?id=<?php echo $row['id']; ?>">
	   			<div class="item-berita">
			   		<p class="tanggal-publish-berita"><?php $tanggal = tgl_indo($row['tanggal']); echo $tanggal; ?></p>
			   		<h2 class="judul-berita"><?php echo $row['judul']; ?></h2>
			   		<p class="isi-berita"><?php $blurb = substr(strip_tags($row['isi']),0,60); echo $blurb."...";		
				 ?></p>
	   			</div>
	   		</a>
	   	</div>
	 <?php
					}
	?>  	
   	</div>
	
   <!-- <div class="row">
   	<nav>
   	  <ul class="pager" style="text-align:right;">
   	    <a href="pages/berita.php" target="_blank"><button class="btn btn-danger btn-lg" style="border-radius:0;">Lihat Berita Lainnya <span aria-hidden="true">&rarr;</span> </button></a>
   	  </ul>
   	</nav>
   </div> -->

  </div>
</section><!-- /berita-section -->

<!-- Kegiatan -->
<section id="kegiatan" class="kegiatan-section">
	<div class="container">
		<div class="heading-kegiatan">
			<h1>Kegiatan</h1>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-4">
			<div class="item-kegiatan">
				<a data-toggle="modal" data-target="#beritaAnimasi"><img class="imgKegiatan" src="img/animasi_.jpg" alt="Animasi" width="75%" height="auto"></a>
        		<h4>Lomba Animasi</h4>
				<!-- <p>Download :</p> -->
				<!-- <p><a class="myLink" href="https://www.dropbox.com/s/not2y8r4g59r83j/artikel%20lomba%20animasi.docx?dl=0">syarat dan ketentuan</a></p> -->
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-4">
			<div class="item-kegiatan">
				<a data-toggle="modal" data-target="#beritaJaringan"><img class="imgKegiatan" src="img/jaringan_.jpg" alt="Animasi" width="75%" height="auto"></a>
        		<h4>Lomba Jaringan</h4>
				<!-- <p>Download :</p> -->
				<!-- <p><a class="myLink" href="https://www.dropbox.com/s/7j0emsyfljn3n46/Lomba%20Jaringan%20Komputer.docx?dl=0">syarat dan ketentuan</a></p> -->
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-4">
			<div class="item-kegiatan">
				<a data-toggle="modal" data-target="#beritaPoster"><img class="imgKegiatan" src="img/poster_.jpg" alt="Animasi" width="75%" height="auto"></a>
        		<h4>Lomba Desain Poster</h4>
				<!-- <p>Download :</p> -->
				<!-- <p><a class="myLink" href="">syarat dan ketentuan</a></p> -->
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-4">
			<div class="item-kegiatan">
				<a data-toggle="modal" data-target="#beritaPameran"><img class="imgKegiatan" src="img/pameran_.jpg" alt="Animasi" width="75%" height="auto"></a>
        		<h4>Pameran Teknologi</h4>
				<!-- <p>Download :</p> -->
				<!-- <p><a class="myLink" href="">syarat dan ketentuan</a></p> -->
			</div>
		</div>
	</div>
</section><!-- /kegiatan-section -->


<!-- Daftar -->
<section id="daftar" class="daftar-section">
 	<div class="container">
 		<div class="heading-daftar">
 			<h1>Daftar</h2>
 		</div>
 		<div class="col-md-6">
 			<h3>Pilih Kategori</h3>
 			<div class="pilih-kategori">
 				<button class="btn-lg btn-pilih-kategori" data-toggle="modal" data-target="#formAnimasi">Animasi</button>
 				<button class="btn-lg btn-pilih-kategori" data-toggle="modal" data-target="#formJaringan">Jaringan</button>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<h3>Alur daftar</h3>
 				<!-- <img src="img/Alur Pendaftaran Epim - fix.png" alt="" width="100%" height="auto"> -->
			<ol class="konten-alur-daftar">
				<li>Mengisi form pendaftaran sesuai kategori lomba</li>
				<li>Peserta melakukan verifikasi data</li>
				<li>Panitia mengirim no rekening pembayaran via sms</li>
				<li>Peserta melakukan registrasi pembayaran</li>
				<li>Upload scan bukti pembayaran</li>
				<li>Upload video animasi ke <a href="https://www.youtube.com/">youtube</a></li>
				<li>Cantumkan link video pada form yang sudah disediakan</li>
				<li>Panitian melakukan validasi data</li>
				<li>Peserta mencetak bukti pembayaran</li>
			</ol>
			<ul>
				<li><i>*) tahap 6 dan 7 hanya untuk peserta lomba animasi</i></li>
			</ul>
 		</div>
 	</div>
</section>

<!-- Daftar -->
<section id="kontak" class="kontak-section"> 
 	<div class="container">
 		<div class="heading-kontak">
 			<h1>Kontak</h2>
 		</div>
 		<div class="row">
 			<div class="col-md-6">
 				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4241205875646!2d113.72308149999999!3d-8.1599532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695c9e4065a57%3A0xaae5ad05caf3aa49!2sPoliteknik+Negeri+Jember!5e0!3m2!1sid!2sid!4v1443502794825" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
 			</div>
 			<div class="col-md-6" style="color:#fff;">
 				<div class="row">
 					<div class="col-md-6">
 						<h4>Kategori Animasi</h4>
              <span class="glyphicon glyphicon-user"></span> Mudzakir<br>
              <span class="glyphicon glyphicon-phone-alt"></span> 0856-0864-0003<br>
              <span class="glyphicon glyphicon-envelope"></span> mudzakkir1505@gmail.com<br>
 					</div>
 					<div class="col-md-6">
 						<h4>Kategori Jaringan</h4>
              <span class="glyphicon glyphicon-user"></span> Yudi<br>
              <span class="glyphicon glyphicon-phone-alt"></span> 0896-3082-1034<br>
              <span class="glyphicon glyphicon-envelope"></span> yudifery4@gmail.com<br>
 					</div>
 					<div class="col-md-6">
 						<h4>Desain Poster</h4>
              <span class="glyphicon glyphicon-user"></span> Ulfia<br>
              <span class="glyphicon glyphicon-phone-alt"></span> 0859-1240-0886<br>
              <span class="glyphicon glyphicon-envelope"></span> ulfiah.rohmah@gmail.com<br>
 					</div>
 					<div class="col-md-6">
 						<h4>Pemesanan Tiket</h4>
              <span class="glyphicon glyphicon-user"></span> Zacky<br>
              <span class="glyphicon glyphicon-phone-alt"></span> 0857-3164-6469<br>
              <span class="glyphicon glyphicon-envelope"></span> zbacyaa@gmail.com<br>
 					</div>
 				</div>
 				<div class="row" style="margin-top:30px;">
 					<div class="col-md-4 text-center">
 						<a href="https://www.facebook.com/EPIM-TI-Polije-101282766899288/"><i id="social-network" class="fa fa-facebook-square" style="font-size: 10em;"></i></a>
 					</div>
 					<div class="col-md-4 text-center">
 						<a href="https://twitter.com/@epim_ti "><i id="social-network" class="fa fa-twitter-square " style="font-size: 10em;"></i></a>
 					</div>
 					<div class="col-md-4 text-center">
 						<a href="https://plus.google.com/100711812266388120795/"><i id="social-network" class="fa fa-google-plus-square" style="font-size: 10em;"></i></a>
 					</div>
 				</div>
 
 			</div>
 		</div>
 		<div class="footer-kontak">
 			<p><i style="color:#fff;"> &copy EPIM 2015 - Use Technology to Make the World a Better Place</i></p>
 		</div>
 	</div>
 </section> <!-- /kontak-section -->


 <!-- Diselenggarakan -->
 <!-- <section id="diselenggarakan" class="diselenggarakan-section">
 	<div class="container">
 		<h1>Diselanggarakan Oleh</h1>
 	</div>
 </section> -->

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="js/jquery.min.js"></script-->
    <!--script src="js/bootstrap.min.js"></script-->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--script src="../../assets/js/vendor/holder.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->
   <nav class="navbar navbar-inverse navbar-fixed-bottom" style="min-height:20px;">
		<div class="container">
			<p style="margin:5px 0 5px 0; color:#999;">&copy #EPIM 2015 - Use Technology to Make the World a Better Place</i></p>
		</div>
   </nav>
</body>
</html>

<!-- MODAL -->










 <!-- formAnimasi ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="formAnimasi" class="modal fade" role="dialog">
	  <div class="modal-dialog"> 

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Form Pendaftaran Lomba Animasi</h4>
		  </div>
		  <div class="modal-body"><?php


			if(isset($_POST['submitted'])==1){
				$anm_team =strip_tags(htmlspecialchars(@$_POST['team'], ENT_QUOTES));
				$anm_sekolah=strip_tags(htmlspecialchars(@$_POST['sekolah'], ENT_QUOTES));
				$anm_email=strip_tags(htmlspecialchars(@$_POST['email'], ENT_QUOTES));
				$anm_no_hp=strip_tags(htmlspecialchars(@$_POST['no_hp'], ENT_QUOTES));
				$anm_ketua=strip_tags(htmlspecialchars(@$_POST['ketua'], ENT_QUOTES));
				$anm_anggota1=strip_tags(htmlspecialchars(@$_POST['anggota1'], ENT_QUOTES));
				$anm_anggota2=strip_tags(htmlspecialchars(@$_POST['anggota2'], ENT_QUOTES));
				$anm_username=strip_tags(htmlspecialchars(@$_POST['username'], ENT_QUOTES));
				$anm_password = strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES));
				$anm_password2 = strip_tags(htmlspecialchars(@$_POST['password2'], ENT_QUOTES));

				$selectMax = "SELECT * FROM daftar_animasi WHERE id_daftar IN (SELECT MAX(id_daftar) FROM daftar_animasi)";
				$execute_selectMax = mysql_query($selectMax);
				$resultMax = mysql_fetch_array($execute_selectMax);
				$urutanANM = substr($resultMax['id_daftar'],3);
				if($urutanANM<9){
					$urutanANM ++; 	$newIdANM = "ANM0"."$urutanANM";
				}else if($urutanJRG<99){
					$urutanANM ++; 	$newIdANM = "ANM"."$urutanANM";
				}else{
					exit();
				}

				$UsEr = mysql_query("SELECT * FROM daftar_animasi where username='$anm_username'");
				$cekUsEr = mysql_num_rows($UsEr);
				if ($cekUsEr >0){
					?><script type="text/javascript">alert("Username Sudah Dipakai");</script> <?php
					exit();
				}
				$TeAm_ = mysql_query("SELECT * FROM daftar_animasi where nama_team='$anm_team'");
				$cekTeAm_ = mysql_num_rows($TeAm_);
				if ($cekTeAm_ >0){
					?><script type="text/javascript">alert("Nama Team Sudah Dipakai");</script> <?php
					exit();
				}
				if($anm_password != $anm_password2){
					?><script type="text/javascript">alert("Akun Gagal Dibuat! Password tidak sama");</script> <?php 	
					exit();	
				}else{
									
				$fileDir = "img/foto/animasi/";
					
					if(!empty($_FILES['foto_ketua']['tmp_name']) && $_FILES['foto_ketua']['error']==0){
						if($_FILES['foto_ketua']['type']=="image/jpg"){
							$foto_ketuaFix = "ImgPesertaAnimasi_".$anm_team."_ketua.jpg";
							move_uploaded_file( $_FILES['foto_ketua']['tmp_name'], $fileDir.$foto_ketuaFix);
						}else if($_FILES['foto_ketua']['type']=="image/jpeg"){
							$foto_ketuaFix = "ImgPesertaAnimasi_".$anm_team."_ketua.jpeg";
							move_uploaded_file( $_FILES['foto_ketua']['tmp_name'], $fileDir.$foto_ketuaFix);
						}else{	
						}
					}else{
					}
					if(!empty($_FILES['foto_anggota1']['tmp_name']) && $_FILES['foto_anggota1']['error']==0){
						if($_FILES['foto_anggota1']['type']=="image/jpg"){
							$foto_anggota1Fix = "ImgPesertaAnimasi_".$anm_team."_anggota1.jpg";
							move_uploaded_file( $_FILES['foto_anggota1']['tmp_name'], $fileDir.$foto_anggota1Fix);
						}else if($_FILES['foto_anggota1']['type']=="image/jpeg"){
							$foto_anggota1Fix = "ImgPesertaAnimasi_".$anm_team."_anggota1.jpeg";
							move_uploaded_file( $_FILES['foto_anggota1']['tmp_name'], $fileDir.$foto_anggota1Fix);
						}else{
						}
					}else{
					}
					if(!empty($_FILES['foto_anggota2']['tmp_name']) && $_FILES['foto_anggota2']['error']==0){
						if($_FILES['foto_anggota2']['type']=="image/jpg"){
							$foto_anggota2Fix = "ImgPesertaAnimasi_".$anm_team."_anggota2.jpg";
							move_uploaded_file( $_FILES['foto_anggota2']['tmp_name'], $fileDir.$foto_anggota2Fix);
						}else if($_FILES['foto_anggota2']['type']=="image/jpeg"){
							$foto_anggota2Fix = "ImgPesertaAnimasi_".$anm_team."_anggota2.jpeg";
							move_uploaded_file( $_FILES['foto_anggota2']['tmp_name'], $fileDir.$foto_anggota2Fix);
						}else{
						}
					}else{
					}
					
					$smpn_today=date("Y-m-d");
					$q = "insert into daftar_animasi values('$newIdANM','$smpn_today','$anm_sekolah','$anm_team','$anm_ketua','$foto_ketuaFix','$anm_no_hp','$anm_email','$anm_anggota1','$foto_anggota1Fix','$anm_anggota2','$foto_anggota2Fix','animasi','$anm_username',md5('$anm_password'),'','','0','peserta')";
					$r = mysql_query($q);
					
				
					if($r){
						?><script type="text/javascript">alert("Akun Berhasil Dibuat, Silahkan Login");</script> <?php 
					}else{
						?><script type="text/javascript">alert("Akun Gagal Dibuat! Silahkan Coba Lagi");</script> <?php 
					}
				}
			}
			?>
			
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
		            <label for="team">Nama Team</label>
					<input type="text" class="form-control" name="team" value="" required/>
				</div>
				
				<div class="form-group">
		            <label for="sekolah">Asal Sekolah</label>
					<input type="text" class="form-control" name="sekolah" value="" required/>
				</div>
				
				<div class="form-group">
		            <label for="ketua">Nama Ketua</label>
					<input type="text" class="form-control" name="ketua" value="" required/>
				</div>

				<div class="form-group">
		            <label for="foto_ketua">Foto Ketua (*.jpg, *.jpeg max 1 MB)</label>
					<input type="file" name="foto_ketua" required/>
				</div>

				<div class="form-group">
		            <label for="no_hp">No Telpon Ketua</label>
					<input type="text" class="form-control" name="no_hp" value="" required/>
				</div>

				<div class="form-group">
		            <label for="email">Email Ketua</label>
					<input type="text" class="form-control" name="email" value="" required/>
				</div>

				<div class="form-group">
		            <label for="anggota1">Nama Anggota 1</label>
					<input type="text" class="form-control" name="anggota1" value="" required/>
				</div>

				<div class="form-group">
		            <label for="foto_anggota1">Foto Anggota 1 (*.jpg, *.jpeg max 1 MB)</label>
					<input type="file"  name="foto_anggota1" required/>
				</div>	

				<div class="form-group">
		            <label for="anggota2">Nama Anggota 2</label>
					<input type="text" class="form-control" name="anggota2" value="" required/>
				</div>

				<div class="form-group">
		            <label for="foto_anggota2">Foto Anggota 2 (*.jpg, *.jpeg max 1 MB)</label>
					<input type="file"name="foto_anggota2" required/>
				</div>				
				
				<div class="form-group">
		            <label for="username">Username</label>
					<input type="text" class="form-control" name="username" value="" required/>
				</div>

				<div class="form-group">
		            <label for="password">Password</label>
					<input type="password" class="form-control" name="password" value="" required/>
				</div>

				<div class="form-group">
		            <label for="password2">Verifikasi Password</label>
					<input type="password" class="form-control" name="password2" value="" required />
				</div>

				<button type="submit" class="btn btn-success"> Simpan</button>
				<input type="hidden" name="submitted" value="1">
					
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>















 <!-- formJaringan ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id="formJaringan" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Pendaftaran Lomba Jaringan</h4>
      </div>
      <div class="modal-body">
	  <?php if(isset($_POST['submitted2'])==1){	
	  	$selectMax = "SELECT * FROM daftar_jaringan WHERE id_daftar IN (SELECT MAX(id_daftar) FROM daftar_jaringan)";
			$execute_selectMax = mysql_query($selectMax);
			$resultMax = mysql_fetch_array($execute_selectMax);
			$urutanJRG = substr($resultMax['id_daftar'],3);
			if($urutanJRG<9){
				$urutanJRG ++; 	$newIdJrg = "JRG0"."$urutanJRG";
			}else if($urutanJRG<99){
				$urutanJRG ++; 	$newIdJrg = "JRG"."$urutanJRG";
			}else{
				exit();
			}

	  		
	  		$UsEr = mysql_query("SELECT * FROM daftar_jaringan where username='$_POST[username]'");
				$cekUsEr = mysql_num_rows($UsEr);
				if ($cekUsEr >0){
					?><script type="text/javascript">alert("Username Sudah Dipakai");</script> <?php
					exit();
				}
				if($_POST['password'] != $_POST['password2']){
					?><script type="text/javascript">alert("Akun Gagal Dibuat! Password tidak sama");</script> <?php
					exit();
				}else{
		$foto = $_FILES['foto']['name'];
		
		$smpn_today=date("Y-m-d");
		
			if($_FILES['foto']['error']==0 && !empty($_FILES['foto']['tmp_name'])){
				echo $_FILES['foto']['error']. $_FILES['foto']['tmp_name'];
				if($_FILES['foto']['type']=="image/jpg"){ 
					$fileNameFix = "ImgPesertaJaringan_".$_POST['nama'].".jpg";
					move_uploaded_file($_FILES['foto']['tmp_name'], "img/foto/jaringan/".$fileNameFix);
				}else if($_FILES['foto']['type']=="image/jpeg"){ 
					$fileNameFix = "ImgPesertaJaringan_".$_POST['nama'].".jpeg";
					move_uploaded_file($_FILES['foto']['tmp_name'], "img/foto/jaringan/".$fileNameFix);
				}else{ 
				}
			}else{
			}
			$__nama		= strip_tags($_POST['nama']);	
			$__sekolah	= strip_tags($_POST['sekolah']);		
			$__no_hp	= strip_tags($_POST['no_hp']);		
			$__email	= strip_tags($_POST['email']);		
			$__username	= strip_tags($_POST['username']);		
			$__password	= strip_tags(md5($_POST['password']));		
			$q = "insert into daftar_jaringan values('$newIdJrg','$smpn_today','$__nama','$__sekolah','$fileNameFix','$__no_hp','$__email','jaringan','$__username','$__password','','0','peserta')";
			$r = mysql_query($q);
			if($r){
				?><script type="text/javascript">alert("Akun Berhasil Dibuat, Silahkan Login");</script> <?php 
			}else{
				?><script type="text/javascript">alert("Akun Gagal Dibuat! Silahkan Ulangi");</script> <?php 
			}
			}
		} ?>

			<form method="post" enctype="multipart/form-data">

				<div class="form-group">
		            <label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" value="" required/>
				</div>

				<div class="form-group">
		            <label for="sekolah">Asal Sekolah</label>
					<input type="text" class="form-control"name="sekolah" value="" required/>
				</div>
				
				<div class="form-group">
		            <label for="sekolah">Upload Foto</label>
					<input type="file" name="foto" required />
				</div>

				<div class="form-group">
		            <label for="no_hp">No Telpon</label>
					<input type="text" class="form-control" name="no_hp" value="" required onkeypress="return isNumberKey(event)"/>
				</div>

				<div class="form-group">
		            <label for="email">Email</label>
					<input type="email" class="form-control" name="email" value="" required />
				</div>

				<div class="form-group">
		            <label for="username">Username</label>
					<input type="text" class="form-control" name="username" value="" required/>
				</div>

				<div class="form-group">
		            <label for="password">Password</label>
					<input type="password" class="form-control" name="password" value="" required/>
				</div>

				<div class="form-group">
		            <label for="password2">Verifikasi Password</label>
					<input type="password" class="form-control" name="password2" value="" required />
				</div>

				<button type="submit" class="btn btn-success"> Simpan</button>
				<input type="hidden" name="submitted2" value="1">
			</form>
      </div>
    </div>

  </div>
</div>





<!-- beritaAnimasi -->
<div id="beritaAnimasi" class="modal fade" role="dialog">
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
	  <h1 class="text-center">Lomba Animasi</h1>
		<!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lomba Animasi merupakan sebuah lomba karya cipta dalam bentuk visualisasi 2D atau 3D yang mengandung unsur kreatifitas dan inovasi untuk mengembangkan teknologi pertanian dimasa yang akan datang. Karya berbentuk animasi iklan layanan masyarakat.</p> -->
	  	<h4>Deskripsi</h4>
		<p>Lomba Animasi merupakan sebuah lomba karya cipta dalam bentuk visualisasi 2D yang mengandung unsur kreatifitas dan inovasi untuk mengembangkan teknologi pertanian dimasa yang akan datang. Karya berbentuk animasi iklan layanan masyarakat. </p>

		<h4>Bentuk Lomba</h4>
		Babak Penyisihan :
		<ol>
			<li>Tahap Pertama (Babak Penyisihan) <br>	
			Dalam tahap pertama atau babak penyisihan pertama tim yang sudah mendapat konfirmasi dari panitia nantinya wajib mengunggah file video animasi ke youtube dan mengirimkan link video yang terunggah di youtube ke halaman website EPIM, dengan format judul pengunggahan video di youtube EPIM-TI Polije Animasi [Nama Tim][Judul Karya].</li>

			<li>Tahap Kedua (Babak Penyisihan) <br>
			Dalam tahap kedua atau babak penyisihan kedua, peserta wajib hadir dalam acara pemutaran karya video animasi peserta yang berhasil masuk dalam tahap kedua dan mempresentasikan hasil karyanya langsung dihadapan dewan juri. Tahap kedua dilaksanakan dalam dua gelombang, gelombang pertama diikuti oleh 25 tim yang nantinya akan dipilih 5 tim terbaik , pada gelombang kedua diikuti oleh 25 tim yang nantinya akan dipilih 5 tim terbaik.</li>

			<li>Tahap Ketiga (Babak Final) <br>
			Dalam tahap ketiga atau babak final nantinya akan diikuti oleh 10 tim terbaik yang telah berhasil lolos dari tahap kedua baik dari gelombang pertama maupun dari gelombang kedua dan nantinya 10 tim tersebut akan membuat animasi dengan waktu yang ditentukan oleh panitia serta nantinya hasil dari animasi tersebut akan dipresentasikan kembali di hadapan juri.</li>
		</ol>

		<h4>Syarat dan Ketentuan</h4>
		<ol>
			<li>Peserta merupakan pelajar SMA/MA/SMK sederajat.</li>
			<li>Peserta berbentuk perorangan/tim maksimal 3 orang boleh mengirimkan lebih dari 1 produk video animasi.</li>
			<li>Video berupa animasi 2D dengan durasi minimal 2 menit dan maksimal 6 menit format file bebas (mp4, swf, mpeg, flv, dsb) resolusi 1280 x 720 (720p).</li>
			<li>Menyertakan logo EPIM-TI POLIJE 2015.</li>
			<li>Konsep cerita yang diangkat memiliki alur yang baik dan tidak berbelit-belit. Serta mampu mengemas pesan informatif yang terkandung dalam video animasi.</li>
			<li>Karya yang dikirimkan harus bersifat baru, orisinil, unik, tidak sedang atau pernah di ikutkan dalam lomba serupa.</li>
			<li>Karya harus berasosiasi positif, tidak boleh mengandung unsur ras, politik, agama, pornografi, pornoaksi, serta tidak menjatuhkan/mendiskreditkan pihak tertentu.</li>
			<li>Nilai orisinalitas. Secara umum, karya animasi yang dikirim tidak boleh mengandung elemen yang melanggar hak cipta dan etika pembuatan karya cipta (bukan tiruan).</li>
		</ol>
		<h4>Kriteria Penilaian</h4>
		<ol>
			<li>Estetika</li>
			<li>Suara  (V.O dan BackgroundSound)</li>
			<li>Komposisi </li>
			<li>Informatif</li>
			<li>Alur Cerita</li>
			<li>Detail</li>
			<li>Orisinil dan Keunikan</li>
		</ol>
		<p>*Pendafataran lomba dimulai pada tanggal 19 Oktober 2015 s.d. 20 November 2015</p>
	  </div>
    </div>

  </div>
</div>

<!-- beritaAnimasi -->
<div id="beritaJaringan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	  
      <div class="modal-body">
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
	  <h1 class="text-center">Lomba Jaringan</h1>
		<!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lomba jaringan komputer adalah lomba untuk menguji kemampuan membuat sebuah jaringan komputer dimana tempat atau kategorinya adalah Network System Administration. Peserta akan berkompetisi dengan peserta lain dalam kemampuan instalasi server Debian 7 beserta konfigurasinya dan peserta juga dituntut untuk mampu membuat server sendiri berbasis debian 7 yang sesuai dengan pesyaratan dan ketentuan lomba.</p> -->
	  	<h4>Deskripsi</h4>
		<p>Lomba jaringan komputer adalah lomba untuk menguji kemampuan membuat sebuah jaingan komputer dimana tema atau kategorinya adalah Network System Administration. Peserta akan berkompetisi dengan peserta lain dalam kemampuan instalasi server Debian 7 beserta konfigurasinya dan peserta juga dituntut untuk mampu membuat server sendiri berbasis debian 7 yang sesuai dengan pesyaratan dan ketentuan lomba.</p>
		<h4>Bentuk Lomba</h4>
		<ol>
			<li>Tahap Pertama: Test ujian di Politeknik Negeri Jember * <br>
			Peserta menjawab pertanyaan atau menyelesaikan kasus yang terkait dengan Jaringan komputer. Kemudian setelah tes dilakukan akan diseleksi 24 peserta dengan nilai terbaik untuk melanjutkan ke tahap penyisihan kedua.</li>
			<li>Tahap Kedua: Praktek Penyisihan Jaringan Komputer <br>
			Peserta yang telah lulus di tahap pertama akan diuji kemampuannya di dalam Instalasi dan konfigurasi server. Panitia menyediakan server bagi peserta untuk keperluan instalasi dan konfigurasi (dimana server tersebut bersisi iso, software dan keperluan lain untuk lomba termasuk repository lokal ). Nilai yang didapat peserta berdasarkan kepada keberhasilan dalam melakukan instalasi dan konfigurasi server dan waktu yang dibutuhkan untuk melakukan instalasi dan konfigurasi server tersebut. Kemudian setelah tes dilakukan akan diseleksi 10 peserta dengan nilai terbaik untuk melanjutkan ke tahap penyisihan ketiga.</li>
			<li>Babak Final <br>
			Peserta yang telah lulus di tahap kedua akan diuji kemampuannya di dalam konfigurasi server beserta troubleshotting yang ada pada soal final. Nilai yang didapat peserta berdasarkan kepada keberhasilan dalam melakukan konfigurasi server dan memecahkan trobleshooting yang akan muncul dalam soal, serta waktu yang dibutuhkan untuk menyelesaikan konfigurasi server beserta trobleshooting tersebut. Kemudian peserta dengan nilai terbaik sesuai kriterialah yang akan menjadi juara.</li>
		</ol>
		<h4>Kriteria Penilaian</h4>
		<ol>
			<li>Babak Penyisihan 1 (tes tulis) : <br>
			Pengetahuan umum di bidang jaringan komputer : <br>

			a.	Peserta akan diberikan soal tentang jaringan komputer dengan jumlah dan level soal tertentu. <br>
			b.	Peserta diharuskan menyelesaikan soal tersebut dalam kurun waktu yang ditentukan oleh panitia. <br>
			</li>
			<li>Babak Penyisihan 2 (tes praktek) : <br>
			Praktek tahap pertama mengenai jaringan komputer : <br>

			a.	Peserta akan diberikan soal tentang tes praktek yang akan dilaksanakan dengan soal praktek meliputi : <br>

			1.	Instalasi debian 7 dan firewall / router. <br>
			2.	Network connection (TCP/IP) <br>
			3.	DHCP <br>
			4.	NTP <br>
			5.	VPN <br>

			b.	Peserta diharuskan menyelesaikan soal tersebut dalam kurun waktu yang ditentukan oleh panitia.
			</li>
			<li>Babak final (tes praktek) : <br>
			Praktek final mengenai jaringan komputer : <br>

			A.	Peserta akan diberikan soal tentang tes praktek yang akan dilaksanakan dengan soal praktek meliputi : <br>
			a)	DNS <br>
			b)	Virtualisasi <br>
			c)	HTTP <br>
			d)	Mail server <br>
			e)	Web mail <br>
			f)	FTP <br>
			g)	Proxy <br>
			h)	SSH <br>
			i)	Samba dan printer sharing <br>
			j)	VPN <br>
			k)	NTP <br>
			</li>
			<li>Syarat dan ketentuan : <br>
				A.	Peserta merupakan siswa SMA/MA/SMK sederajat tingkat nasional <br>
				B.	Peserta boleh melakukan konfigurasi pada saat perlombaan berlangsung bukan pada saat sebelum lomba sehingga dapat meminimalisir kecurangan.<br>
				C.	Apabila peserta melakukan kecurangan akan segera dinyatakan gugur atau didiskualifikasi.<br>
				D.	Peserta merupakan siswa aktif dalam sebuah institusi yang diwakili (belum dinyatakan lulus hingga saat perlombaan).<br>
				E.	Peserta akan didampingi oleh satu orang pendamping, dan pendamping tidak diperbolehkan untuk masuk area perlombaan.<br>
				F.	Peserta tidak diperbolehkan untuk membawa alat komunikasi, buku panduan, dsb, yang akan memudahkan konfigurasi. <br>
				G.	Peserta dilarang berkomunikasi dengan sesama peserta lainnya.<br>
				H.	Peserta dilarang untuk berkomunikasi dengan pendamping.<br>
			</li>
		</ol>
		<p>*NB : Menyesuaikan dengan jumlah kuota peserta.</p>
	  </div>
    </div>

  </div>
</div>
<div id="beritaPoster" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h1 class="text-center">Desain Poster</h1>
				<p>Comming soon</p>
			 </div>
    </div>
  </div>
</div>
<div id="beritaPameran" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h1 class="text-center">Pameran Teknologi</h1>
		<p>Comming soon</p>
	  </div>
    </div>
  </div>
</div>
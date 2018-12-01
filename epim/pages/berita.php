<!DOCTYPE html>
<?php
include("config.php");
include("fungsi_tgl.php");
$id = $_REQUEST['id'];
?>
<html lang="en">
<head>
  <title>Berita|EPIM-2015</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/font-awesome.min.css">


  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script><!-- scrolling -->
  <script src="../js/scrolling-nav.js"></script>
  <link href="../css/carousel.css" rel="stylesheet">
  <link href="../css/berita.css" rel="stylesheet">
</head>
<body>
	<section class="header-section">
		
	</section>
	<section class="konten-section">
	
	<?php 
	$q="SELECT * FROM berita where id='$id'";
	$r=mysql_query($q);
	while ($row=mysql_fetch_array($r)) { ?>
	<div class="row">
		<div class="container">

				<!-- berita -->
				
				<div class="col-lg-8 col-lg-offset-2">
					
					<div class="bs-callout bs-callout-danger">
						<div class="bs-callout-judul">
							<h1><?php echo $row['judul']; ?></h1>
						</div>

					</div>
					<div class="tanggal-posting">
						<h4><?php $tanggal = tgl_indo($row['tanggal']); echo $tanggal; ?></h4>
					</div>
					
					<div class="isi-berita text-justify">
						<p><?php echo $row['isi'];?></p>
					</div>
					
				</div>
				<!-- sidebar 
				<div class="col-md-4">
					<div class="sidebar">
						<h1 class="sidebar-header">Daftar Berita</h1>
					
						<ul>
						<?php
					/*$q="SELECT * FROM berita where status = 0 ORDER BY tanggal desc";
                    $r=mysql_query($q);
                    	
                    while ($row=mysql_fetch_array($r)) {
						echo"<li><a href=''>$row[judul]</a></li>";
					}*/
						?>
						</ul>
					</div>
				</div>-->
			</div>
		</div>
	<?php } ?>
	</section>
</body>
</html>
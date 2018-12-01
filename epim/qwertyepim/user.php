<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
	
		header('Location: login.php');
		echo $_SESSION['username'];
	}else{
	}
?>
<?php
include('config.php');
?>
<!--
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
    <title></title>
    <link rel="stylesheet" href="../js/datetimepicker/kendo.common-material.min.css" />
    <link rel="stylesheet" href="../js/datetimepicker/kendo.material.min.css" />

    <script src="../js/datetimepicker/jquery.min.js"></script>
    <script src="../js/datetimepicker/kendo.all.min.js"></script>

 ================================================================================== -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script><!-- scrolling -->
  <script src="../js/scrolling-nav.js"></script>
  <link href="../css/carousel.css" rel="stylesheet">
  <link href="../css/admin.css" rel="stylesheet">
<html>
<head>
    <script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            //selector: "#mytextarea"
			
			
        });
    </script>
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation">
    <a href="logout.php"" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sign Out 
    </a>
  </li>
  <li role="presentation">
    <a href="berita.php"" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Berita 
    </a>
  </li>
  <li role="presentation">
    <a href="user.php"" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User 
    </a>
  </li>
  <li role="presentation">
    <a href="daftar.php"" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Daftar 
    </a>
  </li>
  
</ul>
<br>
<?php

			if(isset($_POST['delete2'])==1){
				$q = "delete from user where id=$_GET[id]";
				$r = mysqli_query($db,$q);
				
				if($r){
					echo "data terhapus";
					header('Refresh: 2');
				}else{
					echo "gagal".mysqli_error($db);
					echo $q;
				}
			}
			if(isset($_POST['submitted2'])==1){
				
				if(isset($_GET['id'])){
						
					$q = "update user set nama = '$_POST[nama]', username = '$_POST[username]', password = '$_POST[password]' where id = '$_GET[id]'";
					$r = mysqli_query($db,$q);
					
					if($r){
						echo "<span class='label label-success'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Berita sudah diganti</span>";
						header('Refresh: 2');
					}else{
						echo "<span class='label label-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Berita tidak terganti : </span>".mysqli_error($db);
						echo "<p>".$q."</p>";
					}
				
				}else{
				
					$q = "insert into user values('','$_POST[nama]','$_POST[username]','sha1($_POST[password])','')";
			
					$r = mysqli_query($db,$q);
					
					if($r){
						echo "<span class='label label-success'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Berita sudah tersimpan</span>";
						header('Refresh: 2');
					}else{
						echo "<span class='label label-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Berita tidak tersimpan : </span>".mysqli_error($db);
						echo "<p>".$q."</p>";
					}
				}
			}
			?>

			<?php
				if(isset($_GET['id'])){
					$q = "select * from user where id = $_GET[id]";
					$r = mysqli_query($db,$q);
					
					$edit2 = mysqli_fetch_assoc($r);
				}
			?>
<div class="row">
	<div class="col-md-3">
	
<h1>User Dashboard</h1>

		<div class ="list-group">
					<a class="list-group-item" href="user.php">
						<h4 class="list-group-item-heading"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah User</h4>
					</a>
			<?php
				$q = "select * from user";
				$r = mysqli_query($db,$q);
				
					while($page_list = mysqli_fetch_assoc($r)){ 
						$blurb = substr(strip_tags($page_list['username']),0,20);
					
					?>
						
					<a class="list-group-item" href="user.php?id=<?php echo $page_list['id'];?>">
						<h4 class="list-group-item-heading"><?php echo $page_list['nama']; ?></h4>
						<p class="list-group-item-text"><?php echo $blurb; ?></p>
					</a>
			<?php }	?>
		</div>
	</div>
	<div class="col-md-9">
	<h1>Form User</h1>
	<form method="post">
				Nama :<br>
				<input type="text" name="nama" value="<?php echo $edit2['nama'] ?>"/><br><br>
				Username :<br>
				<input type="text" name="username" value="<?php echo $edit2['username'] ?>"/><br><br>
				Password :<br>
				<input type="text" name="password" value="<?php echo $edit2['password'] ?>"/><br><br>
				<button type="submit"> Simpan</button>
				<button type="submit"> Hapus</button>
				<input type="hidden" name="submitted2" value="1">
				<input type="hidden" name="delete2" value="1">
				<input type="hidden" name="id" value="<?php echo $edit2['id'] ?>">
				
	</div>
</div>
</div>
</body>
</html>
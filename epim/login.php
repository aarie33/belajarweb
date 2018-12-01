<?php
require'../pages/config.php';

function antiInjection($data){
	$filter_sql = mysql_real_escape_string(stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter_sql;
}
$username = antiInjection(@$_POST['username']);
$password = antiInjection(md5(@$_POST['password']));
$login = @$_POST['login'];
if($login){
	if($_POST['username'] == "" || $_POST['password']==""){
		?><script type="text/javascript">alert("Username dan Password tidak boleh kosong");</script> <?php 
	}else{
		$cek = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
		$hasil = mysql_fetch_array($cek);
		$row = mysql_num_rows($cek);

		if($row > 0 ){
			session_register('username');
			$_SESSION['username'] = $hasil['username'];
			header('Location: index.php');
		}
	}
}
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">


<script src="../js/bootstrap.min.js"></script>
<html>
<head><title>Form Admin</title></head>
<body>
	
	<div class="container">
		<div class="col-md-4 col-md-offset-4 ">
			<h1 class="text-center">Form Login</h1>
			<div class="panel-black" >
			<form action="login.php" method="POST" class="form-horizontal">
			  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" rows="3"	 name="username" id="username" placeholder="Username">
					</div>
			  </div>
			  <div class="form-group">
					<div class="col-sm-12">
					  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
			  </div>
			  <div class="form-group">
					<div class="col-sm-12">
					  <input type="submit" name="login" value="Login" class="btn btn-success">
					</div>
			  </div>
			</form>
		</div>
		</div>
	</div>
</body>
</html>

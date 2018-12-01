<?php session_start();
if($_SESSION[user]==""){
	header('location:login.php');}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Angkutan Massal</title>
<style type="text/css">
*{padding:0px; margin:0px;}
.head{
	position:fixed;
	background:#09F;
	height:40px;
	right:0px;
	left:0px;
	top:0px;
	border-bottom:2px solid #999;
	box-shadow:0px 6px 6px -6px;
}
.menu{
	position:fixed;
	background:#09F;
	height:40px;
	width:140px;
	right:70px;
	top:0px;
	border-bottom:2px solid #999;
	box-shadow:0px 6px 6px -6px;
}
.menu li:hover{
	background:orange;
}
.menu li{
	list-style-type:none;
	float:left;
	border-left:solid 2px #999;
	height:40px;
	padding-right:5px;
	padding-left:5px;
}
.menu a {
	text-decoration:none;
}
.menu h3{
	text-align:center;
	vertical-align:middle;
	padding-top:10px;
}
#header{
	margin-left:10px;
	height:15px;
}
iframe{
	margin-top:50px;
}
</style>
</head>

<body>
<div class="head"><h1 id="header">Angkutan Massal</h1>
<div class="menu">
<ul><li><a href="tiket.php" target="isi"><h3>Home</h3></a></li>
<li><a href="logout.php"><h3>Logout</h3></a></li></ul></div>
</div>
<iframe name="isi" src="tiket.php" height="600" width="99%" frameborder="0"></iframe>
</body>
</html>
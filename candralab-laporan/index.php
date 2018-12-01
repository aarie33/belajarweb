<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>UMR 2013 </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">	body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
</style>
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<script type="text/javascript" src="assets/js/jquery.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner"></div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="span8 offset2">
					<div>
						<?php
require_once ('inc/config.php');
$pg = '';
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */

if(!isset($_GET['pg'])) {

	include ('umr2013/umr2013_view.php');

} else {
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";
}?>
					</div><!--/span-->
				</div><!--/row-->
			</div>
			<footer>
				<p style="text-align: center">
					&copy;belajar 2012
				</p>
			</footer>
		</div><!--/.fluid-container-->
	</body>
</html>

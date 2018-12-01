<?php
error_reporting(0);

$db = mysqli_connect('localhost','root','','db_sjti') or die('error : '.mysqli_connect_error());

$q="select * from berita";
$r=mysqli_query($db,$q);
$page=mysqli_fetch_assoc($r);

?>
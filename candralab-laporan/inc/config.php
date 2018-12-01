<?php
	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','test');
	
	mysql_connect("localhost","root","");
	mysql_select_db("test");
	
	
//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>

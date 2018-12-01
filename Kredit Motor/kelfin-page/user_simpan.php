<?php
ini_set("display_errors",0);
include "config.php";
include "connect.php";
if ($_GET['id'] != "") {
//modus delete data
$query = "delete from user where
			KodeUser = '$_GET[id]'";
}
else {
if($_POST['btnSimpan']=="Edit") {
//modus edit data lama
$query = "update user set
		  KodeUser = '$_POST[KodeUser]',
		  UserName = '$_POST[UserName]',
		  Password = '$_POST[Password]',
		  Status = '$_POST[Status]'
		  where KodeUser = '$_POST[KodeUser]'";
}
else{
//modus input data baru
$query = "insert into user (
		KodeUser,
		UserName,
		Password,
		Status) values(
		'$_POST[KodeUser]',
		'$_POST[UserName]',
		'$_POST[Password]',
		'$_POST[Status]')";
		
}
}
//echo $query;
$execute = mysql_query($query);
$jumlah = mysql_affected_rows();
echo"<script>
	alert ('Data dikenai: $jumlah baris');
	window.location = 'home.php?page=user_view';
	</script>";
	
	

?>


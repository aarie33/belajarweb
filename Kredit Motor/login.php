<?php
ini_set("display_errors",0);
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
include("kelfin-includes/defines.php");
include("kelfin-includes/connect.php");
$sql = mysql_query("select * from user where UserName = '$username'");
$i=1;
while ($data = mysql_fetch_array($sql)){
$user = $data['UserName'];
$pass = $data['Password'];
$status = $data['Status'];
$i++;
}
if($username == ""){
echo "<script>
	  alert('Login Gagal');
	  window.location = 'login.html';
	  </script>
	  ";
}

if (($username ==$user ) && ($password ==$pass )){
session_start();
	$_SESSION['username']=$username;
	$_SESSION['Status'] = $status;
	
echo "<script>
	  alert('Login sukses');
	  window.location = 'index.php';
	  </script>
	  ";
}
else{
echo "<script>
	  alert('Login Gagal');
	  window.location = 'login.html';
	  </script>
	  ";
}
?>
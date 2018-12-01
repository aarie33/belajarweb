<?php
session_start();
$_SESSION['pengguna']="";
unset($_SESSION['username']);
session_destroy();
echo "<script>
	window.location = 'index.php';
	</script>";
?>
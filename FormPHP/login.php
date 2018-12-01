<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Selamat Datang</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include "koneksi.php";
if(isset($_COOKIE["username"])){
	header('location:index.php');
}else{
	if(isset($_REQUEST["submitlogin"])){
		$sql=mysqli_query($db,"SELECT*FROM user WHERE user='$_REQUEST[user]'");
		$num=mysqli_num_rows($sql);
		if($num <> 0){
			$isi=mysqli_fetch_array($sql);
			if($_REQUEST["user"]==$isi["user"]){
				if($_REQUEST["pass"]==$isi["pass"]){
					session_start();
					$_SESSION["username"]=$isi["user"];
					$_SESSION["password"]=$isi["pass"];
					setcookie("username","$isi[user]",time()+10);
					header('location:index.php');
				}else{
					echo "<script>alert(\"Password salah!\");</script>";
				}
			}else{
				echo "<script>alert(\"Username salah!\");</script>";
			}
		}else{
			echo "<script>alert(\"Username tidak ditemukan!\");</script>";
		}
	}
}?>
	<div id="header"><h1>Latihan Form</h1></div>
    <div id="wrapper">
        <div id="inputs">
            <form name="login" action="login.php" method="post">
                <table align="center">
                    <tr><td>
                    <label>User</label></td>
                    <td><input type="text" name="user" placeholder="username" required></td></tr>
                    <tr><td>
                    <label>Password</label></td>
                    <td><input type="password" name="pass" placeholder="password" required></td></tr>
                    </table>
                    <input type="submit" name="submitlogin" value="Login">
            </form>
        </div>
    </div>

</body>
</html>
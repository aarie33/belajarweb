<?php
session_start();
echo "Selamat Datang ".$_SESSION['nm']."<br>"."Anda Berhasil Login";
?>

<title>Selamat Datang</title>
<link href="sessionstyle.css" rel="stylesheet" type="text/css" />

<br />
<br />
<a href="ekskul3.php">Lanjut untuk memilih ekstrakurikuler</a><br />
<a href="session.php">Keluar</a>
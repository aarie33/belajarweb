<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Latihan Form</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
</head>

<body>
<?php
session_start();
if(isset($_SESSION["username"]) || $_COOKIE["username"]){ ?>
    <div id="header"><h1>Latihan Form</h1></div>
    <div id="wrapper">
    <a href="logout.php">Logout</a> <a href="hasil.php">Hasil</a><br><br>
        <form name="input" action="proses_simpan.php" method="post" enctype="multipart/form-data">
            <div id="inputs">
                Nama : <input type="text" name="nama" placeholder="Nama Mahasiswa" required><br>
                Telp : <input type="text" name="telp" placeholder="Nomor Telepon" required onKeyPress="return hanya_angka()"><br><br>
            </div>
        <div id="options">
            Pilih Prodi :
            <select name="prodi" required>
            <option value="">---- Pilih Prodi ----</option>
            <?php
            include "koneksi.php";
            $sql_pro=mysqli_query($db,"SELECT*FROM prodi ORDER BY kode_prodi");
            if(mysqli_num_rows($sql_pro)<>0){
                while($data_pro=mysqli_fetch_array($sql_pro)){
                    echo "<option>$data_pro[nama_prodi]</option>";
                }
            }
            ?>
            </select><br>
        </div>
            <p>Jenis Kelamin : </p>
            <input type="radio" name="jk" value="P" required>Pria
            <input type="radio" name="jk" value="W" required>Wanita<br><br>
            Foto <input type="file" name="foto" accept="image/*"><br><br>
            <input type="submit" value="Simpan">
        </form>	
    </div>
    <script>
    function hanya_angka (kejadian){
        kejadian = (kejadian) ? kejadian : window.event;
        var charCode = (kejadian.which) ? kejadian.which : kejadian.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)){
            //charcode diatas adalah kode ascii untuk huruf a-z
            //alert('Inputan anda berupa huruf!!');
            return false;
        }
        return true;
    }
    </script>
<?php
}else{ 
	echo "<script>alert(\"Silahkan login terlebih dahulu!\"); window.location=\"login.php\";</script>";
}
?>
</body>
</html>
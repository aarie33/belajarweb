<?php
include "koneksi.php";
$id=$_REQUEST['id'];
$data_mhs=mysqli_query($db, "SELECT*FROM mahasiswa WHERE id_mhs='$id'");
$isi_mhs=mysqli_fetch_array($data_mhs);
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edit Form</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
</head>

<body>
<div id="header"><h1>Edit Form</h1></div>
<div id="wrapper">
	<form name="input" action="proses_edit.php" method="post" enctype="multipart/form-data">
        <div id="inputs">
            NIM : <input type="text" name="nim" readonly required value="<?php echo $id;?>"><br>
            Nama : <input type="text" name="nama" placeholder="Nama Mahasiswa" required value="<?php echo $isi_mhs['nama_mhs'];?>"><br>
            Telp : <input type="text" name="telp" placeholder="Nomor Telepon" required value="<?php echo $isi_mhs['telp'];?>"><br><br>
        </div>
	<div id="options">
        Pilih Prodi :
        <select name="prodi" required>
        <option value="">---- Pilih Prodi ----</option>
        <?php
        $sql_pro=mysqli_query($db,"SELECT*FROM prodi ORDER BY kode_prodi");
        if(mysqli_num_rows($sql_pro)<>0){
            while($data_pro=mysqli_fetch_array($sql_pro)){ ?>
                <option <?php if($isi_mhs['prodi']==$data_pro['nama_prodi']){echo "selected";}?>> 
				<?php echo $data_pro['nama_prodi'];?>
                </option>
		<?php
            }
        }
        ?>
        </select><br>
    </div>
        <p>Jenis Kelamin : </p>
        <input type="radio" name="jk" value="P" required <?php if($isi_mhs['jenis_kelamin']=="P"){ echo "checked";}?>>Pria
        <input type="radio" name="jk" value="W" required <?php if($isi_mhs['jenis_kelamin']=="W"){ echo "checked";}?>>Wanita<br>
        <img src="images/<?php echo $isi_mhs["foto"];?>" height="150"><br>
        <input type="file" name="foto" accept="image/*"><br><br>
        <input type="submit" value="Edit"> <a href="hasil.php">Kembali</a>
    </form>	
</div>
</body>
</html>
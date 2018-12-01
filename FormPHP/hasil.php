<?php
include "koneksi.php";
?>
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
if(isset($_SESSION["username"])){ ?>
    <div id="header"><h1>Hasil Input</h1></div>
    <div id="wrapper">
    <a href="logout.php">Logout</a> <a href="index.php">Input</a><br><br>
    <form style="text-align:right; margin-right:10px;"><input type="search" name="cari" placeholder="Cari" required> <input type="submit" value="Cari"></form><br>
    <a href="hasil.php">Tampilkan semua</a><br><br>
        <table width="100%" border="1">
            <tr>
                <th align="center" height="30" bordercolor="#000000"><strong>Foto</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>ID</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>Nama</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>No. Telepon</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>Program Studi</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>Jenis Kelamin</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>Edit</strong></th>
                <th align="center" height="30" bordercolor="#000000"><strong>Hapus</strong></th>
            </tr>
            <?php
            $warna1 = "#FFFFFF";
            $warna2 = "#CCCCCC";
            $warna = $warna1;
			if(isset($_REQUEST["cari"])){
				$sql_sel="SELECT*FROM mahasiswa WHERE nama_mhs LIKE '%$_REQUEST[cari]%' OR telp LIKE '%$_REQUEST[cari]%'";
			}else{
	            $sql_sel="SELECT*FROM mahasiswa";
			}
            $query_sel=mysqli_query($db,$sql_sel);
            while($sql_res=mysqli_fetch_array($query_sel)){
                if($warna == $warna1){
                    $warna = $warna2;
                }else{
                    $warna = $warna1;
                }
            ?>
            <tr bgcolor="<?php echo $warna;?>">
                <td align="center" height="30" bordercolor="#000000"><img src="images/<?php echo $sql_res["foto"];?>" height="30"></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><?php echo $sql_res[0];?></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><?php echo $sql_res[1];?></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><?php echo $sql_res[2];?></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><?php echo $sql_res[3];?></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><?php echo $sql_res[4];?></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><a href="edit.php?id=<?php echo $sql_res['id_mhs'];?>">Edit</a></strong></td>
                <td align="center" height="30" bordercolor="#000000"><strong><a href="hapus.php?id=<?php echo $sql_res['id_mhs'];?>">Hapus</a></strong></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
}else{ 
	echo "<script>alert(\"Silahkan login terlebih dahulu!\"); window.location=\"login.php\";</script>";
}
?>
</body>
</html>
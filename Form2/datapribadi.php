<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Pribadi</title>
<link href="../../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<?php include "koneksi.php";
if(isset($_GET["submit"])){
	if($_REQUEST["tipe"]=="insert"){
		$sql=mysqli_query($db, "INSERT INTO infoprib VALUES ('$_REQUEST[id]','$_REQUEST[nama]','$_REQUEST[tgl_lahir]','$_REQUEST[jk]')");
		if($sql){
			header('location:datapribadi.php');
		}
	}elseif($_REQUEST["tipe"]=="update"){
		$sql=mysqli_query($db, "UPDATE infoprib SET nama='$_REQUEST[nama]', tgl_lahir='$_REQUEST[tgl_lahir]', sex='$_REQUEST[jk]' WHERE id_bin='$_REQUEST[id]'");
		if($sql){
			header('location:datapribadi.php');
		}
	}elseif($_REQUEST["tipe"]=="delete"){
		$sql=mysqli_query($db, "DELETE FROM infoprib WHERE id_bin='$_REQUEST[id]'");
		if($sql){
			header('location:datapribadi.php');
		}
	}
}else{
	if(isset($_GET["aksi"])){
		if($_GET["aksi"]=="insert"){ ?>
			<h1>Masukkan Data</h1>
            <a href="datapribadi.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a><hr />
			<div class="col-sm-6">
            <form>
			<input type="hidden" name="tipe" value="insert" />
            Masukkan ID<input type="text" name="id" id="id" class="form-control" required /><br />
			Masukkan Nama <input type="text" name="nama" id="nama" class="form-control" required /><br />
			Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control" required /><br />
			Jenis Kelamin <select name="jk" required class="form-control"><option value=""></option><option value="P">Pria </option>
            <option value="W">Wanita</option></select><br />
			<input type="submit" name="submit" class="btn btn-primary" /><br />
			</form>
            </div>
	<?php
		}elseif($_GET["aksi"]=="update"){ 
			$data=mysqli_query($db, "SELECT*FROM infoprib WHERE id_bin='$_REQUEST[id]'");
			$isi=mysqli_fetch_array($data);?>
		<h1>Update Data</h1>
        <a href="datapribadi.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a><hr />
			<form>
			<input type="hidden" name="tipe" value="update" />
			Masukkan ID <input type="text" name="id" id="id" class="form-control" required value="<?php echo $isi["id_bin"];?>" readonly="readonly" /><br />
			Masukkan Nama <input type="text" name="nama" id="nama" class="form-control" required value="<?php echo $isi["nama"];?>" /><br />
			Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control" required value="<?php echo $isi["tgl_lahir"];?>" /><br />
			Jenis Kelamin <select name="jk" required class="form-control"><option value=""></option><option value="P" <?php if($isi["sex"]=="P"){ echo "selected";}?>>Pria </option>
            <option value="W" <?php if($isi["sex"]=="W"){ echo "selected";}?> >Wanita</option></select><br />
			<input type="submit" name="submit" class="btn btn-primary" /><br />
			</form>
	<?php
		}elseif($_GET["aksi"]=="delete"){ ?>
			<h1>Hapus Data</h1>
            <a href="datapribadi.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a><hr />
			<form>
			Anda yakin akan menghapus data ini ?
			<input type="hidden" name="tipe" value="delete" />
			<input type="hidden" name="id" id="id" value="<?php echo $_GET["id"];?>" class="form-control" required /><br />
			<input type="submit" name="submit" class="btn btn-primary" /><br />
			</form>
	<?php
		}
	}else{
	?>
			<h1>Data Pribadi</h1>
            <a href="datapribadi.php?aksi=insert" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span>Insert</a>
			<table class="table table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$data=mysqli_query($db, "SELECT*FROM infoprib");
			while($isi=mysqli_fetch_array($data)){ ?>
				<tr>
					<td><?php echo $isi["id_bin"];?></td>
					<td><?php echo $isi["nama"];?></td>
					<td><?php echo $isi["tgl_lahir"];?></td>
					<td><?php echo $isi["sex"];?></td>
					<td><a href="datapribadi.php?aksi=update&id=<?php echo $isi["id_bin"];?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-pencil"></span> Update</a> <a href="datapribadi.php?aksi=delete&id=<?php echo $isi["id_bin"];?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> </td>
				</tr>
			<?php
			}
			?>
			</tbody>
			</table>
	<?php
	}

}
?>
</div>
</body>
</html>
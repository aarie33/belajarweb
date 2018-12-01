<?php session_start();?>
<html>
<head>
<title>Insert Data Pegawai</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function tempel(){ document.getElementById("nip").focus();}
function anak(input){
var nip=input.nip.value;
var nama=input.nama.value;
var ruang=input.ruang.value;
var status=input.status.value;
var anak=input.jml_anak.value;
	if(status!="Menikah"&&status!="Belum menikah"){
		alert("Status salah (Menikah/Belum menikah)!");
		anak="0";
		status="";
		document.getElementById("jml_anak").readOnly=true;
	}else{
		if(input.status.value=="Menikah"){
		input.jml_anak.value="0";
		document.getElementById("jml_anak").readOnly=false;	
		}else{ 
		input.jml_anak.value="0";
		document.getElementById("jml_anak").readOnly=true;
		}
	}
}
function cek(input){
var nip=input.nip.value;
var nama=input.nama.value;
var ruang=input.ruang.value;
var status=input.status.value;
var anak=input.jml_anak.value;
	if(nip==""||nama==""||ruang==""||status==""){
		alert("Harap isi data dengan benar, bego!");
		return false;
	}else{
		window.location='upd_peg[proses].php';
	}
}
</script>
</head>

<body onLoad="tempel()">
<?php include "index.php";
include "koneksi.php";
$data=mysql_query("select*from pegawai where nip='$_SESSION[nip]'");
$isi=mysql_fetch_array($data);
?>
<center>
<form name="input" onSubmit="return cek(this)" method="post" action="upd_peg[proses].php">
<div id="judul" title="Ngisinya jangan asal!">Edit Data Pegawai<br />
<font size="-3">Edit yang bener, ato gue tonjok lu !!!!</font>
</div>
<table>
<tr><td>NIP</td>
<td><input type="text" name="nip" id="nip" value="<?php echo $_SESSION[nip];?>"/></td></tr>
<tr><td>Nama Pegawai</td>
<td><input type="text" name="nama" value="<?php echo $isi[1];?>"/></td></tr>
<tr><td>Ruang</td>
<td><input type="text" name="ruang" value="<?php echo $isi[2];?>"></td></tr>
<tr><td>Status</td>
<td><input type="text" name="status" value="<?php echo $isi[3];?>" onchange="anak(input)"></td></tr>
<tr><td>Jumlah Anak</td>
<td><input type="text" name="jml_anak" id="jml_anak" value="<?php echo $isi[4];?>"></td></tr>
</table><br>
<input type="submit" value="Edit" />
</form>
</center>
</body>
</html>
<?php session_start();?>
<html>
<head>
<title>Insert Data Pegawai</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function tempel(){ document.getElementById("nip").focus();}
function anak(input){
	if(input.status.value=="Menikah"){
	input.jml_anak.value="0";
	document.getElementById("jml_anak").readOnly=false;	
	}else{ 
	input.jml_anak.value="0";
	document.getElementById("jml_anak").readOnly=true;
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
		window.location='input_peg[proses].php';
	}
}
</script>
</head>

<body onLoad="tempel()">
<?php include "index.php";?>
<center>
<form name="input" onSubmit="return cek(this)" method="post" action="input_peg[proses].php">
<div id="judul" title="Ngisinya jangan asal!">Masukkan Data Pegawai<br />
<font size="-3">Masukin yang bener, ato gue tonjok lu !!!!</font>
</div>
<table>
<tr><td>NIP</td>
<td><input type="text" name="nip" id="nip"/></td></tr>
<tr><td>Nama Pegawai</td>
<td><input type="text" name="nama"/></td></tr>
<tr><td>Ruang</td>
<td><select name="ruang"><option></option>
<?php include "koneksi.php"; $data=mysql_query("select*from golongan");
while($isi=mysql_fetch_array($data)){ ?>
<option><?php echo $isi[0];?></option>
<?php } ?>
</select>
</td></tr>
<tr><td>Status</td>
<td><select name="status" onChange="anak(input)"><option></option>
<option>Menikah</option>
<option>Belum menikah</option></select>
</td></tr>
<tr><td>Jumlah Anak</td>
<td><input type="text" name="jml_anak" id="jml_anak"></td></tr>
</table><br>
<input type="submit" value="Simpan" />
</form>
</center>
</body>
</html>
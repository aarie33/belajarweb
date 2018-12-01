<html> 
<head> 
<script> 
var ajaxku; 
function ambildata(nis){ 
ajaxku = buatajax(); 
var url="ambildata.php"; 
url=url+"?q="+nis; 
url=url+"&sid="+Math.random(); 
ajaxku.onreadystatechange=stateChanged; 
ajaxku.open("GET",url,true); 
ajaxku.send(null); 
} 

function buatajax(){ 
if (window.XMLHttpRequest){ 
return new XMLHttpRequest(); 
} 
if (window.ActiveXObject){ 
return new ActiveXObject("Microsoft.XMLHTTP"); 
} 
return null; 
} 

function stateChanged(){ 
var data; 
if (ajaxku.readyState==4){ 
data=ajaxku.responseText; 
if(data.length>0){ 
document.getElementById("kelas").value= data;
document.getElementById("alamat").value= data;
document.getElementById("jkel").value= data ;
}else{ 
document.getElementById("kelas").value= "";
document.getElementById("alamat").value= "";
document.getElementById("jkel").value= ""; 
} 
} 
} 
</script> 
</head> 
<body>
Nama :<select size="1" name="siswa"
onchange=ambildata(this.value)> 
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");

    $myquery="select*from siswa";
    $daftar_siswa=mysql_query($myquery) or die (mysql_error());
	echo "<option>--Pilih Siswa--</option>";
    while($dataku=mysql_fetch_object($daftar_siswa))
    {
        echo "<option value=\"$dataku->NIS\">$dataku->nama</option>";
    }?>
</select>

<p>
Kelas : <input type="text" id="kelas" name="kelas">
</p>
<p>
<p> 
Alamat : <textarea rows="4" id="alamat" name="alamat" 
cols="42"></textarea> 
</p> 
<p>
Jenis Kelamin : <input type="text" id="jkel" name="jkel">
</p>

Pada contoh berikut anda akan memilih nama dan mengambil data alamat di 
database<br> 
berdasarkan nama tersebut dan menampilkannya di halaman ini tanpa harus 
me-reload<br> 
keseluruhan halaman 
</body> 
</html> 
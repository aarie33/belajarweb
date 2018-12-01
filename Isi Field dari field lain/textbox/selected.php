<?php
mysql_connect("localhost","root","");
mysql_select_db("guru_pelajaran");
$result = mysql_query("select * from guru");
$jsArray = "var NamaSiswa = new Array();\n";
?>
<table>
<tr>
	<td>Kode Siswa <td>:<td>
    <select name="kode" onchange="changeValue(this.value)">
   		<option selected="selected">-------</option>
<?php
	
		while ($row = mysql_fetch_array($result)) {
    	echo '<option value="' . $row['nip'] . '">' . $row['nip'] . '</option>';
    	$jsArray .= "NamaSiswa['" . $row['nip'] . "'] = {satu:'" . addslashes($row['nama']) . "'};\n";
}
?>
</select>
	</td>
</tr>
<tr>
<td>
Nama<td>  :<td> <input type="text" name="nama" id="nama" value=""/>
</tr>
</table>
<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('nama').value = NamaSiswa[id].satu;
};
</script>

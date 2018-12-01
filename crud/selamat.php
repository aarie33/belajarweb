<?php
mysql_connect("localhost","root","12345");
mysql_select_db("sekolah");

$id = $_POST['nis'];
$nama = $_POST['nama'];

if($id != 0){

mysql_query("update siswa set nama='$nama' where nis='$nis");

}else{

$sql=mysql_query("insert into siswa(id,nama)values('$id','$nama')");

}
echo"<meta http-equiv='refresh' content='0; url=modal-form.php'>";

?>

<?php

mysql_connect("localhost","root","12345");
mysql_select_db("sekolah");

$nis=$_POST['nis'];

mysql_query("delete from siswa where nis='$nis'");

echo"<meta http-equiv='refresh' content='0; url=modal-form.php'>";

?>
<?php
   /*******************************************
    Meload data dari database ke select option
 
    Dibuat oleh : Danni Moring
    pemrograman : PHP
    ******************************************/

   /************* Ini untuk koneksi kedatabase nya **********/
   $server = "localhost";
   $user = "root";
   $pass = "";
   $db = "db_orang";
 
   $database = new mysqli($server, $user, $pass, $db); 
   /*********************************************************/
   
   $option = '<option value=""> - Data Siswa - </option>';
   
   $jk = isset($_GET['jk']) ?  $_GET['jk'] :'';
   $sql = "select * from data_orang where jenis_kelamin='".$jk."'";
   if($res = $database->query($sql)) {
      while ($row = $res->fetch_assoc()) {
	     $option .= "<option value='".$row['nama']."'>".$row['nama']."</option>";
      }
   }
   echo $option;
?>
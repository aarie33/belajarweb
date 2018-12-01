<html>
<head>
<title>Data Operator</title>
</head>

<body>
<center>
<form name="isi">
<h2>Data operator<br /></h2>
<table>
<tr>
	<td bgcolor="#FFFFFF">username</td>
    <td><input type="text" name="user" /></td>
</tr>
<tr>
	<td>password</td>
    <td><input type="password" name="pass" /></td>
    <td bgcolor="#FFFFFF"><input type="submit" value="Simpan" onClick="cek()" />
    <?php
	mysql_connect("localhost","root","");
	mysql_select_db("db_ekskul");
	$acak_pass=md5($_REQUEST["pass"]);
	
	$operator=mysql_query("select*from operator where username='$_REQUEST[user]'");
	$data=mysql_num_rows($operator);
	if ($_REQUEST["user"]==""||$_REQUEST["pass"]=="")
	{}
	else
	{
		if($data<>0)
		{ ?>
		<script language=javascript type="text/javascript">
		alert("Username tersebut telah tersedia..!");
		</script>
		<?php }
		else
		{
		mysql_query("insert into operator values('$_REQUEST[user]','$acak_pass')");
		?>
		<script language=javascript type="text/javascript">
		alert("Penyimpanan Berhasil..!");
		</script>
		<?php }	
	}?></td>
</tr>
</table>
</form>
<script language="javascript" type="text/javascript">
function cek()
{
	var isi=document.isi;
	var	user=isi.user.value;
	var pass=isi.pass.value;
	
	if (user==""||pass=="")
	{
		alert("Harap isi data dengan lengkap!");
		return false;
	}
}
</script>

</center>
</body>
</html>
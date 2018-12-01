<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");
$_SESSION["nm"]=$_REQUEST["user"];
$_SESSION["sandi"]=$_REQUEST["pass"];
$pass=md5($_SESSION["sandi"]);
$data=mysql_query("select*from siswa where nis='$_SESSION[sandi]' and nama='$_SESSION[nm]'");
$isi=mysql_num_rows($data);

$opt=mysql_query("select*from operator where username='$_SESSION[nm]' and sandi='$pass'");
$isiopt=mysql_num_rows($opt);

if($_SESSION["nm"]=="" or $_SESSION["sandi"]=="")
{
	header('location:session.php');

}
else
	if($isiopt<>0&&$isi==0)
	{
		header('location:ekskul_utama.php');
	}
	elseif($isi<>0&&$isiopt==0)
	{
		header('location:session3.php');
	}
	else
	{
	//header('location:session.php');	?>
    <script language="javascript" type="text/javascript">
	alert("Username atau Password yang Anda masukkan salah!");
	action="session.php";
	</script>
	<?php 
	}
?>
<?php
 	if ($_SESSION[Status]!="admin")
	die ("<h3><p align='left' style='margin-left:50px'>Maaf anda Login sebagai user, <br> 
			Silahkan Login dengan Hak akses Admin untuk mengakses halaman ini!</p></h3>");
	if ($_GET [id] != "") {
	
 $query = mysql_query("select * from user where KodeUser='$_GET[id]'");
 $data = mysql_fetch_array ($query);
 $value = "Edit";
}
else{
	 $value = "Simpan";
	 	 //otomatisasi kode
	 $query_oto = mysql_query("select max(KodeUser) as maksi from user");
	 $data_oto = mysql_fetch_array($query_oto);
	 $data_oto = substr($data_oto[maksi],3,5);
	 $data_oto++;
	 $kosong = "";
	 for ($i=strlen($data_oto); $i<=4; $i++)
	 $kosong = $kosong."0";
	 $data[KodeUser] = "USR$kosong$data_oto";
	 }
	 ?>
<p>INPUT/ EDIT USER</p>

<form action="user_simpan.php" method="post">
<table width="397" border="0" class="editMotor">
  <tr>
    <td width="36%">Kode User </td>
    <td width="64%"><label>
      <input name="KodeUser" type="text" id="KodeUser" value="<?php echo $data[KodeUser] ?>" />
    </label></td>
  </tr>
  <tr>
    <td>User Name</td>
    <td><label>
      <input name="UserName" type="text" id="UserName" value="<?php echo $data[UserName] ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input name="Password" type="password" id="Password" value="<?php echo $data[Password] ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><label>
    <input name="Status" type="text" id="Status" value="<?php echo $data[Status] ?>" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input name="btnSimpan" type="submit" id="btnSimpan" class="btn_simpan" value="<?php echo $value ?>" />
    </label></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>


</html>

<?php
if ($_SESSION[Status]!="admin")
	die ("<h3><p align='left' style='margin-left:50px'>Maaf anda Login sebagai user, <br> 
			Silahkan Login dengan Hak akses Admin untuk mengakses halaman ini!</p></h3>");
	$query = mysql_query("select * from user");
?>
<center> <h1>Daftar User </h1></center>
<table width="500" border="0">
            <tr class="tr_grid" align="center" height="40">
              <th scope="col"><div align="center">No</div></th>
              <th scope="col"><div align="center">Kode User </div></th>
              <th scope="col"><div align="center">User Name </div></th>
              
              <th scope="col"><div align="center">Status</div></th>
              <th scope="col"><div align="center">Action</div></th>
            </tr>
  <?php
	$i = 1;
	while($data=mysql_fetch_array($query)){
		echo "
		 
		    <tr bgcolor='#CCCCCC' align='center' height='30' id='tabel'>
				<td>$i</td>
              	<td>$data[KodeUser]</td>
             	<td>$data[UserName]</td>
              	<td>$data[Status]</td>
               <td>
					<a href='?page=user_edit&id=$data[KodeUser]'>[EDIT]
					<a href='user_simpan.php?id=$data[KodeUser]'
						onclick='return confirm(\"Benar menghapus $data[KodeUser]?\")'>[DELETE]
               </td>
            </tr>";
		$i++;
	}
 ?>
</table>            
<a href="?page=user_edit">[Tambah User]</a>
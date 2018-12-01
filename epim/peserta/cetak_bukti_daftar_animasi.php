<?php
	session_start();

  if(isset($_SESSION['username']) && $_SESSION['level']=="peserta"){
  //    echo "Selamat datang ".$_SESSION['username']." anda berada pada level ".$_SESSION['level'];
    include('../pages/config.php');
    include('../pages/fungsi_tgl.php');
    $username=$_SESSION['username'];
    $select= "SELECT * FROM daftar_animasi WHERE username='$username'";
    $query_select=mysql_query($select);
    $data=mysql_fetch_array($query_select);
    if($data['status']!=2){
      header('Location: ../error.php');
    }
  }else{
    header('Location: ../error.php');
  }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Bukti Pendaftaran</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" method="post" action="">
  <table width="850" border="0" align="center">
    <tr>
      <td colspan="2">
        <div align="center"><b><font size="4">BUKTI PENDAFTARAN LOMBA      </font></b></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><font size="4"><b>EXPO & PEKAN ILMIAH TEKNOLOGI INFORMASI</b></font></div></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center"><font size="4"><b>TAHUN 2015 </b></font></div></td>
    </tr>
    <tr>
      <td height="36" width="32%">&nbsp;</td>
      <td height="36" width="68%">&nbsp;</td>
    </tr>
    <tr>
      <td height="24">1. Id Pendaftar </td>
      <td height="24">: <?php echo $data['id_daftar'] ?></td>
    </tr>
    <tr>
      <td height="24">2. Nama Ketua</td>
      <td height="24">: <?php echo $data['nama_ketua'] ?></td>
    </tr>
    <tr>
      <td width="32%" height="30">3. Anggota 1</td>
      <td width="68%">: <?php echo $data['anggota1'] ?></td>
    </tr>
    <tr>
      <td width="32%" height="30">4. Anggota 2</td>
      <td width="68%">: <?php echo $data['anggota2'] ?></td>
    </tr>
    <tr>
      <td height="25">5. E-mail</td>
      <td>: <?php echo $data['email'] ?></td>
    </tr>
    <tr>
      <td width="32%" height="29">6. No HP </td>
      <td width="68%">: <?php echo $data['no_hp'] ?></td>
    </tr>
    <tr>
      <td height="29" width="32%">7. Sekolah</td>
      <td height="29" width="68%">: <?php echo $data['sekolah'] ?></td>
    </tr>
    <tr>
      <td width="32%" height="30">8. Kategori Lomba</td>
      <td width="68%">: Lomba Animasi</td>
    </tr>
      <td width="32%" height="30">&nbsp;</td>
      <td width="68%">&nbsp;
          Mohon formulir ini disimpan dan dibawa ketika melakukan registrasi ulang di &nbsp;&nbsp;Politeknik Negeri Jember      </td>
    </tr>
    <tr>
      <td width="32%">&nbsp;</td>
      <td width="68%">&nbsp;</td>
    </tr>
    <tr>
      <td width="32%" height="71">
        <table width="100%" border="0">
          <tr>
            <td width="16%">&nbsp;</td>
            <td width="84%">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"></div></td>
          </tr>
          <tr>
            <td height="89" colspan="2"><div align="center"><img src='../img/foto/animasi/<?php echo $data['foto_ketua'];?>' class="media-object img-rounded" width='150px' height='200px'/></div></td>
          </tr>
          <tr>
            <td width="16%">&nbsp;</td>
            <td width="84%">&nbsp;</td>
          </tr>
      </table></td>
      <td width="68%" height="71">
        <table width="99%" border="0">
          <tr>
            <td width="12%">&nbsp;</td>
            <td width="88%">Jember,
                <?php $tanggal=date("d-m-Y");
					 echo $tanggal; ?></td>
          </tr>
          <tr>
            <td width="12%">&nbsp;</td>
            <td width="88%">Tanda Tangan Peserta</td>
          </tr>
          <tr>
            <td height="85" width="12%">&nbsp;</td>
            <td height="85" width="88%">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" width="12%">&nbsp;</td>
            <td height="19" width="88%">(
                <?php echo $data['nama_ketua'] ?>            )</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="29" width="32%">&nbsp;</td>
      <td height="29" width="68%">
        <input type="button" name="cetak" value="Cetak" onclick=ngeprint()> 
        (Gunakan Menu Print, Apabila tidak ada respon mencetak dokumen ini) </td>
    </tr>
  </table>
</form>
</body>
<script language="javascript">
function ngeprint(){	
    document.all.cetak.style.visibility="hidden";    
    window.print();
    alert("Jangan ditutup pesan ini, sebelum dokumen telah tercetak");
    document.all.cetak.style.visibility="visible";
  }
</script>
</html>

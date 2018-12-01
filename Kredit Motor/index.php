<?php
ini_set("display_errors",0);
include("kelfin-includes/defines.php");
include("kelfin-includes/fungsi.php");
include("kelfin-includes/connect.php");
cekSession();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<?php
	kelfin_getAjax();
	kelfin_getJquery();
	kelfin_getCSS();
?>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Contoh TA Motor</title>
<link rel='shortcut icon' href='Kelfin-Images/logo.png' />
</head>
<body onLoad="window.setTimeout('jam();',500)">
<center>
<div class="layout">
  		<div class="bar">
  		  <form method="get" action="index.php"><table width="986" border="0">
  		    <tr>
  		      <td width="258">
                <img src="kelfin-images/0.gif" />
				<img src="kelfin-images/0.gif" />
				<img src="kelfin-images/titik_dua.gif" />
				<img src="kelfin-images/0.gif" />
				<img src="kelfin-images/0.gif" />
				<img src="kelfin-images/titik_dua.gif" /> 
				<img src="kelfin-images/0.gif" />
				<img src="kelfin-images/0.gif" />
              </td>
  		      <td width="385">&nbsp;</td>
  		      <td width="91"><span class="cariMotor">Cari Motor : </span></td>
  		      <td width="170"><label for="textfield"></label>
	          <input name="page" type="hidden" value="view_motor" /><input name="txtCari" type="text" id="txtCari" /></td>
  		      <td width="60"><input type="submit" name="btnCari" id="btnCari" value="Cari" /></td>
	        </tr>
	      </table></form>
  </div>
		<div class="header">
       	<!-- <h1 align="center">Kelfin Eka Motor</h1> -->
        
    </div>
    <div class="navigasi">
    <?php kelfin_getMenu(); ?>
    </div>
<div class="isi"> 
  <?php kelfin_getPage($_REQUEST['page']); ?>
</div>
        
<div class="footer">
        <h3>www.Contoh-ta.com</h3>
    </div>
        
  </div>
</center>
</body>
</html>
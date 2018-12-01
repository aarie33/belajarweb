<?php if(!isset($_GET['q'])):?>

<form name="form1" method="get" action=""> 
<table><td>Search : </td><td><textarea name="q" rows="1" id="q"></textarea></td><td><input type="submit" value="Search"/></td>
</table>
</form> 

<div id="result"></div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	var allow = true;
	$(document).ready(function(){
		$("#q").keyup(function(e){
			if(e.which == '13'){
				e.preventDefault();
					
				loadData();
			}else if($(this).val().length >= 0){
					
				loadData();
			}
		});
	});
	function loadData(){
	var query=document.getElementById('q').value;
		if(allow){
			allow = false;
			$("#result").html('loading...');
			$.ajax({
				url:'cari.php?q='+query,
				success:
					function (data){
					$("#result").html(data);
					allow = true;
				}
			});
		}
	}
</script>
<?php endif;?>
<style>
.highlight
{
background: #CEDAEB;
}

.highlight_important
{
background: #9afa95;
}
</style>

<?php 
//Fungsi Mark Teks
function hightlight($str, $keywords = '')
{
$keywords = preg_replace('/\s\s+/', ' ', strip_tags(trim($keywords))); // filter

$style = 'highlight';
$style_i = 'highlight_important';

/* Apply Style */

$var = '';

foreach(explode(' ', $keywords) as $keyword)
{
$replacement = "<span class='".$style."'>".$keyword."</span>";
$var .= $replacement." ";

$str = str_ireplace($keyword, $replacement, $str);
}
$str = str_ireplace(rtrim($var), "<span class='".$style_i."'>".$keywords."</span>", $str);
return $str;
}

//END Fungsi Mark Teks
if(isset($_GET['q']) && $_GET['q']){ 
 $conn = mysql_connect("localhost", "root", ""); 
 mysql_select_db("test"); 
 $q = $_GET['q'];
 
//Menghitung Jumlah Yang Tampil 

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
$mulai_dari = $limit * ($page - 1);
$sqlCount = "select count(no_ktp) from tamu where nama like '%$q%' or alamat like '%$q%' or no_ktp like '%$q%'";
$rsCount = mysql_fetch_array(mysql_query($sqlCount));
$banyakData = $rsCount[0];
$sql = "select * from tamu where nama like '%$q%' or alamat like '%$q%' or no_ktp like '%$q%' order by no_ktp DESC limit $mulai_dari, $limit"; 
//Akhir Menghitung Jumlah Yang Tampil 
 $result = mysql_query($sql);
 

 if(mysql_num_rows($result) > 0){ 
 ?> 
 <?php if(isset($_GET['page'])):?>
<form name="form1" method="get" action=""> 
<table><td>Search : </td><td><textarea name="q" rows="1" id="q"></textarea></td><td><input type="submit" value="Search"/></td>
</table>
</form> 
 <?php endif;?>
 <table border="1" width="700px"><tr bgcolor="silver"><td>Nomor KTP</td><td>Nama</td><td>Alamat</td></tr>
 <?php 
 while($siswa = mysql_fetch_array($result)){?> 
 <tr> 
 <td><?php echo hightlight($siswa['no_ktp'],$q);?></td> 
 <td><?php echo hightlight($siswa['nama'],$q);?></td> 
 <td><?php echo hightlight($siswa['alamat'],$q);?></td> 
 </tr> 
 <?php }?> 
 </table> 
 <?php 
 }else{ 
 echo 'Data Tidak Ada'; 
 } 
 //Halaman
 $banyakHalaman = ceil($banyakData / $limit);
echo '</br><div id="page" style="font-size:17px">Halaman: ';
for($i = 1; $i <= $banyakHalaman; $i++){
 if($page != $i){
 echo '  [<a href="cari.php?page='.$i.'&q='.$q.'">'.$i.'</a>]  ';
 }else{
 echo "[<span style='color:silver'>$i</span>] ";
 }
}
echo '&nbsp&nbsp<a href="cari.php"><b>Ulangi Pencarian</b></a>';
//END HALAMAN
} 


?>
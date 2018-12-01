<html>
<head>
<title>Load Data dari database ke Select Option</title>
</head>
<body>
<form id="frmdata">
<select id="jkelamin">
   <option value="">- Pilih Jenis Kelamin -</option>
   <option value="L">Laki-laki</option>
   <option value="P">Perempuan</option>
</select>

<select id="siswa">
<option value="">- Data Siswa -</option>
</select>
</form>
<script src="../jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
   $('#jkelamin').change(function(){
	    $('#siswa').after('<span class="loading">Tunggu..sedang load data siswa..</span>');
		$('#siswa').load('cari.php?jk=' + $(this).val(),function(responseTxt,statusTxt,xhr)
		{
		  if(statusTxt=="success")
			$('.loading').remove();
		
		});
		return false;
   });

});

</script>
</body>
</html>
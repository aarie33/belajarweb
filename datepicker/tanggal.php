<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<h2>Datepicker</h2>
	<form>
	<input type="text" name="tanggal" id="tanggal" class="form-control" /><br />
    <input type="submit" class="btn btn-md btn-primary" />
    </form>
    <?php 
	if(isset($_REQUEST['tanggal'])){
		echo $_REQUEST['tanggal'];
	}
	?>
</div>
<script src="../../jquery-1.11.1.min.js"></script>
<script src="../../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="locales/bootstrap-datepicker.id.min.js"></script>
<script>
$(function(){
	$('#tanggal').datepicker({
		format: "MM yyyy",
		viewMode: "months", 
		minViewMode: "months",
		language:'id',
		autoclose:true
	});
});
</script>
</body>
</html>
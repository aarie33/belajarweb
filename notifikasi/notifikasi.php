<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-1.8.3.js"></script>
</head>

<body>
<?php mysql_connect("localhost","root","");
mysql_select_db("osis");
$data=mysql_query("select*from pokja where status='diajukan'");
$j=mysql_num_rows($data);
if($j>0){
echo $j;
}
?>
</body>
</html>
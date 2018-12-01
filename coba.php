<html>
<head>
<title>Hitung inputan</title>
</head>
<body>
<form>
<input type="text" name="huruf">
<input type="submit">

<?

echo substr_count($_REQUEST["huruf"],"a");
//echo $jumlah;
?>

</form>
</body>
</html>
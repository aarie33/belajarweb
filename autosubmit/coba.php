<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
	/*jQuery(document).ready(function() {
	setTimeout(document.qrcodeRedirectForm.submit(),1000);
});   */
var counter = 5;
function countDown() {
    if(counter>=0) {
        document.getElementById("timer").innerHTML = counter;
    }
    else {
        lanjut();
        return;
    }
    counter -= 1; 

    var counter2 = setTimeout("countDown()",1000);
    return;
}
function lanjut() {
    //document.location='coba.php';
	setTimeout(document.qrcodeRedirectForm.submit())
}
</script>
</head>

<body onload="countDown()">

<form id="qrcodeRedirectForm" name="qrcodeRedirectForm" method="post" action="coba.php">        
<span id="timer"></span>
	</form>
</body>
</html>
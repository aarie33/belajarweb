<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2><a href="#" id="addScnt">Tambahkan Input Box</a></h2>
<form action="" method="post">
<div id="kelompokinput">
<p><label for="kelompokinputLabel"><input type="text" id="idInput" size="20" name="idInput[0]" value="" placeholder="Input Nomor 1" /></label></p>
</div>
<input type="submit" name="sb" class="btn btn-primary" value="SUBMIT"/>
</form>
<?php
if(isset($_POST['sb'])){
    $hasil = count($_POST['idInput']) ? $_POST['idInput'] : array();
    $no=0;    
    foreach($hasil as $l){
        $no=$no+1;
        echo "Input nomor ".$no." adalah ".$l."<br>";
    }
}
?>
<script src="jquery-2.1.1.min.js"></script>
<script>
$(function() {
        var scntDiv = $('#kelompokinput');
        var i = $('#kelompokinput p').size() + 1;
        $('#addScnt').on('click', function() {
                $('<p><span class="help-inline"><span for="kelompokinputLabel"><input type="text" id="idInput" size="20" name="idInput[' + i +']" value="" placeholder="Input Nomor ' + i + '" /></span> <a href="#" id="HapusInput">Hapus</a></span></p>').appendTo(scntDiv);
                i++;
                return false;
        });
        $(document).on('click','#HapusInput' ,function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});
</script>
</body>
</html>
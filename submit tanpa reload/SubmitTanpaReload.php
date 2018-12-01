<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Submit Form With jQuery</title>
<script type="text/javascript" src="../jquery-2.1.1.min.js"></script>
<style type="text/css">
* { margin:0; padding:0; outline:none; }
body { font-size:62.5%; 
    font-family:Arial, Helvetica, sans-serif; 
    background: #000 url(http://w3function.com/images_tutor/background.jpg) no-repeat; position:relative; margin:100px 0 0 0;  }
#content { 
    width:300px; 
    margin:0 auto; 
    padding:10px 5px 20px 5px; 
    border:3px solid #555;
    -moz-border-radius:20px; 
    background:#000;
}
form fieldset { 
    font-family:Verdana, Arial, Helvetica, sans-serif; 
    font-size:1.2em; 
    margin:0 auto; 
    width:300px; 
    position:relative; 
    border:0;
    display:block; 
    padding: 0px 10px 8px; 
}
form fieldset legend { 
    border-width:1px; 
    border-style:solid; 
    border-color:#BBBB66; 
    color:#3D7169; 
    font-weight:bold; 
    font-variant:small-caps; 
    font-size:140%; 
    padding:4px 8px;
    margin:0px 0px 10px 0px; 
    position:relative; top: -12px; 
    background:white; 
}
label { 
    font-size:90%; 
    display:block; 
    width:220px; 
    text-align:left;
    color:#ffd; 
    font-weight:bold;
    padding:15px 0 5px 0px; 
}
label.error { 
    color:red;
    text-align:center;
    margin:10px 0 0 0;
    padding:3px 10px;
    font-size:10px;
    font-weight:bold;
    border:1px solid #FF6633;
    display:none;
}
label.result { 
    color:#7cda20;
    text-align:left;
    margin:10px 0 0 0;
    padding:5px 10px;
    border:1px solid #aff130;
    display:none;
}
input[type=text] { padding:2px 0;color:#000; -moz-border-radius:3px;  }
textarea { padding:2px 0;color:#000; width:250px; -moz-border-radius:3px;  }
input.button { 
    padding:3px 15px;
    border:2px solid #fff; 
    margin:20px 0px 0px 0px; 
    color:#3D7169;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    background:#CCC; 
    -moz-border-radius:5px; 
}
input.button:hover { 
    background:#009FAA none repeat scroll 0% 0%; 
    color:white; 
}
</style>
</head>
<body>
<div id="content">
    <form name="contact_form" id="contact_form" action="#">
    <fieldset>
        <label for="name" id="name_label">Nama</label>
        <input type="text" name="name" id="name" size="30" value="" />
        <label for="email" id="email_label">Email</label>
        <input type="text" name="email" id="email" size="30" value="" />
        <label for="message" id="message_label">Pesan</label>
        <textarea name="message" id="message" ></textarea>
        <label class="error" for="all" id="error">Kolom input data wajib di isi</label> 
        <br />
        <input type="submit" name="send_btn" class="button" id="send_btn" value="Send" /> 
        <img src="http://w3function.com/images_tutor/ajax-loader.gif" class="loader" alt="" style="display:none" />
        <label class="result" id="result"></label>
    </fieldset>
    </form>
</div>
<script type="text/javascript">
 $(document).ready(function(){
    //mendefinisikan variable global
    var InputName = $("#name");
    InputEmail = $("#email");
    InputMessage = $("#message");
    BtnSend = $("#send_btn");
    result = $("#result");
    error = $(".error");
    loading = $(".loader");
 
    //validasi pengisian data input
    function checkForm(){
    if(InputName.attr("value") && InputEmail.attr("value") && InputMessage.attr("value")) 
        return true;
    else
        error.fadeIn("fast");
        return false;
    }
 
    $("#contact_form").submit(function(){ //pada saat form di submit proses AJAX adalah sebagai berikut
        if(checkForm()){
            var name = InputName.attr("value");
            email  = InputEmail.attr("value");
            message  = InputMessage.attr("value");
             
            BtnSend.attr({ disabled:true, value:"Sending..." });
            loading.fadeIn();
             
            $.ajax({
                type: "POST", 
                url: "JQinputform_proc.php", 
                data: "action=send_mail&name=" + name + "&email=" + email + "&message=" + message,
                complete: function(data){
                    result.html(data.responseText);
                    result.slideDown("fast");
                    loading.fadeOut();
                    error.fadeOut();
                    BtnSend.attr({ value:"Send" });
                }
            });
        }
        // tambahkan return false untuk mencegah double submit dan supaya data tidak di refresh setelah submit data berhasil
        return false;
});
});
</script>
</body>
</html>
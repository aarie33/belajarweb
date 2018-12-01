<?php
include('rssclass.php');
$feedlist = new rss('http://fb2rss.altervista.org?id=303855556393481'); /* Ubah link feed disini dengan link feed Anda */
echo $feedlist->display(10,"RSS Arie"); /* Angka 7 digunakan untuk menampilkan jumlah artikel ',
*/
?>
<style>
.kotak-berita{ /* Kotak Berita yang akan ditampilkan */
margin:0 auto;
width:270px;
padding:10px;
}
    
.judul { /* Judul Header Berita */
font-size:18px;
font-weight:bold;
text-align:left;
background-color:#1495ef;
color:#FFFFFF;
padding:5px;
border-radius:10px 10px 0 0;       
}
 
.link-feed { /* Link Feed */
text-align:left;
padding:5px;
border:1px solid #dedede;
}
</style>
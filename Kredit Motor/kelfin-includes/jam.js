// JavaScript Document
//jam digital by Kelfin Eka
function jam() {
      var d = new Date();
      var jj = d.getHours();
      var mm = d.getMinutes();
      var dd = d.getSeconds();

      // Ubah gambar
      document.images[0].src = url(jj / 10);
      document.images[1].src = url(jj % 10);
      document.images[3].src = url(mm / 10);
      document.images[4].src = url(mm % 10);
      document.images[6].src = url(dd / 10);
      document.images[7].src = url(dd % 10);

      // Atur waktu berikutnya
      window.setTimeout("jam()",500);
  }
 
  // Mengubah angka menjadi angka.gif
  function url(angka) {
     var bil = Math.floor(angka);
     return("kelfin-images/" + bil + ".gif");
  }

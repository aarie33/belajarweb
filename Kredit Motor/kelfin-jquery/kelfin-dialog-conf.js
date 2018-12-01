// JavaScript Document
//By Kelfin Eka
//Konfigurasi Dialog Jquery
$(document).ready(function()
{
   var jQueryDialog1Opts =
   {
      width: 600,
      height: 450,
      position: 'center',
      resizable: true,
      draggable: true,
      closeOnEscape: true,
      autoOpen: true
   };
   $("#jQueryDialog1").dialog(jQueryDialog1Opts);
});
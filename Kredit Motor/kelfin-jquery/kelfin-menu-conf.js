// JavaScript Document untuk konfigurasi accordion menu style
//Kelfin Eka
$(document).ready(function()
{
   var jQueryAccordion1Opts =
   {
      event: 'click',
      animated: 'slide',
      header: 'h3',
      fillSpace: 'true'
   };
   $("#jQueryAccordion1_id").accordion(jQueryAccordion1Opts);
});
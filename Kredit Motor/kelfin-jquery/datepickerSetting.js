// JavaScript Document
//setting untuk datepicker
$(document).ready(function()
{
   var jQueryDatePicker1Opts =
   {
      dateFormat: 'yy/mm/dd',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   };
   $("#dari").datepicker(jQueryDatePicker1Opts);
   var jQueryDatePicker2Opts =
   {
      dateFormat: 'yy/mm/dd',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   };
   $("#ke").datepicker(jQueryDatePicker2Opts);
});
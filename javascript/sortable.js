  
 $(function() {
    $( ".sortable" ).sortable();
    $( ".sortable" ).disableSelection();

 });

$(function() {
    $( ".modules" ).accordion({
      active: true,
      icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" },
      heightStyle: "content"
    });
  });

$(document).ready(function() {
  $(".modules").accordion("option", "active", 1);
});

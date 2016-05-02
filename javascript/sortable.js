  
 $(function() {
    $( ".sortable" ).sortable();
    $( ".sortable" ).disableSelection();

 });

$(function() {
    $( ".modules" ).accordion({
      icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" },
      heightStyle: "content",
      collapsible: true
    });
  });


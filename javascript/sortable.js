
 $(function() {
    $('.sortable').sortable({
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
        alert(data);
        $.ajax({
                type        : 'POST',
                data        : {'data': data},
            }).done(function(response){
                alert('success');
            }).fail(function(jqXHR, textStatus, errorThrown){
                alert('FAILED! ERROR: ' + errorThrown);
            });
    }

});
    $( ".sortable" ).disableSelection();

 });

$(function() {  
  $( ".modules" ).accordion({
    heightStyle: "content",
    collapsible: true
  });
});


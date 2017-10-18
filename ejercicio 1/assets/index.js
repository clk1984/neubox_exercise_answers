 $( function() {
    $( "#datepicker" ).datepicker({
         dateFormat: "yy-mm-dd"
});
  } );
$("#form").submit(function(e) {
    e.preventDefault();
    $.post('./actions/create.php', $('form').serialize(),function(data, textStatus, xhr) {
        alert(data);
    });
});
$("#delete").submit(function(e) {
    e.preventDefault();
    $.post('./actions/delete.php', $('#delete').serialize(),function(data, textStatus, xhr) {
        alert(data);
    });
});

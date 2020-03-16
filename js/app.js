$('#InputPassword1').on('keyup', function() {
    var input = $(this);
    if(input.val().length === 0) {
        input.addClass('empty');
    } else {
        input.removeClass('empty');
    }
});

$( document ).ready(function() {
    console.log( "ready!" );
    
});
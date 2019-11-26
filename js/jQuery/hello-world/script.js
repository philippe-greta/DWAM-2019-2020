jQuery(document).ready(function () {
    // 
});

$(document).ready(function () {
    // 
});

$(function () {
    //
});

/*
$(function () {
    $('#hello').text('Bonjour tout le monde.');
    $('#hello').css('font-size');
    $('#hello').css('font-size', '35px')
});
*/



//fonction de rappel (callback)

$(function () {
    $(".rouge").fadeOut("slow", function () {
        $(this).fadeIn("slow");
    });
    /*$('p').animate({
        width : '150px',
        fontSize : '35px',
        marginTop : '50px'
    });

    
    $('#hello').animate({
        width : '250px',
        fontSize : '35px',
        marginTop : '50px'
    }, 1000);
    */
});


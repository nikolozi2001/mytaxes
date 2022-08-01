$("#down-to-income").click(function() {
    $('html,body').animate({
        scrollTop: $("#income").offset().top-90},
        'slow');
});

$("#down-to-cigarette").click(function() {
    $('html,body').animate({
        scrollTop: $("#cigarette").offset().top-170},
        'slow');
});

$("#down-to-beer").click(function() {
    $('html,body').animate({
        scrollTop: $("#beer").offset().top-80},
        'slow');
});

$("#down-to-fuel").click(function() {
    $('html,body').animate({
        scrollTop: $("#fuel").offset().top-80},
        'slow');
});

$("#down-to-other").click(function() {
    $('html,body').animate({
        scrollTop: $("#other").offset().top-110},
        'slow');
});

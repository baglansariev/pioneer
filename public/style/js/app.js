$(function(){
    $('.mobile-menu-toggler').click(function () {
        $('.mobile-menu').fadeIn();
    });
    $('.menu-close').click(function () {
        $('.mobile-menu').fadeOut();
    });

    $('.language').click(function (e) {
        e.preventDefault();
        $('.language-list').fadeIn();
    });

    $('body').click(function (e) {
        if(e.target !== $('.language span')[0]){
            $('.language-list').fadeOut();
        }
    });

    $('.language span').text($('.lang-active').text());

});
$(function () {
    $('#feedback').click(function (e) {
        e.preventDefault();
        $('.contact-form-cover').fadeIn();
        $('.contact-form-cover form').animate({marginTop: '80px'}, 1000);
    });
    $('#mobile-feedback').click(function (e) {
        e.preventDefault();
        $('.contact-form-cover').fadeIn();
        $('.contact-form-cover form').animate({marginTop: '80px'}, 1000);
    });
    $('.action-button').click(function () {
        $('.contact-form-cover').fadeIn();
        $('.contact-form-cover form').animate({marginTop: '80px'}, 1000);
    });
    $('.form-close').click(function (e) {
        $('.contact-form-cover form').animate({marginTop: '-600px'}, 1000);
        $('.contact-form-cover').fadeOut();
    });
});
$(function () {
    let sliderWidth = $('.simple-slider').width();
    let sliderCount = $('.slider-image').length;
    $('.slider-image').width(sliderWidth);
    $('.slider-viewport').width(sliderWidth * sliderCount);


});
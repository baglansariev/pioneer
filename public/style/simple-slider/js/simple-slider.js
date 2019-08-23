$(function () {
    let sliderImage = $('.slider-image');
    let viewPort = $('.slider-viewport');
    let sliderWidth = $('.simple-slider').width();
    let sliderCount = sliderImage.length;
    sliderImage.width(sliderWidth);
    viewPort.width(sliderWidth * sliderCount);
    let viewPortWidth = viewPort.width();
    let left = 0;
    let right = 0;
    let maxStep = viewPortWidth - sliderWidth;

    function sliderLeft(){
        left = left - sliderWidth;
        if(left < -maxStep){
            left = 0;
        }
        viewPort.animate({marginLeft: left + 'px'}, 1000);
    }

    function sliderRight(){
        left = left - sliderWidth;
        if(left < -maxStep){
            left = 0;
        }
        viewPort.animate({marginRight: left + 'px'}, 1000);
    }

    // console.log(sliderImage.attr('style'));

    sliderImage.click(function () {
        sliderRight();
    });

});
$(document).ready(function () {
    // Facebook button events
    var fbBtn = $("#facebookButton");
    fbBtn.mouseenter(function () {
        fbBtn.attr('src', '../includes/images/facebookButtonHover.png');
    });
    fbBtn.mouseleave(function () {
        fbBtn.attr('src', '../includes/images/facebookButton.png');
    });

    // Twitter button events
    var tBtn = $("#twitterButton");
    tBtn.mouseenter(function () {
        tBtn.attr('src', '../includes/images/twitterButtonHover.png');
    });
    tBtn.mouseleave(function () {
        tBtn.attr('src', '../includes/images/twitterButton.png');
    });

    // Flux slider 
    $(function(){
        window.FLUX_headerSlider = new flux.slider('#headerSlider', {
            pagination: false,
            controls: false,
            transitions: [ 'warp' ]
        });
    });
});
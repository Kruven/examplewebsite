$(document).ready(function () {
    // Create all the small slideshows
    $(function () {
        window.FLUX_pcSlider = new flux.slider('#pcSlider', {
            pagination: false,
            controls: false,
            autoplay: false,
            transitions: ['blocks']
        });
    });

    $(function () {
        window.FLUX_laptopSlider = new flux.slider('#laptopSlider', {
            pagination: false,
            controls: false,
            autoplay: false,
            transitions: ['blocks']
        });
    });

    $(function () {
        window.FLUX_macSlider = new flux.slider('#macSlider', {
            pagination: false,
            controls: false,
            autoplay: false,
            transitions: ['blocks']
        });
    });


    $(function () {
        window.FLUX_mobileSlider = new flux.slider('#mobileSlider', {
            pagination: false,
            controls: false,
            autoplay: false,
            transitions: ['blocks']
        });
    });

    // Add functionality to the next buttons for each slideshow
    $("#nextButton1").mousedown(function () {
        window.FLUX_pcSlider.next();
    });
    $("#nextButton2").mousedown(function () {
        window.FLUX_laptopSlider.next();
    });
    $("#nextButton3").mousedown(function () {
        window.FLUX_macSlider.next();
    });
    $("#nextButton4").mousedown(function () {
        window.FLUX_mobileSlider.next();
    });
});
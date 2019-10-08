(function ($) {
    /*--------------------------------
            08. MagnifPopup Plugin
    ----------------------------------*/
    $('.portfolio-gallery').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tPrev: 'Previous',
                tNext: 'Next'
            }
        });
    });

    $('.info .image_overlay').on("click", function () {

        $(this).parents(".project_content").find('.portfolio-gallery>a:first-child').trigger("click");

    });

    $('.popup-with-zoom-anim').magnificPopup({

        type: 'inline',
        mainClass: 'my-mfp-zoom-in'

    });

    $('.video-popup').magnificPopup({
        type: 'iframe'
    });


    //-- filter items on button click --//
    $('.ul-filter>span').on('click', function () {

        var filterValue = $(this).attr('data-filter');

        $(this).addClass('active_filter').siblings().removeClass('active_filter');
        $('.portfolio-items').isotope({filter: filterValue});

    });

    /*----------------------------------------
            05. responsiveSlides plugin
    ------------------------------------------*/
    var project_slider = '.project-slider';

    if ($(project_slider).length) {

        $(project_slider).responsiveSlides({
            nav: true,
            prevText: '<i class="dashicons dashicons-arrow-left-alt2"></i>',
            nextText: '<i class="dashicons dashicons-arrow-right-alt2"></i>'
        });

    }

})(jQuery);
(function ($) {
    /*--------------------------------
            08. MagnifPopup Plugin
    ----------------------------------*/
    var my_img = '.my_img',
        magnifPopup = function () {

            $(my_img).magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                    opener: function (openerElement) {

                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });

        };
    // Call the functions
    if ($(my_img).length) {

        magnifPopup();

    }

    $('.info .image_overlay').on("click", function () {

        $(this).parents(".project_content").find(my_img).trigger("click");

    });

    $('.popup-with-zoom-anim').magnificPopup({

        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'

    });

    $('.video-popup').magnificPopup({
        type: 'iframe'
    });


    //-- filter items on button click --//
    $('.ul-filter li').on('click', function () {

        var filterValue = $(this).attr('data-filter');

        $(this).addClass('active_filter').siblings().removeClass('active_filter');

        $grid.isotope({filter: filterValue});

    });

    /*----------------------------------------
            05. responsiveSlides plugin
    ------------------------------------------*/
    var project_slider = '.project-slider';

    if ($(project_slider).length) {

        $(project_slider).responsiveSlides({
            nav: true,
            prevText: '<i class="pe-7s-angle-left"></i>',
            nextText: '<i class="pe-7s-angle-right"></i>'
        });

    }

})(jQuery);
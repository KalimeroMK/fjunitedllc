<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Trucking - Transportation and Logistics</title>
    <meta name="description" content="fjunitedllc is transportation and Logistics company">
    <meta name="author" content="Zoran Shefot Bogoevski">
    <meta name="keywords"
          content="transportation, logistics, transportation template, logistics template, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('theme/css/all.css') }}"/><!-- bootstrap grid -->
    <!-- Stylesheets -->
@yield('style')

<!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600'
          rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="{{ asset('theme/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/masterslider/skins/default/style.css') }}">
    <!-- Fontawesome icons css -->
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script src="{{ asset('theme/js/all.js')}}"></script><!-- jQuery library -->
<script>
    /* <![CDATA[ */
    jQuery(document).ready(function ($) {
        'use strict';

        function equalHeight() {
            $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                var maxHeight = $(this).outerHeight();
                $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
            });
        };

        $(document).ready(equalHeight);
        $(window).resize(equalHeight);

        // MASTER SLIDER START
        var slider = new MasterSlider();
        slider.setup('masterslider', {
            width: 1140, // slider standard width
            height: 854, // slider standard height
            space: 0,
            speed: 50,
            layout: "fullwidth",
            centerControls: false,
            loop: true,
            autoplay: true
            // more slider options goes here...
            // check slider options section in documentation for more options.
        });
        // adds Arrows navigation control to the slider.
        slider.control('arrows');

        // CLIENTS CAROUSEL START
        $('#client-carousel').owlCarousel({
            items: 6,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                600: {
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true
                }
            }
        });

        // TESTIMONIAL CAROUSELS START
        $('#testimonial-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            autoheight: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    autoHeight: true
                },
                600: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    autoHeight: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true,
                    autoHeight: true
                }
            }
        });
    });
    /* ]]> */
</script>
@yield('scripts')
</body>
</html>

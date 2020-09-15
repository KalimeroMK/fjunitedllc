let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css')
//     .version();

mix.combine([
        'public/js/core/jquery.min.js',
        'public/js/core/popper.min.js',
        'public/js/core/bootstrap-material-design.min.js',
        'public/js/plugins/perfect-scrollbar.jquery.min.js',
        'public/js/plugins/moment.min.js',
        'public/js/plugins/sweetalert2.js',
        'public/js/plugins/jquery.validate.min.js',
        'public/js/plugins/jquery.bootstrap-wizard.js',
        'public/js/plugins/bootstrap-selectpicker.js',
        'public/js/plugins/bootstrap-datetimepicker.min.js',
        'public/js/plugins/jquery.dataTables.min.js',
        'public/js/plugins/bootstrap-tagsinput.js',
        'public/js/plugins/jasny-bootstrap.min.js',
        'public/js/plugins/fullcalendar.min.js',
        'public/js/plugins/jquery-jvectormap.js',
        'public/js/plugins/nouislider.min.js',
        'public/js/plugins/arrive.min.js',
        'public/js/plugins/chartist.min.js',
        'public/js/plugins/bootstrap-notify.js',
        'public/js/material-dashboard.js',
    ],
    'public/js/all.js');
mix.minify('public/js/all.js');

mix.babel([
        'public/css/material-dashboard.css',
        'public/css/custom.css'

    ],
    'public/css/all.css');
mix.minify('public/css/all.css');
//////////////////////////////////////
//Front 
mix.combine([
        'public/theme/js/jquery-2.1.4.min.js',
        'public/theme/js/bootstrap.min.js',
        'public/theme/js/jquery.srcipts.min.js',
        'public/theme/owl-carousel/owl.carousel.min.js',
        'public/theme/masterslider/masterslider.min.js',
        'public/theme/js/jquery.matchHeight-min.js',
        'public/theme/js/jquery.dlmenu.min.js',
        'public/theme/js/include.js',
    ],
    'public/theme/js/all.js');
mix.minify('public/theme//js/all.js');

mix.babel([
        'public/theme/css/bootstrap.css',
        'public/theme/masterslider/style/masterslider.css',
        'public/theme/css/animate.css',
        'public/theme/owl-carousel/owl.carousel.css',
        'public/theme/css/style.css',
        'public/theme/css/color-blue.css',
        'public/theme/css/retina.css',
        'public/theme/css/responsive.css',


    ],
    'public/theme/css/all.css');
mix.minify('public/theme/css/all.css');
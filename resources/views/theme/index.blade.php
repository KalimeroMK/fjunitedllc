@extends('layouts.master')
@section('content')
    <div id="masterslider" class="master-slider ms-skin-default mb-0">
        <!-- first slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slide01.jpg"
                 alt="Strongest distribution network"/>

            <img class="ms-layer" src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slider-line.jpg"
                 alt=""
                 style="left: 0; top: 310px;"
                 data-type="image"
                 data-effect="left(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="0"
            />

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 340px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="300"
            >
                strongest
            </h2>

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 400px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="600"
            >
                distribution
            </h2>

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 460px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="900"
            >
                network
            </h2>
        </div><!-- .ms-slide end -->

        <!-- slide 02 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slide02.jpg"
                 alt="International Air freight"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 58px; top: 390px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                International Freight
            </h2>

            <img class="ms-layer" src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slider-line.jpg"
                 alt=""
                 style="left: 540px; top: 450px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 375px; top: 470px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                Fast International Delivery
            </p>
        </div><!-- .ms-slide end -->

        <!-- slide 03 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slide03.jpg"
                 alt="Worldwide freight services"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 258px; top: 390px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                Fjunitedllc</h2>

            <img class="ms-layer" src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slider-line.jpg"
                 alt=""
                 style="left: 540px; top: 450px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 278px; top: 470px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                We are your best choice. We got it covered!
            </p>
        </div><!-- .ms-slide slide03 end -->

        <!-- slide 04 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slide04.jpg"
                 alt="Worldwide freight services"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 388px; top: 390px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="00"
            >
                Trucking
            </h2>

            <img class="ms-layer" src="/theme/masterslider/blank.gif" data-src="/theme/img/slider/slider-line.jpg"
                 alt=""
                 style="left: 540px; top: 450px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 265px; top: 470px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                Powerful Transport & Logistics Web Solution
            </p>
        </div><!-- .ms-slide slide04 end -->
    </div><!-- #masterslider end -->

    <div class="page-content parallax parallax01 mb-70">
        <div class="container">
            <div class="row services-negative-top">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('theme/img/download.jpg') }}" class="articleImage" alt="Trucking"/>
                        </div><!-- .service-media end -->
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>GROUND SHIPPING</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We have a wide experience in overland
                                industry specific logistic solutions like
                                pharmaceutical logistics, retail and
                                automotive logistics by train or road.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('theme/img/COMPLEX.jpg') }}" class="articleImage" alt="Trucking"/>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>LARGE PROJECTS</h4>
                            </div><!-- .custom-heading end -->
                            <p>
                                We bring your goods safely to worldwide
                                destinations with our great sea fright
                                services. We offer LLC and FLC shipments
                                that are fast and effective.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('theme/img/international-and-overseas-big.jpg') }}" class="articleImage"
                                 alt="Trucking"/>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>INTERNATIONAL DELIVERY</h4>
                            </div><!-- .custom-heading end -->
                            <p>
                                We provide highly professional supply chain management
                                package including cost-effective and fast
                                means of transportation to your preferred destination
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->

            <div class="row">
                {{--                <div class="col-md-12">--}}
                {{--                    <a href="services02.html" class="btn btn-big btn-yellow btn-centered">--}}
                {{--                            <span>--}}
                {{--                                view details--}}
                {{--                            </span>--}}
                {{--                    </a>--}}
                {{--                </div><!-- .col-md-12 end -->--}}
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>What we Offer</h2>
                        <p>
                            TAILORED LOGISTIC SERVICES
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row mb-30">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="/theme/img/svg/pi-checklist-2.svg" alt="checklist icon"/>
                        </div><!-- .icon-container end -->
                        <a href="{{ route('contact') }}">
                            <div class="service-details">
                                <h3>Contract logistics</h3>
                                <p>
                                    Need custom logistic service? We got it
                                    covered. From overland, air, rail and sea
                                    transportation. Fast, safe and accurate
                                    shipment provided all over the globe.
                                </p>
                            </div><!-- .service-details end -->
                        </a>
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="/theme/img/svg/pi-touch-desktop.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->
                        <a href="{{ route('contact') }}">
                            <div class="service-details">
                                <h3>Consulting Services</h3>
                                <p>
                                    Don't know what mean of transportation
                                    would be right for you, or you need someone
                                    for full supply chain management? Please contact
                                    us. Our team of professionals will be happy to help.
                                </p>
                            </div><!-- .service-details end -->
                        </a>
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-dark-blue column-img-bkg dark mb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                        <div class="custom-heading">
                            <h3>INDUSTRY SECTORS COVERAGE</h3>
                        </div><!-- .custom-heading end -->

                        <p>
                            We cover different industry sectors, from food and
                            beverage, chemical, retail, durable goods and more.
                            Check the full list.
                        </p>

                        <ul class="service-list clearfix">
                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="/theme/img/svg/pi-cargo-box-2.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Consumer Packaged Goods
                                </p>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="/theme/img/svg/pi-food-beverage.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Food and Beverage
                                </p>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="/theme/img/svg/pi-cargo-retail.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Retail Goods
                                </p>
                            </li>
                        </ul><!-- .service-list end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 img-bkg01">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.bkg-dark-blue end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="custom-heading">
                            <h3>what clients say</h3>
                        </div><!-- .custom-heading end -->

                        <div class="carousel-container">
                            <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                                <div class="owl-item">
                                    <div class="testimonial">
                                        <p>
                                            "Good Job on this one. We appreciate finding good carriers. Have a great
                                            weekend!"
                                        </p>

                                        <div class="testimonial-author">
                                            <p>
                                                John Wishman <br/>
                                                Day or Nite Express </p>
                                        </div><!-- .testimonial-author end -->
                                    </div><!-- .testimonial end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="testimonial">
                                        <p>
                                            Awesome job great service team, thank you very much. The pleasure was all
                                            mine.
                                        </p>

                                        <div class="testimonial-author">
                                            <p>Mike Walter<br> Detailed Logistcs</p>
                                        </div><!-- .testimonial-author end -->
                                    </div><!-- .testimonial end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="testimonial">
                                        <p>
                                            Thank you so much team. I really appreciate the excellent service and look
                                            forward to doing business with you again."
                                        </p>

                                        <div class="testimonial-author">
                                            <p>John Ross <br>Port City Logistics
                                            </p>
                                        </div><!-- .testimonial-author end -->
                                    </div><!-- .testimonial end -->
                                </div><!-- .owl-item end -->
                                <div class="owl-item">
                                    <div class="testimonial">
                                        <p>
                                            Likewise team!!! You guys were great! Thank you for the help.
                                        </p>

                                        <div class="testimonial-author">
                                            <p>Lucero Saucedo <br>Third Coast Logistics
                                            </p>
                                        </div><!-- .testimonial-author end -->
                                    </div><!-- .testimonial end -->
                                </div><!-- .owl-item end -->
                                <div class="owl-item">
                                    <div class="testimonial">
                                        <p>
                                            Thanks team! Great job here from start to end. Very glad our paths crossed
                                            on this one and hope to see you guys in the future on others.
                                        </p>

                                        <div class="testimonial-author">
                                            <p>Dan Babchuck <br>Sunteck Transportation
                                            </p>
                                        </div><!-- .testimonial-author end -->
                                    </div><!-- .testimonial end -->
                                </div><!-- .owl-item end -->
                            </div><!-- #testimonial-carousel end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-12 clearfix">
                        <div class="custom-heading">
                            <h3>our location</h3>
                        </div><!-- .custom-heading end -->
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.922561602594!2d-87.97926998456244!3d41.76532737923132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e4fa1785cb8b5%3A0x6bd277f247c2b337!2s6722%20Alpine%20Ln%2C%20Westmont%2C%20IL%2060559%2C%20USA!5e0!3m2!1sen!2smk!4v1600352410928!5m2!1sen!2smk"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-grey">
            <h1 class="text-center">Our trusting partners</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-container">
                            <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client01.jpg"
                                                                       alt="client01"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client02.jpg"
                                                                       alt="client02"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client03.jpg"
                                                                       alt="client03"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client04.jpg"
                                                                       alt="client04"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client05.jpg"
                                                                       alt="client05"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client06.jpg"
                                                                       alt="client06"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client07.jpg"
                                                                       alt="client07"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client08.jpg"
                                                                       alt="client08"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client09.jpg"
                                                                       alt="client09"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client10.jpg"
                                                                       alt="client10"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client11.jpg"
                                                                       alt="client11"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client12.jpg"
                                                                       alt="client12"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client13.jpg"
                                                                       alt="client13"/></div>
                                <div class="owl-item articleLogo"><img src="/theme/img/pics/client14.jpg"
                                                                       alt="client14"/></div>
                            </div><!-- .owl-carousel.owl-carousel-navigation end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
        <div class="text-center SubmitButton">
            <a href="{{ route('carriers') }}">
                <button class="btn-gradient parallax01">APPLY NOW</button>
            </a>
        </div>
@endsection

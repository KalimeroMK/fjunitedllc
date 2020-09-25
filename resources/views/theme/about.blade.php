@extends('layouts.master')
@section('content')
    @include('admin.layouts.notify')

    <div class="page-title-style01 page-title-negative-top pt-bkg08" style="margin-top: 116px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About us</h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('theme/img/about.jpg') }}" class="img-fluid" style="height: fit-content">
            </div><!-- .col-md-12 end -->
            <div class="col-md-6">
                <p>
                    FJ UNITED, LLC is a trucking company founded in 2019 in Westmont, IL. We are provide safe and
                    reliable transportation services to a diverse group of customers throughout the USA.
                    Utilizing and integrated, multimodal approach, we provide capacity-oriented solutions centered
                    on delivering customer value and industry-leading service. In the meantime the enterprise has
                    evolved to a thoroughly equipped and professional company for international transport.
                    For the last 6 months, we successfully delivered more than 700 loads.<br>

                    Where We Operate<br>

                    FJ UNITED, LLC provides shippers of all sizes with fast and reliable transportation services
                    across all major modes of freight.
                    FJ UNITED, LLC will help you connect the right mode and route to meet your cost and service
                    expectations all around the USA.<br>
                    * Specialized Services<br>
                    * Expredited<br>
                    * Truckload<br>
                    * Less-than-truckload (LTL)<br>
                    * Lift Gate Available<br>
                    * Inside Delivery</p>
            </div><!-- .col-md-12 end -->
            <div class="col-md-6">
                <p>Our Strategy<br>
                    The strategic aims of the organisation FJ UNITED LLC are increasing the profit, continuant
                    growth and development of the organisation and expansion of activities in the neighboring
                    countries.<br>
                    All of these features show that we are a stable and confidential partner oriented toward long
                    term collaboration.<br>
                    Our Mission<br>
                    Our mission is to promote and expand the company through better renewal and health of the
                    vehicle fleet, education of staff,
                    preserving cooperation with existing customers and attracting other potential customers.</p>
            </div><!-- .col-md-12 end -->
            <div class="col-md-6">
                <img src="{{ asset('theme/img/about1.jpg') }}" class="img-fluid">
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
@endsection
@extends('layouts.master')
@section('content')
    @include('admin.layouts.notify')
    <div class="page-title-style01 page-title-negative-top pt-bkg08" style="margin-top: 116px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact us</h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>Let us know how we can help. We are ready to get moving!</h3>
                </div><!-- .custom-heading.left end -->
                <!-- .contact form start -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{ route('contact.send') }}" class="wpcf7 clearfix">
                    @csrf
                    <fieldset>
                        <label>
                            <span class="required">*</span> First Name:
                        </label>

                        <input type="text" name="name" class="wpcf7-text" id="contact-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Last Name:
                        </label>

                        <input type="text" name="last_name" class="wpcf7-text" id="contact-last-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Email:
                        </label>

                        <input type="email" name="email" class="wpcf7-text" id="contact-email">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Message:
                        </label>

                        <textarea rows="8" name="message" class="wpcf7-textarea" id="contact-message"></textarea>
                    </fieldset>

                    <input type="submit" class="wpcf7-submit" value="send">
                </form><!-- .wpcf7 end -->
            </div><!-- .col-md-6 end -->

            <div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.922561602594!2d-87.97926998456244!3d41.76532737923132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e4fa1785cb8b5%3A0x6bd277f247c2b337!2s6722%20Alpine%20Ln%2C%20Westmont%2C%20IL%2060559%2C%20USA!5e0!3m2!1sen!2smk!4v1600352410928!5m2!1sen!2smk"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
                <br>
                <div class="custom-heading">
                    <h3>company information</h3>
                </div><!-- .custom-heading end -->
                <h3>
                    Phone: +1 630 828 6501<br>
                    Fax: +1 630 839 2778
                </h3>
                <a href="mailto:"><h3>dispatch@fjunitedllc.com</h3></a>
            </div>
        </div>
    </div>
@endsection
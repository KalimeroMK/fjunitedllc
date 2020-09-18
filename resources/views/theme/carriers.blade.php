@extends('layouts.master')
@section('content')
    @include('admin.layouts.notify')
    <div class="page-title-style01 page-title-negative-top pt-bkg08" style="margin-top: 116px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Carriers</h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>your inquiry</h3>
                </div><!-- .custom-heading.left end -->
                <!-- .contact form start -->
                <form method="post" action="{{ route('contact.send') }}" class="wpcf7 clearfix">
                    @csrf
                    <fieldset>
                        <label>
                            <span class="required">*</span> First Name:
                        </label>

                        <input type="text" name="name" class="wpcf7-text" id="contact-name">
                    </fieldset>
                    <label>
                        <span class="required">*</span> Middle Name:
                    </label>

                    <input type="text" name="middle_name" class="wpcf7-text" id="contact-name">
                    <fieldset>
                        <label>
                            <span class="required">*</span> Last Name:
                        </label>

                        <input type="text" name="last_name" class="wpcf7-text" id="contact-last-name">
                    </fieldset>
                    <fieldset>
                        <label>
                            <span class="required">*</span> Phone number:
                        </label>
                        <input type="email" name="phone" class="wpcf7-text" id="contact-email">
                    </fieldset>
                    <fieldset>
                        <label>
                            <span class="required">*</span> Email:
                        </label>

                        <input type="email" name="email" class="wpcf7-text" id="contact-email">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Do you have experiance? :
                        </label>
                        <label><input class="form-check form-check-inline" type="radio" value="yes" name="experience">Yes</label>
                        <label><input class="form-check form-check-inline" type="radio" value="no" name="experience">No</label>
                    </fieldset>
                    <fieldset>
                        <label>
                            <span class="required">*</span> How Old Are You :
                        </label>
                        <input type="number" name="age" class="wpcf7-text" id="contact-email">
                    </fieldset>
                    <fieldset>
                        <label>
                            <span class="required">*</span> Please select one of the options:
                        </label>
                        <select name="options" class="form-control" id="sel1">
                            <option>Owner Operator</option>
                            <option>Company Driver</option>
                        </select>
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
                <h3>Become part of the nation’s best tracking network. Join us be part of our big family.</h3>
                <h3>
                    +1 630 828 6501
                </h3>
                <a href="mailto:"><h3>dispatch@fjunitedllc.com</h3></a>
            </div>
        </div><!-- .col-md-6 end -->
    </div>
@endsection
@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description', 'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')



    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro mobile-app-development-banner light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1 data-title="Investments Managment"><span>Mobile App Development</span></h1>
            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <!-- Service Section -->
    <div id="services-section" class="pt-80 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-sidebar-widget">
                        <div class="special-links">
                            <ul>
                                <!-- <li><a href="about-us">About us</a></li> -->
                                <li><a href="{{ route('web-development')}}">Web Development</a></li>
                                <li><a class="active" href="{{ route('mobile-app-development')}}">Mobile App Development</a></li>
                                <li><a href="{{ route('custom-software-development')}}">Custom Software Development</a></li>
                                <li><a href="{{ route('graphic-design')}}">Graphic Design</a></li>
                                <li><a href="{{ route('digital-marketing')}}">Digital Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="sec-title">
                            <h2>Send us an email!</h2>
                        </div>
                        <ul class="brochure-btns">
                            <li><a href="{{ route('contact')}}" class="clearfix"><i class="fa fa-paper-plane-o"></i>
                                    <span>Get a quote</span> </a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="text-box mt-xs-30">

                        <div class="row mb-45">
                            <div class="col-md-4">
                                <div class="box-title text-center mb-20">
                                    <h4>Android App Development</h4>
                                </div>
                                <figure class="mb-20 text-center"> <img src="{{asset('assets/frontend/images/android-app-development.png')}}"
                                        alt="Gtech Android App Development"> </figure>
                                <p>Compatible App Development Service for Android devices customised for businesses, with
                                    responsive and intuitive UI functionalities for target customers.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="box-title text-center mb-20">
                                    <h4>iOS App<br class="hidden-xs">Development</h4>
                                </div>
                                <figure class="mb-20 text-center"> <img src="{{asset('assets/frontend/images/iphone-app-development.png')}}"
                                        alt="Gtech iOS App Development"> </figure>
                                <p>Seamless and customised Business Apps development service for iOS devices essentially
                                    meeting your brand and business needs.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="box-title text-center mb-20">
                                    <h4>CROSS-PLATFORM APP DEVELOPMENT</h4>
                                </div>
                                <figure class="mb-20 text-center"> <img src="{{asset('assets/frontend/images/cross-platform-development.png')}}"
                                        alt="Gtech CROSS-PLATFORM APP DEVELOPMENT"> </figure>
                                <p>Cost-efficient, tech-friendly apps customised for your business. One developed app that
                                    runs in different platforms like iOS and Android.</p>
                            </div>
                        </div>
                        <div class="row mb-45">
                            <div class="col-md-12">
                                <div class="text-content mb-20">
                                    <div class="box-title mb-20">
                                        <h4>We offer:</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-content mb-20">
                                    <ul class="what-we-offer">
                                        <li>
                                            <h5>NATIVE APPLICATION DEVELOPMENT</h5>
                                        </li>
                                        <li>
                                            <h5>CROSS PLATFORM APPLICATION DEVELOPMENT</h5>
                                        </li>
                                        <li>
                                            <h5>EFFECTIVENESS</h5>
                                        </li>
                                        <li>
                                            <h5>USER SATISFACTION</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                    <div class="text-content mb-20">
                      <ul class="what-we-offer">
                        <li>
                          <h5>Effectiveness</h5>
                          <p>Our apps are build based on well analysed requirements and business type and scenario of our clients. We make sure that the apps serve the purposes effectively that our clients wanted. </p>
                        </li>
                        <li>
                          <h5>Efficiency</h5>
                          <p>In the end a good mobile phone app is all about user satisfaction, if a user gets what they wants, they will ultimately grow fond of the business and brand loyalty will develop eventually. We understand that and design and develop our apps keeping that in our mind. That is why our apps serve exactly what the end users expect it to serve</p>
                        </li>
                      </ul>
                    </div>
                  </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section end -->




@endsection

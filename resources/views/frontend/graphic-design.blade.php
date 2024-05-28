@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')


    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro graphic-design-banner light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1 data-title="Investments Managment"><span>Graphic Design</span></h1>
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
                                <li><a href="{{ route('web-development') }}">Web Development</a></li>
                                <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></li>
                                <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a>
                                </li>
                                <li><a class="active" href="{{ route('graphic-design') }}">Graphic Design</a></li>
                                <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="sec-title">
                            <h2>Send us an email!</h2>
                        </div>
                        <ul class="brochure-btns">
                            <li><a href="contact" class="clearfix"><i class="fa fa-paper-plane-o"></i>
                                    <span>Get a quote</span> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="text-box mt-xs-30">
                        <div class="text-content mb-45">
                            <div class="text-content mb-45">
                                <p>Don’t you want people remember you by colors and patterns whenever they hear the name of
                                    your business? Don’t you think it will be really great when people will compare colors
                                    and shapes by referring to your logo? It is not an impossible dream you know. It can
                                    happen.</p>
                            </div>
                            <div class="text-content mb-45">
                                <div class="box-title mb-20">
                                    <h4>IF YOU HAVE A STRONG BRAND IDENTITY!</h4>
                                </div>
                                <p>G Tech Solution offers great Graphic designing service for your business. Our team
                                    provides necessary design services to establish a very unique brand identity that will
                                    attract the attention of your target population. You can rely on us on providing quality
                                    graphic designing service.</p>
                            </div>
                            <div class="text-content mb-45">
                                <div class="box-title mb-20">
                                    <h4>WHAT YOU SEE IS WHAT YOU REMEMBER! Yes!</h4>
                                </div>
                                <p>Because when you see something intriguing you remember it better, than something you hear
                                    about. So, good designs for logo and other promotional purposes, whether it be business
                                    cards, fliers and pamphlets, a catchy and relevant design will get you more attention
                                    than word of mouth. So, a good and catchy design will help you to promote your business
                                    very strongly!</p>
                            </div>
                            <div class="text-content mb-45">
                                <div class="box-title mb-20">
                                    <h4>ALL PROFESSIONAL YET RELATABLE!</h4>
                                </div>
                                <p>It is a business after all. You might not want to cross the line between professional and
                                    casual depending on the type of business you are in. You don’t need to worry about that!
                                    We always do thorough analysis before starting any project and come up with the most
                                    optimum, relatable yet professional design ideas that will represent the dignity and
                                    concept of your business as it rightfully deserve!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section end -->



@endsection

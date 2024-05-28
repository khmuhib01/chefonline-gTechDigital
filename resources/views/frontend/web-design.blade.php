@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')



    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro web-development-banner light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <p class="services-head"><span>Web Design &amp; Development</span></p>
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
                                <li><a class="active" href="{{ route('web-development') }}">Web Development</a></li>
                                <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></li>
                                <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a>
                                </li>
                                <li><a href="{{ route('graphic-design') }}">Graphic Design</a></li>
                                <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a></li>
                                <!-- <li><a href="graphic-design">Graphic Design</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="sec-title">
                            <h2>Send us an email!</h2>
                        </div>
                        <ul class="brochure-btns">
                            <li><a href="{{ route('contact') }}" class="clearfix"><i class="fa fa-paper-plane-o"></i>
                                    <span>Get a quote</span> </a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="text-box mt-xs-30">
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h1 class="services-text-heading">WEBSITE DESIGN & DEVELOPMENT SERVICES</h1>
                            </div>
                            <p>GTech offers reliable website design and development service that is responsive and device
                                independent. With a team of enthusiastic and skillful web designers and developers, we are
                                ready to help you in building the perfect website that is in sync with your business.</p>
                            <p>Virtual existence of your business is equally important as the physical address of the
                                business. And imperative is a good website as it is the only thing that represents your
                                business in the online world. Your website does not only have your information but also
                                portrays your ethos to your target market and competitors alike. From Brand Persona to
                                customer experience, GTech ensures the projection of the right message and essence through
                                skills and expertise.</p>
                        </div>
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>HOW WILL WE HELP YOU!</h4>
                            </div>
                            <ul class="our-point left-border">
                                <li>Carrying out the necessary analysis according to your business and brainstorm ideas to
                                    design a website that represent your business best.</li>
                                <li>Start developing the website only after the analyses and mock-ups have been approved by
                                    the clients.</li>
                                <li>Thorough and efficient development and testing process is rolled out for the end product
                                    to be bug free, responsive and user-friendly.</li>
                                <li>Taking feedback and further recommendations, if any, from clients and deliver
                                    accordingly.</li>
                            </ul>
                            <br>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section end -->



@endsection

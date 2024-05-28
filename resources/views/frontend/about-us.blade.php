@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')


    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro about-us light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1 data-title="Investments Managment"><span>About us</span></h1>
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
                                <li><a href="{{ route('web-development') }}">Web Development</a></li>
                                <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></li>
                                <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a>
                                </li>
                                <li><a href="{{ route('graphic-design') }}">Graphic Design</a></li>
                                <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="text-box mt-xs-30">
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>About Global Tech Solution</h4>
                            </div>
                            <p>Global Tech Solution is a team of talented and enthusiastic individuals who aspire to take
                                new challenges. We have started creating websites since 2014 and never looked back since
                                then. Now we are an organization that offers not just websites for businesses but complete
                                digital business solutions that include website design and development, smart device apps
                                development, online marketing and graphic design. </p>
                            <p>Though we have expanded our services to different directions, one thing has remained
                                constant, our commitment and consistency to provide quality service. We believe in one
                                simple motto, we benefit when our clients are benefitting. Our success comes from the
                                success of our customers, so we put our heart and soul to bring them the well-deserved
                                success to our respected clients.</p>
                            <p>That is why we employ enthusiastic and highly skilled individuals who don’t mind to push the
                                boundary and think outside the box to bring about more creative solutions to the challenges
                                we take. That enables us to optimize your budget and ensure maximum level of success from
                                your investment.</p>
                        </div>
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>Why us?</h4>
                            </div>
                            <div class="row mb-45">
                                <div class="col-md-6">
                                    <div class="text-content mb-20">
                                        <ul class="our-point left-border">
                                            <li>Consistent Track Record</li>
                                            <li>An Enthusiastic Team of Skilled and Experienced Individuals</li>
                                            <li>Dependable Service</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-content mb-20">
                                        <ul class="our-point left-border">
                                            <li>Customised and Flexible Work Approach</li>
                                            <li>Different Packages to Suit Different Businesses</li>
                                            <li>Commendable RoI</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section end -->



@endsection

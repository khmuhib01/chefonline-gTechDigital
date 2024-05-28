@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')



    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro web-development-banner light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <p class="services-head"><span>Custom Software Development</span></p>
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
                                <li><a class="active" href="{{ route('custom-software-development') }}">Custom Software
                                        Development</a>
                                </li>
                                <li><a href="{{ route('graphic-design') }}">Graphic Design</a></li>
                                <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a></li>
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
                                <h1 class="services-text-heading">BUSINESS SOFTWARE TAILORED TO YOUR NEEDS</h1>
                            </div>
                            <p><b>GTech Solutions</b> develops <b>customized software solution</b> for businesses as per
                                enterprise needs. We develop platform independent software solutions that meet the unique
                                demands of our customers.</p>

                            <p>A dedicated team of skilled specialists design and develop <b>custom software</b> for
                                businesses. We do a thorough research of the businesses of our customers. Using the
                                knowledge of different businesses to build efficient and responsive <b>custom software
                                    solutions</b> for our clients accordingly, we provide <b>complete software
                                    solutions</b>. We also offer maintenance service with our <b>custom software development
                                    service</b>.</p>
                        </div>
                        <div class="text-content mb-45">
                            <p>Our strength lies in:</p>
                            <ul class="our-point left-border">
                                <li>A strong team of skilled and experienced workers</li>
                                <li>Quality service providing capability and mindset</li>
                                <li>Consistency</li>
                            </ul>
                            <br>
                            <p>We offer different types of custom business solutions for different business needs. Our
                                expertise covers different types of business solutions along with the following ones:</p>
                            <p>
                                <b>Online Ordering System</b><br>
                                <b>Booking Service Solution</b><br>
                                <b>HRM Software</b><br>
                                <b>Point of Sales (POS) System</b><br>
                                <b>Sales Software</b><br>
                                <b>Accounting Software</b><br>
                                <b>Purchase Software</b><br>
                                <b>Stock and Inventory System</b><br>
                                <b>Enterprise Business Solutions (EBS)</b>
                            </p>
                        </div>
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>DEVELOPMENT PROCESS</h4>
                            </div>
                            <p>We develop the custom software solution for businesses in a regularized process. We start
                                from analyzing your business requirements as per the kind of business you deal in. With a
                                detailed requirement analysis at hand, of course along with the confirmation of our client,
                                we enter the development phase.</p>

                            <p>We develop each custom software for businesses with the given set of requirements with the
                                latest tools and technologies available. We develop and test the websites for any sort of
                                bugs or missing functionalities so you get a bug free, platform independent software for
                                your business that will surely enhance your business efficiency and support your business to
                                grow. However, we also provide maintenance service for the custom software’s we build.</p>
                        </div>
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>QUALITY</h4>
                            </div>
                            <p>We are a team of officially certified and highly professional experts and talented website
                                developers with technological expertise and thorough knowledge about the industry. We focus
                                on quality. We optimize the best combination of quality, budget and time limit. That is why
                                G Tech solution is a great investment for your business.</p>
                        </div>
                        <div class="text-content mb-45">
                            <div class="box-title mb-20">
                                <h4>TECHNOLOGIES</h4>
                            </div>
                            <p>We master all levels of software complexity and provide quality solutions using the following
                                technologies:</p>
                            <img src="{{ asset('assets/frontend/images/web-development-page.jpg') }}" class="img-responsive"
                                alt="web development">
                            <br>
                            <ul class="our-point left-border">
                                <li><strong>Back end and desktop:</strong> Java, PHP, python, Node.js, .NET</li>
                                <li><strong>Mobile:</strong> iOS, Android, Windows Phone, Apache Cordova, Xamarin</li>
                                <li><strong>Frontend:</strong> HTML5, CSS3, JS</li>
                                <li><strong>Databases:</strong> Microsoft SQL Server, MySQL, Oracle, SQL Azure, PostgreSQL,
                                    MongoDB </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section end -->



@endsection

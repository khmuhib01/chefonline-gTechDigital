@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')


    <section class="inner-intro seo-banner light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <p class="services-head"><span>Digital Marketing ( SEO and SMM )</span></p>
            </div>
        </div>
    </section>
    <!-- BEGIN MAIN CONTENT -->
    <div class="content-main">

        <!-- BEGIN WHY US-->
        <div class="why-us content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 section-top">
                        <h1 class="welcome text-center">Looking for a Digital Marketing & SEO hand?</h1>

                        <p class="text-center">At GTech, we offer ingenious solutions to help you with web marketing. To get
                            your business recognized in the highly competitive setting, especially in case of businesses
                            like restaurant service. We can design a solution to establish an online identity of business
                            that complies with the guidelines of Google and beneficial to your business at the same time. We
                            help you to get more of your potential customers by optimising webpage contents & off page SEO.
                            We are on a mission to build, grow and maintain loyal communities at every touch point. Along
                            with traditional SEO services, we provide local SEO service and required Social Media services
                            as well.</p>
                    </div>

                </div>

            </div>
        </div><!-- end .content-section -->
        <!-- END WHY US -->
        <section id="why-choose-us" class="gray-section">
            <div class="transparent"></div>
            <div class="container content-up">
                <div class="row">
                    <div class="col-md-12 text-center marginbottom30 section-title">
                        <h2>Why Choose Us</h2>
                        <span class="separator">//</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive center-block"
                            src="{{ asset('assets/frontend/images/web-general-responsive1.png') }}" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-check-square-o  pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne">
                                            Affordable Solutions
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Our ultimate goal is to ensure you see the highest ROI from your marketing campaign.
                                        We make your budget work as hard as possible to bring you the optimum results and
                                        make your restaurant a popular name.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-square-o  pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo">
                                            Beat The Competition
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We make sure that you outperform your competition in your Industry and sit on top of
                                        the pile. This ensures that potential customers find your business first.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-square-o pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree">
                                            Unrivalled Resources
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Our team of digital marketing experts work tirelessly to achieve results for your
                                        business. Your campaign will always have the firepower required, even in the most
                                        competitive sectors, whether it is a restaurant business or a business in need of
                                        local SEO.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-square-o pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseFour">
                                            Restaurant Branding
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Our strategies and approaches create an image for your restaurant and establishes an
                                        online brand identity to it. This enables your restaurant to build an association to
                                        your target customers and create an efficient reputation management system.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-square-o pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseFive">
                                            Credible Tactics
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        GTech builds websites based on the missions and visions of your restaurant. We use
                                        100% authentic white hat SEO tactics based on your strengths and keep your
                                        competitions in mind.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-square-o pull-left"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseSix">
                                            Suitable Packages
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We offer different SEO Service packages based on your need and budget. The packages
                                        are reasonably priced and targeted to serve your purposes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="{{ route('service-restaurant-seo') }}"
                            class="btn btn-custom text-uppercase transition custom-radius animated fadeInUp">See Details</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEGIN SERVICES -->
        <div class="services content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 section-top">
                        <h2 class="section-title text-center">Discover Our Services</h2>

                        <p class="text-center">The most interesting aspect of what we do in <strong><span
                                    class="color-red">GTech</span></strong> is brainstorming strategies and implementing
                            those, to help the local businesses of our clients to grow. Click below to have a look at the
                            SEO and related services we provide for your restaurant or other local and international
                            businesses.</p>
                    </div>
                </div>
                <div class="row service-item-list">

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="{{ route('service-seo') }}">
                                    <img src="{{ asset('assets/frontend/images/seo.png') }}"
                                        alt="search engine Optimisation">
                                    <h5 class="service-title text-uppercase">Search Engine Optimisation</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-seo') }}" class="service-link text-uppercase text-center">See
                                Details</a>
                        </div>
                    </div>

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="{{ route('service-social-media') }}">
                                    <img src="{{ asset('assets/frontend/images/social-media-marketing.png') }}"
                                        alt="social media marketing">
                                    <h5 class="service-title text-uppercase">Social Media Marketing</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-social-media') }}"
                                class="service-link text-uppercase text-center">See Details</a>
                        </div>
                    </div>

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="{{ route('service-facebook-advertisement') }}">
                                    <img src="{{ asset('assets/frontend/images/pay-per-click.png') }}"
                                        alt="Facebook Advertisement">
                                    <h5 class="service-title text-uppercase">Facebook Advertisement</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-facebook-advertisement') }}"
                                class="service-link text-uppercase text-center">See
                                Details</a>
                        </div>
                    </div>

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="service-restaurant-seo">
                                    <img src="{{ asset('assets/frontend/images/restaurant-branding-box.png') }}"
                                        alt="Web Development">
                                    <h5 class="service-title text-uppercase">Restaurant SEO</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-restaurant-seo') }}"
                                class="service-link text-uppercase text-center">See
                                Details</a>
                        </div>
                    </div>

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="{{ route('service-email-marketing') }}">
                                    <img src="{{ asset('assets/frontend/images/email-marketing.png') }}"
                                        alt="Email Marketing">
                                    <h5 class="service-title text-uppercase">Email Marketing</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-email-marketing') }}"
                                class="service-link text-uppercase text-center">See
                                Details</a>
                        </div>
                    </div>

                    <div class="col-sm-4 service-item">
                        <div class="item-wrap">
                            <div class="inner text-center">
                                <a href="{{ route('service-content-management') }}">
                                    <img src="{{ asset('assets/frontend/images/reputation-management.png') }}"
                                        alt="Reputation Management">
                                    <h5 class="service-title text-uppercase">Content Management</h5>
                                </a>
                            </div>
                            <a href="{{ route('service-content-management') }}"
                                class="service-link text-uppercase text-center">See
                                Details</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END SERVICES -->

        <!-- BEGIN ADDITIONAL INFO -->
        <div class="additional-info content-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-push-6  text-center">
                        <img class="info-image"
                            src="{{ asset('assets/frontend/images/benefits-of-restaurant-seo.png') }}"
                            alt="Additional Info">
                    </div>
                    <div class="col-sm-6 col-sm-pull-6">
                        <div class="section-top">
                            <h2 class="section-title">Benefits of Restaurant SEO</h2>
                        </div>
                        <ul class="key-features list-unstyled">
                            <li><i class="ti-check-box"></i> Outrank Competitors in Search</li>
                            <li><i class="ti-check-box"></i> Boost Brand Exposure and Awareness</li>
                            <li><i class="ti-check-box"></i> Reap a huge benefit in the future with initial minimal
                                investment</li>
                            <li><i class="ti-check-box"></i> Helps diners find your restaurant online and offline</li>
                            <li><i class="ti-check-box"></i> Fill more tables and get more orders</li>
                            <li><i class="ti-check-box"></i> Take control of your business </li>
                        </ul>
                        <a href="{{ route('contact') }}"
                            class="btn btn-custom text-uppercase transition custom-radius">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ADDITIONAL INFO -->



        <!-- BEGIN MOBILE MARKETING -->
        <div class="content-section mobile-marketing">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">Pricing & Packages</h2>
                        <p>
                            All Digital Marketing packages have been specifically tailored to ensure we maximise the chances
                            of ranking our clients for their keywords, having taken into account all the Panda and Penguin
                            updates.
                        </p>
                        <a href="{{ route('packages') }}"
                            class="btn btn-custom text-uppercase transition animated fadeInUp">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOBILE MARKETING -->

        <!-- BEGIN COMMON QUESTION -->
        <div class="content-section common-question">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Common Questions</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">Do you have setup fees or contracts?</h4>
                                    <p class="answer">
                                        We do have a set-up fee. But right at this moment we have a promotional offer and
                                        not charging that. We are also happy to let you know that we do not bind our
                                        valuable clients into contracts. We are happy to serve you and are willing to have
                                        faith in your conscience.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">How much does it cost?</h4>
                                    <p class="answer">
                                        Each package is different as is each business we meet. Above are the basic prices we
                                        offer should you know what your business needs. We can also offer personalised
                                        tailored packages to suit the requirements of your business, just get in touch to
                                        find out more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">How many packages can I have at any one time?</h4>
                                    <p class="answer">
                                        This can be entirely up to our client. We do however, recommend they discuss their
                                        business requirements with us first so we can ensure they are getting the correct
                                        services and not paying for something they may not need as much as another area of
                                        business.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">Do you agree a marketing plan before launching it?</h4>
                                    <p class="answer">
                                        Put simply, Yes. We never roll anything out until our clients are happy and have
                                        signed their contracts. We are quite flexible so if either party see room for
                                        change, we are happy to discuss this.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">What is the billing cycle?</h4>
                                    <p class="answer">
                                        We charge a certain amount of monthly fee depending on the package. However, we do
                                        provide weekly invoice to let you know about the activities done and the costing
                                        related to those.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="common-question-item">
                                    <h4 class="question">Are Blogs Good for SEO?</h4>
                                    <p class="answer">
                                        Whether blogs are good for SEO purposes is actually irrelevant-the content is key.
                                        Blogs are one of the platforms where contents regarding your business are published.
                                        So, contents rich in keywords are sure to get you a boost and if blog is the
                                        platform where such rich contents are available, then why not?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COMMON QUESTION -->

    </div>
    <!-- END MAIN CONTENT -->


@endsection

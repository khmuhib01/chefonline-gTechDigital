@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')


    <!-- BEGIN PAGE BANNER -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Social Media Marketing</h1>
                    <h2 class="page-title">Social Media Marketing for Boosting Business Online</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER -->

    <!-- BEGIN MAIN CONTENT -->
    <div class="content-main">
        <div class="container">
            <div class="row">

                <div class="com-md-9 col-sm-8 content-section">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <h3 class="section-title border-line">Social Media Optimisation & Advertisement </h3>
                            <p>
                                The importance of social media marketing is more evident than ever before. It has become a
                                cardinal part of online marketing strategy now. It is cost effective and at the same time
                                has an impeccable reachability to the target audiences. Consequently, it boosts sales and
                                probability of leading the market. Hence, social media marketing has become a “must have”
                                for businesses that are dealing in a highly competitive marketplace and always in search for
                                an edge to stay ahead in the competition.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <img src="{{ asset('assets/frontend/images/social-media-marketing-small.png') }}"
                                alt="Search Engine Optimisation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title border-line">Leveraging Social Media to Drive Customer Results</h3>
                            <p>
                                Here at <strong><span class="color-red">GTech</span></strong> we have an expert team of
                                social media marketing with thorough understanding of how your business needs to be marketed
                                effectively and efficiently in major social networking platforms including Facebook and
                                Twitter along with platforms specialized for your business. We make sure that you get to
                                harness the power of social media before our competitors do and stay one step ahead. Get in
                                touch today to learn more about our social media marketing services.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h3 class="section-title border-line">The Benefits of Social Media Marketing</h3>
                            <p>
                                The benefits of social media marketing are real and highly achievable when expert guidance
                                from professional viewpoint is available. Social media is one of the most easily accessible
                                marketing tools right now, at the same time one of the most important tools as well. Because
                                you can use it to inform your target customers about your product or service as well as you
                                can establish the identity of your business into your target population’s mind. Social media
                                marketing is a phenomenal way to build relationship with your target market population and
                                have an understanding of their temperament while making them aware of the service or product
                                you are providing. This way you can easily set the voice of your business name along with
                                what you are providing.
                            <p>
                            <p>
                                Here at GTech we perceive the need of inducing a distinct personality to your interactions
                                with the target population. We work hard to formulate strategies to make that happen. Hiring
                                GTech means inducing a distinct virtual personality to your business and positioning it to
                                your target population in the most effective way. Regardless of your business size, there is
                                always a way to give it a unique personality and GTech is dedicated to make that happen. You
                                can trust us in creating a niche in your target population’s mind and position is so
                                effectively that when they define your field of business by your name.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 content-section">
                    <div class="sidebar">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('service-seo') }}">SEO Service</a></li>
                            <li class="active"><a href="{{ route('service-social-media') }}">Social Media Marketing</a></li>
                            <li><a href="{{ route('service-facebook-advertisement') }}">Facebook Advertisement</a></li>
                            <li><a href="{{ route('service-email-marketing') }}">Email Marketing</a></li>
                            <li><a href="{{ route('service-content-management') }}">Content Management</a></li>
                            <li><a href="{{ route('service-restaurant-seo') }}">Restaurant SEO</a></li>
                            <li><a href="{{ route('service-mobile') }}">Digital Marketing on Mobile</a></li>
                        </ul>
                    </div><!-- end sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->



@endsection

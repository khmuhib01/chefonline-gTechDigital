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
                    <h1 class="page-title">Search Engine Optimisation</h1>
                    <h2 class="page-title">Discover Advanced Search Engine Optimisation Services in UK</h2>
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
                            <h3 class="section-title border-line">Search Engine & Experience Optimisation</h3>
                            <p>With our years of online marketing experience and SEO knowledge of industry trends, we will
                                help you to develop your organic SEO strategy using Google Webmaster guideline approved best
                                practices.</p>
                            <h4>Optimise Your Content for Human & Search Engines</h4>
                            <p>Search engines, consumer or targeted visitor searching behaviors and SEO have all changed.
                                Today, thanks to smarter rank brain and more sophisticated Google algorithms, modern search
                                engines have developed better than ever at understanding, assessing and rewarding the kinds
                                of SEO factors that go into a great web experience for targeted visitors.</p>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <img src="{{ asset('assets/frontend/images/seo.jpg') }}" alt="Search Engine Optimisation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <h3 class="section-title border-line">We Invite You to Go Up!</h3>
                            <p>
                                You surely want yourself discovered by your potential clients. The purpose of SEO to make
                                sure that happens. We start from the scratch, which is making your site friendlier to search
                                engine. We make sure that appropriate and relevant keywords and impeccable contents are
                                being incorporated to your site. Also, we make sure to ensure good traffic. This is a great
                                way to take care of your contemporaries and stay one step ahead in the business. Because we
                                make sure you stay in the top of search results, so more people will be drawn towards you.
                            </p>
                            <br>
                            <ul class="seo-service-list list-unstyled">
                                <li><i class="icon fa fa-check"></i> Ingenious ways to boost your business online</li>
                                <li><i class="icon fa fa-check"></i> Strategic and precise service</li>
                                <li><i class="icon fa fa-check"></i> Dedicated feedback and communication</li>
                            </ul>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title border-line">We Believe in Better Search Marketing</h3>
                            <p>
                                We are a team of dedicated online marketing strategists. In <strong><span
                                        class="color-red">GTech</span></strong>, we exercise the practice of state of art
                                SEO strategies to boost up the ranking of your business website. We only use the organic
                                strategies to make your popularity more sustainable. We give our hundred percent to make
                                sure you stay precede your competitors.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 what-we-do">
                            <h3 class="section-title border-line">What We Can Do For You:</h3>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-mars"></i></span></div>
                                    <div class="media-body media-middle">Keyword Research</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-bar-chart"></i></span></div>
                                    <div class="media-body media-middle">Website Analysis</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-pie-chart"></i></span></div>
                                    <div class="media-body media-middle">Competitor Analysis</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-link"></i></span></div>
                                    <div class="media-body media-middle">Backlink Building</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-line-chart"></i></span></div>
                                    <div class="media-body media-middle">Analytics</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-left"><span><i class="fa fa-comments-o"></i></span></div>
                                    <div class="media-body media-middle">Social Media Management</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <strong><span class="color-red">GTech</span></strong> does not limit their services to mere
                                SEO consultancy. Here a bottom up approach is taken right from the scratch. We focus on the
                                technical infrastructure of your website, we also concentrate on the contents and analyze
                                whether any further development needed or not. And therefore we try to apply outreach
                                strategies that are sure to boost the popularity of your business in search engines.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 content-section">
                    <div class="sidebar">
                        <ul class="list-unstyled">
                            <li class="active"><a href="{{ route('service-seo')}}">SEO Service</a></li>
                            <li><a href="{{ route('service-social-media')}}">Social Media Marketing</a></li>
                            <li><a href="{{ route('service-facebook-advertisement')}}">Facebook Advertisement</a></li>
                            <li><a href="{{ route('service-email-marketing')}}">Email Marketing</a></li>
                            <li><a href="{{ route('service-content-management')}}">Content Management</a></li>
                            <li><a href="{{ route('service-restaurant-seo')}}">Restaurant SEO</a></li>
                            <li><a href="{{ route('service-mobile')}}">Digital Marketing on Mobile</a></li>
                        </ul>
                    </div><!-- end sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->



@endsection

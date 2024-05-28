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
                    <h1 class="page-title">Email Marketing</h1>
                    <h2 class="page-title">Best Email Marketing & Newsletter Services</h2>
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
                            <h3 class="section-title border-line">Email Design & Marketing</h3>
                            <p>
                                We make it easy to send email newsletters, offers, invitations and auto responders to grow
                                your business. On average 100 new emails appear in the inboxes of a professional every day.
                                Hence, people often delete a huge bulk of mails they don’t find any relevance. When people
                                skim through the inbox, they only look for information they need or they think they need.
                                Hence, the skill of making the e-shots and newsletters relatable is very important. And this
                                skill includes compelling design and interesting content.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <img src="{{ asset('assets/frontend/images/email-marketing.jpg') }}" alt="Email Marketing">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title border-line">Emails, Newsletters and Eshots</h3>
                            <p>
                                In <strong><span class="color-red">GTech</span></strong>, we design newsletters that stand
                                out among the clutter of cliché promotional mails and attract the attention of target
                                population and drive them towards the business. We use the following strategies to make our
                                campaigns and newsletters impeccable and easy to notice
                            </p>
                            <ul class="list-unstyled point-list">
                                <li><i class="fa fa-caret-right"></i> Develop compelling content and subject lines for
                                    desktop and mobile devices</li>
                                <li><i class="fa fa-caret-right"></i> Use subscriber and website visitor information to
                                    drive relevancy</li>
                                <li><i class="fa fa-caret-right"></i> Implement segmentation tactics that drive results</li>
                                <li><i class="fa fa-caret-right"></i> Test to hone newsletters and offers</li>
                            </ul>
                            <h3 class="section-title border-line">Email Reporting and Analytics</h3>
                            <p>
                                We understand the importance of statistics of your email marketing, because at the end of
                                the day, only numbers and comparisons can give you the idea where your business stands.
                            </p>
                            <p>
                                We provide accurate statistics regarding your email campaign in a graphical view, which is
                                easy to understand along with necessary specifics. We include minute details for your
                                convenience. Specifics of the reports will help you to understand how your target population
                                is reacting to your campaign and that will give you direction where to go head next with
                                your email campaigns.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 content-section">
                    <div class="sidebar">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('service-seo') }}">SEO Service</a></li>
                            <li><a href="{{ route('service-social-media') }}">Social Media Marketing</a></li>
                            <li><a href="{{ route('service-facebook-advertisement') }}">Facebook Advertisement</a></li>
                            <li class="active"><a href="{{ route('service-email-marketing') }}">Email Marketing</a></li>
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

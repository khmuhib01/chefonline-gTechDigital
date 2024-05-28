@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')


    <!-- BEGIN PAGE BANNER -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Optimising Website for Mobile</h1>
                    <h2 class="page-title">Marketing your products to customers who are looking at the mobile screen!</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER -->

    <!-- BEGIN MAIN CONTENT -->
    <div class="content-main">
        <div class="container">
            <div class="row">

                <div class="com-md-7 col-sm-8 content-section">
                    <h3 class="section-title border-line">Digital Marketing on Mobile? What is that??</h3>
                    <p>
                        Well, digital marketing for mobile devices is the way of reaching the prospective customers who uses
                        mobile devices. It includes search engine optimisation, promotional SMS, designing mobile friendly
                        website and so forth. It has become a separate digital marketing process recently because mobile
                        phone technologies have become really efficient and are dominating the technology usages.
                    </p>
                    <h3 class="section-title border-line">Why Do I Need That?</h3>
                    <blockquote>Because people use phone to search for your service! If you don’t appear and your competitor
                        does, it’s your loss!</blockquote>
                    <p>
                        You might be wondering that you have made your website SEO friendly and have already did SEO works
                        for your website. Moreover, you have done social media promotions, newsletter and what not! Why
                        would you still be needing separate marketing activities for mobile devices?
                    </p>

                    <ul class="mobile-benefit-list list-unstyled">
                        <li><i class="icon fa fa-check"></i> Everyone’s on mobile & over half of web traffic is mobile.</li>
                        <li><i class="icon fa fa-check"></i> Mobile users behave differently.</li>
                        <li><i class="icon fa fa-check"></i> Mobile users buy more than any other device.</li>
                        <li><i class="icon fa fa-check"></i> Mobile users switch screens.</li>
                        <li><i class="icon fa fa-check"></i> Mobile landing pages require different strategies.</li>
                        <li><i class="icon fa fa-check"></i> Google favors mobile responsiveness.</li>
                        <li><i class="icon fa fa-check"></i> Social media referrals are on mobile.</li>
                        <li><i class="icon fa fa-check"></i> Great mobile sites differentiate your brand.</li>
                        <li><i class="icon fa fa-check"></i> Mobile advertising is still underutilized.</li>
                    </ul>
                    <p>
                        You need this because this is 21st century and mobile phones are not just calling and messaging
                        device anymore. To some extent, they are replacing computers, especially for people who use computer
                        for very basic and general operations. That is why, a huge number of previously computer users have
                        turned into principally smartphone users. And you need to target this population. Therefore, you
                        need mobile digital marketing.
                    </p>

                    <h3 class="section-title border-line">Still Not Convinced?</h3>

                    <p>
                        Guess what, <strong>Google now has a separate index for mobile searches</strong>. It is a very
                        recent development, so, whomever gets their business optimized first, are going to be ranked higher
                        in this index. It is a great opportunity to promote your business to the huge mobile phone using
                        population.
                        And if you don’t,
                    <h6>YOUR COMPETITORS WILL DO IT ANYWAY. AND GUESS WHO WILL FALL BEHIND?</h6>

                    </p>

                    <h3 class="section-title border-line">Fine! I’m Convinced! But What Should I Do About It?</h3>
                    <p><strong>You just did your part. You assigned GTech!</strong></p>
                    <p>GTech is here to take care of your digital marketing tasks for mobile devices. We will research your
                        business and target customers. We will research their mobile device using behavior and we will lay
                        down a digital marketing plan to promote your business to them. We will do everything needed to let
                        your business known to your target mobile users. </p>

                    <h3 class="section-title border-line">Mobile Friendly Responsive Websites!</h3>
                    <p><strong>No more frustrating scrolling and waiting for your site!</strong></p>
                    <p>We design SEO & mobile friendly responsive version of your website. This enables your target
                        customers to view your website very easily on their phone. This pleasant experience will generate an
                        affinity for your business in their mind! Also, they will likely to turn into consumers from mere
                        visitors!</p>

                    <h3 class="section-title border-line">Mobile Indexing!</h3>
                    <p><strong>Guess who is going to be prominent in mobile searches?</strong></p>
                    <p>As Google has started a new index for mobile searches, it is a hot iron now! And we will strike it
                        for you! We will make sure you are indexed efficiently so your business comes up prominently in
                        mobile searches!</p>

                    <h3 class="section-title border-line">And More!</h3>
                    <p><strong>Well, it’s a phone after all!</strong></p>
                    <p>We will make sure to promote your business to your target customers by doing direct mobile marketing
                        promotions as needed with most relatable and optimised contents. In other words, EVERYTHING NEEDED
                        to grow your business.</p>
                    <h3 class="section-title border-line">In The end, you will get</h3>
                    <ul class="mobile-benefit-list list-unstyled">
                        <li><i class="icon fa fa-check"></i> Brand Awareness for Your Business</li>
                        <li><i class="icon fa fa-check"></i> Better Communication with Target Customers</li>
                        <li><i class="icon fa fa-check"></i> Wider Revenue Possibilities</li>

                        <li><i class="icon fa fa-check"></i> Google & Bing Rank You Higher</li>
                        <li><i class="icon fa fa-check"></i> Improved Mobile User Experience</li>
                        <li><i class="icon fa fa-check"></i> More Flexible & Cost-Effective Than App Development</li>
                        <li><i class="icon fa fa-check"></i> New Advertising Opportunities</li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-4 content-section">
                    <div class="sidebar">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('service-seo') }}">SEO Service</a></li>
                            <li><a href="{{ route('service-social-media') }}">Social Media Marketing</a></li>
                            <li><a href="{{ route('service-facebook-advertisement') }}">Facebook Advertisement</a></li>
                            <li><a href="{{ route('service-email-marketing') }}">Email Marketing</a></li>
                            <li><a href="{{ route('service-content-management') }}">Content Management</a></li>
                            <li><a href="{{ route('service-restaurant-seo') }}">Restaurant SEO</a></li>
                            <li class="active"><a href="{{ route('service-mobile') }}">Digital Marketing on Mobile</a></li>
                        </ul>
                    </div><!-- end sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->


@endsection

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
                    <h1 class="page-title">Content Management</h1>
                    <h2 class="page-title">Access the Highest Quality Original Contents</h2>
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
                        <div class="col-md-12"></div>
                        <div class="col-md-6 col-sm-7">
                            <h3 class="section-title border-line">Content Strategy, Creation & Development Services</h3>
                            <p>
                                Content is the fire. Promotion is the gasoline. We write for the targeted visitors with
                                smart search engines in mind and never the other way round. Without quality content, you
                                cannot build a strong online presence. And yes, quality contents are needed to be created
                                and updated on a regular basis with consistency. No matter what kind of business practice
                                you are in, to ensure a sustainable online presence, good and strong quality content is an
                                elementary need. Because in a way, contents actually build the brand of your business. The
                                contents subtly positions the identity of your business into your potential target
                                populations mind and create relatable image of your business.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <img src="{{ asset('assets/frontend/images/content-writing.png') }}" alt="Content Management">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Here in <strong><span class="color-red">GTech</span></strong>, we firmly believe in the
                                phrase, “Content is King”. Because without good content, slick and user friendly websites
                                with high level of technological involvement cannot retain the assumed volume of target
                                population.
                            </p>
                            <p>
                                We have a great team of talented copywriters, who have high level of understanding of the
                                business and a great insight in consumer psychology, so they can trigger the attention of
                                target population subtly with their literary prowess.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title border-line">A Strong Focus on SEO</h3>
                            <p>
                                Search Engine Optimisation (SEO) refers to the process of boosting the ranking of your
                                website in search engines results. Google periodically changes its algorithms. However, the
                                general idea is that the websites are ranked by the value of the site to its visitors. And
                                to entice target audience towards the website for increasing the value, impeccable content
                                is elementary. The well written content with keywords skillfully incorporated entices the
                                target customers to the website and at the same time make the website more search engine
                                friendly, that is why good contents are essential for good SEO strategy. We have a skilled
                                team of experienced copywriters who are skilled at the science of SEO and are best-placed to
                                provide you with quality content for your website.
                            </p>
                            <h3 class="section-title border-line">Converting Visitors to Customers</h3>
                            <p>
                                There are a number of ways that a visitor may find your website. From clicking on a
                                sponsored ad listing to finding your company in search engine results, there are various
                                ways that a customer can arrive at your website. However, in order to convert your potential
                                customers into existing customers, you need to engage them. Quality content writing is the
                                magic wand to turn the visitors into customers. Great content changes the way of thinking of
                                visitors, make them consider the pitched ideas and make your business relatable to them.
                                This way the contents persuade the visitors to become customers of your service. Great
                                contents move the customers so well that they may become loyal to your brand and might start
                                promoting to others. And worth of mouth is a great marketing technique. Hence in the end
                                good quality content writing can generate excellent returns on investment, which should by
                                any means be your business’s ultimate goal.
                            </p>
                            <h3 class="section-title border-line">Fresh & Regular Content for your Website</h3>
                            <p>
                                We have a hardworking team of content writers in GTech. They relentlessly work to produce
                                new contents for our clients every day. Their creative disposition adds new edge to the
                                contents they provide. Well-written and engaging contents are always sought and appreciated
                                by Google.
                            </p>
                            <p>
                                Google sends spiders to crawl in your websites. More frequently the quality contents are
                                updated, more frequently spiders are going to visit your site. And the chance of your
                                contents to be indexed grows higher with frequency of the spiders visiting your site, which
                                is a great win for SEO. However, if the posts do not possess good quality, then high
                                frequency of contents does not mean anything. The good news is, the high skills of our
                                content writers enable us to provide you regular relatable articles in order to ensure that
                                your website has regular views. The effort of our content writers will turn strangers into
                                visitors and visitors into customers. To learn more about our content writing service, get
                                in touch with us today.
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
                            <li><a href="{{ route('service-email-marketing') }}">Email Marketing</a></li>
                            <li class="active"><a href="{{ route('service-content-management') }}">Content Management</a>
                            </li>
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

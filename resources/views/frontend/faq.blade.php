@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')


    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Frequently Asked Questions</h1>
                    <!-- <h2 class="page-title">SEO Pricing for Restaurant & Local Business</h2> -->
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN MAIN CONTENT -->
    <div class="content-main">

        <!-- END WHY US -->
        <section id="why-choose-us" class="gray-section">
            <div class="transparent"></div>
            <div class="container content-up">
                <div class="row">
                    <div class="col-md-12 text-center marginbottom30 section-title">
                        <h2>FAQ</h2>
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
                </div>
            </div>
        </section>

    </div>
    <!-- END MAIN CONTENT -->


@endsection

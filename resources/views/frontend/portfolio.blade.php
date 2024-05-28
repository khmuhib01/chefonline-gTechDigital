@extends('frontend.include.layout')

@section('title', 'Global Tech Solution | Portfolio')
@section('description', 'Global Tech Solution | Portfolio')

@section('content')


    <section class="inner-intro project light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1 data-title="Project">
                    <span><small>Our Portfolio</small></span>
                    <span>Global Tech Solution</span>
                </h1>
            </div>
        </div>
    </section>
    <div id="services-section" class="pt-80 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="project-category">
                        <ul class="filter-button-group ">
                            <li><a class="line-btn active" data-filter=".web-development">Web Design & Development</a></li>
                            <li><a class="line-btn" data-filter=".mobile-app-development">App Development</a></li>
                            <li><a class="line-btn" data-filter=".graphic-design">Graphic Design</a></li>
                            <li><a class="line-btn" data-filter=".seo-service">SEO and SMM Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row isotope" id="isotope">
                <!-- Start web-development -->
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/artauk.jpg') }}"
                                class="img-responsive" alt="Artauk">
                            <div class="hov">
                                <div class="info-content">
                                    <span>ARTA UK</span>
                                    <a target="_blank" href="https://www.artauk.com/"><i class="fa fa-caret-right"></i> View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/nowkabais.jpg') }}"
                                class="img-responsive" alt="Nowka Bais">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Nowka Bais</span>
                                    <a target="_blank" href="https://www.nowkabais.co.uk/"><i class="fa fa-caret-right"></i>
                                        View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/nuraniconsultancy.jpg') }}"
                                class="img-responsive" alt="Nurani Consultancy">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Nurani Consultancy</span>
                                    <a target="_blank" href="https://www.nuraniconsultancy.org/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/coluk.jpg') }}"
                                class="img-responsive" alt="Coluk">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Coluk</span>
                                    <a target="_blank" href="https://coluk.com/"><i class="fa fa-caret-right"></i> View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/bespoke-website/asctyres.jpg') }}"
                                alt="ASC TYRE SERVICES LTD">
                            <div class="hov">
                                <div class="info-content">
                                    <span>ASC Tyre Services Ltd</span>
                                    <a target="_blank" href="http://asctyres.co.uk/"><i class="fa fa-caret-right"></i> View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/wickfordautocentre.jpg') }}"
                                class="img-responsive" alt="Wickford Auto Centre">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Wickford Auto Centre</span>
                                    <a target="_blank" href="http://wickfordautocentre.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/torodoradosteakhouse.jpg') }}"
                                class="img-responsive" alt="Toro Dorado Steak House">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Toro Dorado Steak House</span>
                                    <a target="_blank" href="http://www.torodoradosteakhouse.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInLeft">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/bespoke-website/101club-thamb.png') }}"
                                class="img-responsive" alt="101 Club">
                            <div class="hov">
                                <div class="info-content">
                                    <span>101 Club</span>
                                    <a target="_blank" href="https://101club.org.uk/"><i class="fa fa-caret-right"></i>
                                        View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Bayleaf"
                                src="{{ asset('assets/frontend/images/restaurant-website/bayleaf-restaurant.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Bayleaf Restaurant</span>
                                    <a target="_blank" href="http://www.bayleaf.co.uk/restaurant/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="The New Curry Centre"
                                src="{{ asset('assets/frontend/images/restaurant-website/newcurry-centre.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>The New Curry Centre</span>
                                    <a target="_blank" href="http://www.thenewcurrycentre.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Tara Mahal"
                                src="{{ asset('assets/frontend/images/restaurant-website/taramahal.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Tara Mahal</span>
                                    <a target="_blank" href="http://www.taramahalrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Shish Mahal"
                                src="{{ asset('assets/frontend/images/restaurant-website/shish-mahal.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Shish Mahal</span>
                                    <a target="_blank" href="http://www.shishmahalindian.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Spice Rain"
                                src="{{ asset('assets/frontend/images/restaurant-website/delhidiner.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Delhi Diner</span>
                                    <a target="_blank" href="http://www.delhidiner.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Hi Thai"
                                src="{{ asset('assets/frontend/images/restaurant-website/hi-thai.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Hi Thai</span>
                                    <a target="_blank" href="http://www.hithaitakeaway.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Mumbai Central Polhill"
                                src="{{ asset('assets/frontend/images/restaurant-website/mumbai-central.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Mumbai Central</span>
                                    <a target="_blank" href="http://www.mumbai-central.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Ginger Bar & Restaurant"
                                src="{{ asset('assets/frontend/images/restaurant-website/ginger-bar.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Ginger Bar & Restaurant</span>
                                    <a target="_blank" href="http://www.gingerrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Bangkok Lounge"
                                src="{{ asset('assets/frontend/images/restaurant-website/flavours-of-india.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Flavours of India</span>
                                    <a target="_blank" href="http://www.flavoursofindialeicester.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Peppermills Takeaway"
                                src="{{ asset('assets/frontend/images/restaurant-website/peppermills.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Peppermills Takeaway</span>
                                    <a target="_blank" href="https://www.peppermillstakeaway.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Dawat Indian Restaurant & Takeaway"
                                src="{{ asset('assets/frontend/images/restaurant-website/dawat.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Dawat Indian Restaurant & Takeaway</span>
                                    <a target="_blank" href="http://www.dawatindianrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box web-development text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInDown">
                        <div class="portfolio-link">
                            <img alt="Raipur Cuisine"
                                src="{{ asset('assets/frontend/images/restaurant-website/sakamaka.jpg') }}"
                                class="img-responsive">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Saka Maka</span>
                                    <a target="_blank" href="http://www.sakamaka.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- website end -->

                <!-- Start SEO SMM -->
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/currypalacecottenham.jpg') }}"
                                alt="Curry Palace">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Curry Palace</span>
                                    <a target="_blank" href="https://www.currypalacecottenham.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/shadindian.jpg') }}"
                                alt="Shad Indian Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Shad Indian Restaurant</span>
                                    <a target="_blank" href="https://www.shadindian.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive" src="{{ asset('assets/frontend/images/seoservice/jayraj.jpg') }}"
                                alt="Jay Raj">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Jay Raj</span>
                                    <a target="_blank" href="https://www.jayraj.co.uk/"><i class="fa fa-caret-right"></i>
                                        View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/gandhis.jpg') }}"
                                alt="Gandhi's Brasserie">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Gandhi's</span>
                                    <a target="_blank" href="https://www.gandhis.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/rajdootnw3.jpg') }}" alt="The Rajdoot">
                            <div class="hov">
                                <div class="info-content">
                                    <span>The Rajdoot</span>
                                    <a target="_blank" href="https://www.rajdootnw3.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/therajdootindian.jpg') }}"
                                alt="The Rajdoot">
                            <div class="hov">
                                <div class="info-content">
                                    <span>The Rajdoot</span>
                                    <a target="_blank" href="https://www.therajdootindian.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/hotchilli-restaurant.jpg') }}"
                                alt="Hot Chilli Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Hot Chilli Restaurant</span>
                                    <a target="_blank" href="https://www.hotchilli-restaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/vantagerestaurant.jpg') }}"
                                alt="Vantage Indian Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Vantage Indian Restaurant</span>
                                    <a target="_blank" href="https://www.vantagerestaurant.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/mughal-dynasty.jpg') }}"
                                alt="Mugal Dynasty">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Mughal Dynasty</span>
                                    <a target="_blank" href="https://www.mughal-dynasty.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/bengalindian.jpg') }}"
                                alt="Bengal Indian Cuisine">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Bengal Indian Cuisine</span>
                                    <a target="_blank" href="https://www.bengalindian.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/khanepsom.jpg') }}" alt="Khan Epsom">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Khan Epsom</span>
                                    <a target="_blank" href="https://www.khanepsom.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/khansrestaurant.jpg') }}"
                                alt="Khan's Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Khan's Restaurant</span>
                                    <a target="_blank" href="https://www.thekhanrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/feastandmisthi.jpg') }}"
                                alt="Feast & Misthi">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Feast &amp; Misthi</span>
                                    <a target="_blank" href="https://www.feastandmishti.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/stoneleighbrasserie.jpg') }}"
                                alt="Feast & Misthi">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Stoneleigh Brasserie</span>
                                    <a target="_blank" href="https://www.stoneleighbrasserie.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/spicykalkataclub.jpg') }}"
                                alt="Spicy Kalkata Club">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Spicy Kalkata Club</span>
                                    <a target="_blank" href="https://www.spicykalkataclub.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/tasteofindia.jpg') }}"
                                alt="Taste of India">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Taste of India</span>
                                    <a target="_blank" href="https://www.tasteofindiapl25.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/ginger-bar.jpg') }}" alt="Ginger Bar">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Ginger Bar</span>
                                    <a target="_blank" href="https://www.gingerrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/thespicelounge.jpg') }}"
                                alt="The Spice Lounge">
                            <div class="hov">
                                <div class="info-content">
                                    <span>The Spice Lounge</span>
                                    <a target="_blank" href="https://www.the-spice-lounge.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/hi-thai.jpg') }}" alt="Hi Thai">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Hi Thai</span>
                                    <a target="_blank" href="http://www.hithaitakeaway.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive" src="{{ asset('assets/frontend/images/seoservice/dejavu.jpg') }}"
                                alt="De Ja Vu">
                            <div class="hov">
                                <div class="info-content">
                                    <span>De Ja Vu</span>
                                    <a target="_blank" href="http://www.dejavucheshunt.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/bithika.jpg') }}" alt="Bithika">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Bithika</span>
                                    <a target="_blank" href="http://www.bithikabelfast.com/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive" src="{{ asset('assets/frontend/images/seoservice/miraj.jpg') }}"
                                alt="Miraj">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Miraj</span>
                                    <a target="_blank" href="http://www.mirajindianrestaurant.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/spiceexpress.jpg') }}"
                                alt="Spice Express">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Spice Express</span>
                                    <a target="_blank" href="http://www.spiceexpresstakeaway.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/mayflowerindian.jpg') }}"
                                alt="Mayflower Indian Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Mayflower Indian Restaurant</span>
                                    <a target="_blank" href="http://www.mayflowerindian.co.uk/"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box seo-service text-center">
                    <div class="single-event btn-design" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/seoservice/tandooriflamestakeaway.jpg') }}"
                                alt="Tandoori Flames">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Tandoori Flames</span>
                                    <a target="_blank" href="http://www.tandooriflamestakeaway.co.uk//"><i
                                            class="fa fa-caret-right"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End SEO SMM -->

                <!-- graphic design start -->
                <div class="col-md-3 business-card col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/cafe_massala_thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/cafe_massala.png') }}"
                                    class="portfolio-link" target="_blank">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 leaflet col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/calcutta16_thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/calcutta16.png') }}"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 takeaway-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/newtown_tandoori_thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/newtown_tandoori.png') }}"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 takeaway-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/tamasha_thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/tamasha.png') }}"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 takeaway-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/tokyo_sushi_thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/tokyo_sushi') }}"
                                    class="portfolio-link" target="_blank">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-md-3 business-card col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/bayleaf-thamb.png') }}"
                                class="img-responsive" alt="Bayleaf">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="{{ url('assets/frontend/images/graphicdesign/bayleaf-fullview.png') }}"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 business-card col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/desi_thamb.png') }}"
                                class="img-responsive" alt="Desi">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon" href="assets/images/graphicdesign/Desi-Biz-full.jpg"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 business-card col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/mahal_thamb.png') }}"
                                class="img-responsive" alt="The Mughal Business Card">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="assets/images/graphicdesign/The-Mughal-Biz-Card-2-1.jpg" class="portfolio-link"
                                    target="_blank"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-myorder="4"
                    class="col-md-3 ala-carte-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/meghna_thamb.png') }}"
                                class="img-responsive" alt="Meghna">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon" href="assets/images/graphicdesign/Meghna_fullView.jpg"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 takeaway-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/moment_thamb.png') }}"
                                class="img-responsive" alt="Moment">
                            <div class="hov">
                                <a class="fancybox-media zoom-icon" href="assets/images/graphicdesign/moment_fullview.jpg"
                                    class="portfolio-link" target="_blank"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 takeaway-menu col-sm-6 marginbottom30 iso-box graphic-design text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img src="{{ asset('assets/frontend/images/graphicdesign/rajdoot_thamb.png') }}"
                                class="img-responsive" alt="Rajdoot">

                            <div class="hov">
                                <a class="fancybox-media zoom-icon"
                                    href="assets/images/graphicdesign/rajdoot_fullview.jpg" class="portfolio-link"
                                    target="_blank"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- graphic design end -->

                <!-- APP Development start -->
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/curry-world.png') }}"
                                alt="Curry word restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Curry World</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.curryworldindian">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/curry-world/id1045016946?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/sushi-world.png') }}" alt="Sushi World">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Sushi World</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.Sushijapanese">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/sushi-japanese/id1046231932?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/stoneleigh-brasserie.png') }}"
                                alt="Sesame Restaurant">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Stoneleigh Brasserie</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.stoneleigh">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://apps.apple.com/us/app/stoneleigh-brasserie/id1085041235">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/bayleaf-takeaway.png') }}"
                                alt="bayleaf takeaway services">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Bayleaf Takeaway</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.Bayleaftakeway">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/bayleaf-takeaway/id1041798556?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/new-curry-centre.png') }}"
                                alt="New Curry Centre">
                            <div class="hov">
                                <div class="info-content">
                                    <span>New Curry Centre</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.thenewcurrycentre">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://apps.apple.com/us/app/new-curry-centre/id1183350057?ls=1">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/mughal-dynasty.png') }}"
                                alt="Mughal Dynasty">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Mughal Dynasty</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.mughaldynasty">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/mughal-dynasty/id1027751169?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/thali-and-pickles.png') }}"
                                alt="Thali and Pickles">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Thali and Pickles</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.Thalipickles">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/thali-and-pickles/id1093136749?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 marginbottom30 iso-box mobile-app-development text-center">
                    <div class="single-event" data-appear-animation="bounceInRight">
                        <div class="portfolio-link">
                            <img class="img-responsive"
                                src="{{ asset('assets/frontend/images/ourwork/tandoori-nights.png') }}"
                                alt="Tandoori Nights">
                            <div class="hov">
                                <div class="info-content">
                                    <span>Tandoori Nights</span>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.lechef.tandoorinights">
                                        <img alt="android apps button"
                                            src="{{ asset('assets/frontend/images/android-button.png') }}">
                                    </a>
                                    <a target="_blank"
                                        href="https://itunes.apple.com/us/app/tandoori-nights/id1041801744?mt=8">
                                        <img alt="apple apps button"
                                            src="{{ asset('assets/frontend/images/apple-button.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- APP Development end -->

            </div>

        </div>
    </div>


@endsection

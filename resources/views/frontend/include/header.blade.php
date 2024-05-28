<div class="wrapper">
    <div id="header" class="header header-2">
        {{-- <div id="top-bar" class="top-bar-section top-bar-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="top-contact link-hover-black hidden-xs"> <span class="welcome-text"><i
                                    class="ion-ios-location fa-icons color v-align"></i> 218A Brick Lane, London E1
                                6SA </span> </div>
                        <div class="top-social-icon icons-hover-black">
                            <div class="icons-hover-black">
                                <a target="_blank" href="https://www.facebook.com/GTechSolutionUK/"> <i
                                        class="fa fa-facebook"></i> </a>
                                <a target="_blank" href="https://twitter.com/GTechSolutionUK"> <i
                                        class="fa fa-twitter"></i> </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCXwGxC3Ja763Bv3BcswZjuA">
                                    <i class="fa fa-youtube"></i> </a>
                                <a target="_blank" href="https://www.pinterest.com/GTechSolution/"> <i
                                        class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/company/gtech-solution"> <i
                                        class="fa fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container secondary-header">
            <div class="row">
                <div class="col-sm-3 col-md-5">
                    <div class="logo">
                        <a href="{{ route('home')}}"><img src="{{ asset('assets/frontend/images/logo.png') }}"
                                alt="Global Tech Solution Logo"></a>
                    </div>
                    <button id="menu" class="menu visible-xs"></button>
                </div>
                <div class="col-sm-9 col-md-7 hidden-xs">
                    <div class="call-us">
                        <ul>
                            <li>
                                <i class="ion-ios-email-outline"></i> <a
                                    href="mailto:support@example.com">support@example.com</a>
                            </li>
                            <li>
                                <i class="ion-iphone"></i>
                                <a href="tel:03303801000">0330 380 1000</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navigation">
                            <ul>
                                <li> <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li> <a href="javascript:avoid(0);">Services</a> <i
                                        class="ion-ios-plus-empty visible-xs"></i>
                                    <ul class="sub-nav">
                                        <li><a href="{{ route('web-development')}}">Web Development</a></li>
                                        <li><a href="{{ route('digital-marketing')}}">Digital Marketing</a></li>
                                        <li><a href="{{ route('mobile-app-development')}}">Mobile App Development</a></li>
                                        <li><a href="{{ route('custom-software-development')}}">Custom Software Development</a>
                                        </li>
                                        <!-- <li><a href="graphic-design">Graphic Design</a></li> -->
                                    </ul>
                                </li>
                                <li> <a href="{{ route('packages')}}">SEO Packages</a> </li>
                                <li><a href="{{ route('portfolio')}}">Portfolio</a></li>
                                <li> <a href="{{ route('contact')}}">contact us</a> </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

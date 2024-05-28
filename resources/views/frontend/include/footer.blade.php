<!-- FOOTER -->
<footer class="footer pt-30 pt-xs-60">
    <div class="container">

        <!--Footer Info -->
        <div class="row footer-info mb-20">
            <div class="col-md-3 col-sm-3 col-xs-12 mb-sm-30">
                <h4 class="mb-20">SOCIAL MEDIA</h4>
                <p>Follow us on</p>

                <div class="icons-hover-black">
                    <a target="_blank" href="#"> <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                    <a target="_blank" href="#"> <i
                            class="fa fa-youtube"></i> </a>
                    <a target="_blank" href="#"> <i class="fa fa-pinterest"
                            aria-hidden="true"></i>
                    </a>
                    <a target="_blank" href="#"> <i
                            class="fa fa-linkedin"></i> </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 mb-sm-30">
                <div class="newsletter">
                    <h4 class="mb-20">NEWSLETTER SIGNUP</h4>
                    <p>
                        Sign up for newsletter
                    </p>
                    <form>
                        <!-- <input id="subscription_email" type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
                  <button class="newsletter-btn btn btn-xs btn-color" type="submit" value="" onclick="subscribe(event);">
                    <i class="fa fa-angle-right mr-0"></i>
                  </button> -->
                        <input type="email" class="newsletter-input input-md newsletter-input mb-0"
                            placeholder="Enter your e-mail" maxlength="100" name="subscription_email"
                            id="subscription_email" required="required">
                        <button onclick="subscribe(event);" class="newsletter-btn btn btn-xs btn-color"><i
                                class="fa fa-angle-right mr-0"></i></button>
                    </form>
                    <div id="return_msg">&nbsp;</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 mb-sm-30">
                <h4 class="mb-20">Quick Links</h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="link blog-link">
                            <li>
                                <a href="{{ route('web-development')}}">Web Development</a>
                            </li>
                            <li>
                                <a href="{{ route('digital-marketing')}}">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="{{ route('mobile-app-development')}}">App Development</a>
                            </li>
                            <li>
                                <a href="{{ route('custom-software-development')}}">Custom Software Development</a>
                            </li>
                            <!-- <li>
                              <a href="graphic-design">Graphic Design</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="link blog-link">
                            <li>
                                <a href="{{ route('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contact')}}">contact us</a>
                            </li>
                            <li>
                                <a href="{{ route('cookie-policy')}}">How do we use cookies?</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy-policy')}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Info -->
    </div>

    <!-- Copyright Bar -->
    <div class="copyright">
        <div class="container">
            <p class="">
                © <?php echo date('Y'); ?> <a href="{{ route('home')}}"><b>Global Tech Digital</b></a>. All Rights Reserved.
            </p>
        </div>
    </div>
    <!-- End Copyright Bar -->

</footer>
<!-- END FOOTER -->

</div>

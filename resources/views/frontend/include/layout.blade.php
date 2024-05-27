<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="p:domain_verify" content="8ff7b843702af006789b141a2b28c839" />

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <!--<link href="http://fonts.googleapis.com/css?family=lato:400,100,200,300,500%7COpen+Sans:400,300,600,700,800%7COswald:300,400,700" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        type="text/css">
    <!--		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">-->
    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/plugin/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/plugin/owl.transitions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/frontend/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/frontend/css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/themify-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/seo.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/theme-color/default.css') }}" rel="stylesheet" id="theme-color"
        type="text/css">

    @yield('css')
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-89545989-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    @include('frontend.include.header')


    @yield('content')

    @include('frontend.include.footer')


    <!-- Site Wraper End -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>

    <!-- Easing Effect Js -->
    <script src="{{ asset('assets/frontend/js/plugin/jquery.easing.js') }}" type="text/javascript"></script>
    <!-- bootstrap Js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- carousel Js -->
    <script src="{{ asset('assets/frontend/js/plugin/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/frontend/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.revolution.js') }}"></script>
    <!-- masonry Js -->
    <script src="{{ asset('assets/frontend/js/plugin/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/frontend/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/mixitup.min.js') }}" type="text/javascript"></script>

    <!-- custom Js -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}" type="text/javascript"></script>



    @yield('js')
    <!-- Start newsletter -->
    <script type="text/javascript">
        function subscribe(e) {

            e.preventDefault();
            var email = document.getElementById('subscription_email').value;
            var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

            if (pattern.test(email)) {
                document.getElementById('return_msg').innerHTML =
                    "<img src='https://www.gtechsolution.co.uk/assets/images/loader.gif' height='16' width='16'>";
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        if (xmlhttp.responseText == 1) {
                            document.getElementById('return_msg').innerHTML = 'You are successfully subscribed.';
                        } else if (xmlhttp.responseText == 2) {
                            document.getElementById('return_msg').innerHTML =
                                'Your email already in subscription list.';
                        } else {
                            document.getElementById('return_msg').innerHTML = 'Subscription Failed. Please Try Later';
                        }
                        document.getElementById('subscription_email').value = "";
                    }
                }
                xmlhttp.open("POST", "subscribe.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("email=" + email);
            } else {
                document.getElementById('return_msg').innerHTML = "Invalid E-mail Address";
            }

        }
        // jQuery(document).ready(function() { 
        //     var containerEl = document.querySelector('.grapgic-wrapper');

        //     var mixer = mixitup(containerEl);
        // });
    </script>
    <!-- End newsletter -->

</body>


</html>



<div class="modal fade curry-world" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Curry World</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/curry-world.png"
                            alt="Curry word restaurant">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.curryworldindian">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/curry-world/id1045016946?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Curry World</h4>
                        <p>Experience Indian cuisine like the Maharajah’s from Mughal dynasty in the comfort of your own
                            home. Our range of great tasting authentic Indian dishes cooked to the highest standard with
                            recipes dating back centuries of perfection in the art of Indian cuisine. Food is vital to
                            life. We at Curry World established for the past 10 years, we believe food goes further than
                            providing nutrition. The enjoyment that can be gained from eating is so very important. We
                            are passionate about giving our customers only the best Authentic Indian cuisine by sourcing
                            and using only the highest quality of fresh ingredients. All of the ingredients used at
                            Curry World Kitchen come from British suppliers that are trusted and have consistently high
                            level of standards. </p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- End 1 -->
<div class="modal fade sushi-world" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sushi World</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/sushi-world.png"
                            alt="sushi world">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Sushijapanese">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/sushi-japanese/id1046231932?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Sushi World</h4>
                        <p>Sushi world is a Japanese fusion takeaway, a recently refurbished premise. As part of the
                            contemporary Japanese restaurant theme, Sushi World is focused on bringing authentic
                            Oriental flavours to the table. A beacon of creative dishes, a place to actualize mix of
                            oriental cuisine, changing the traditional barriers. Having the best chef’s and experience,
                            Sushi World have lately reset the boundaries of Lee Garden sophisticated dining district,
                            where tourists, regulars and the occasional curry lovers visit from time to time. Famous for
                            the surprises, offers and discounts, Sushi World is always welcoming everybody.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 2 -->
<div class="modal fade sesame-restaurant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sesame Restaurant</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/sesame-restaurant.png"
                            alt="sesame restaurant">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.sesame">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/sesame-restaurant/id1046432717?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Sesame Restaurant</h4>
                        <p>Award winning restaurant Sesame in Kingston Road New Malden celebrated its 5th anniversary in
                            February this year. It is thanks to our many loyal customers who share our achievements of
                            national accolades in the industry. It’s owners two reasons: first is the quality of their
                            gastronomy which is not just fine cuisine but the finest of fine cuisine. The second is
                            their “exemplary dedication to client service”.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 3 -->
<div class="modal fade bayleaf-takeaway" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Bayleaf Takeaway</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/bayleaf-takeaway.png"
                            alt="bayleaf takeaway services">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Bayleaftakeway">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/bayleaf-takeaway/id1041798556?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Bayleaf Takeaway</h4>
                        <p>At Bayleaf we are proud of providing the best quality food for over the last 18 years. We
                            have been able to do this by only using the best and the freshest available ingredients,
                            cooked of course by our expert Award winning chef.</p>
                        <p>We have a variety of dishes that are unique including Murgh Madurai, Chicken Bakara, Chicken
                            Kushboo, Tareko lamb Tikka and Murgh bangalore created by our award winning Master chef,
                            which is exclusive to bayleaf.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 4 -->
<div class="modal fade monsoon-indian" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Bayleaf Takeaway</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/monsoon-indian.png"
                            alt="monsoon indian">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.monsoon">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/monsoon-indian/id1046460635?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Monsoon Indian</h4>
                        <p>Welcome to the Monsoon for real Indian food. made with extra care using only the finest
                            ingredients.
                            Judge our quality for yourself.... come and see us in our kitchens where we prepare and cook
                            the freshest vegetables and meats daily to create food that always special. All the spices
                            used are freshly ground on the premises to give that extra quality.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 5 -->
<div class="modal fade deea" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deea</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/deea.png"
                            alt="deea">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.DeeaRestaurant">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank" href="https://itunes.apple.com/us/app/deea/id1082352143?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Deea</h4>
                        <p>We believe that there’s more to running a restaurant than simply providing good food. Of
                            course the food is very important and we place the highest priority on preparing all our
                            dishes with care, skill and precision. Our recipes have been handed down through the
                            generations and we’re constantly trying to improve them whilst retaining the traditional
                            qualities and flavors. Naturally, we only use fresh chicken and lamb and the spices are
                            mixed separately so they retain their individual flavor.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 6 -->
<div class="modal fade viceroy-brentwood" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Viceroy Brentwood</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/viceroy-brentwood.png"
                            alt="viceroy brentwood">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Viceroy">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/viceroy-brentwood/id1114787210?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Viceroy Brentwood</h4>
                        <p>Viceroy Brentwood offers fresh, homemade food which is made daily for the entire family,
                            delivered straight to your door. All of our food is freshly-prepared on the premises with a
                            lot of love, care and affection. Viceroy Brentwood food prices are very reasonable and our
                            delivery is reliable. We think you’ll find the whole experience altogether different.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 7 -->
<div class="modal fade mughal-dynasty" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mughal Dynasty</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/mughal-dynasty.png"
                            alt="mughal dynasty">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.mughaldynasty">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/mughal-dynasty/id1027751169?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Mughal Dynasty</h4>
                        <p>Mughal Dynasty is one of the best tandoori restaurant in Kent. You are able to get the taste
                            of different type of dishes cooked by our qualified chef. The dishes are appreciated by our
                            customers for their authenticity, freshness and delightful taste. The menu marries western
                            presentation with well judged Indian spicing and succeeds.Our Chef has now extended the
                            offer for those unable to come to the restaurant and who wish to have a meal in the comfort
                            of their own homes.Collections Only.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 8 -->
<div class="modal fade mint-leaf" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mint Leaf</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/mint-leaf.png"
                            alt="mint leaf">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Mintleaf">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank" href="https://itunes.apple.com/us/app/mint-leaf/id1079437821?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Mint Leaf</h4>
                        <p>At Mint Leaf Indian Takeaway, we pride ourselves in offering authentic Indian dishes. We use
                            only the finest and freshest ingredients, low cholesterol oils and selected herbs & spices.
                            Our menu includes many unusual and regional dishes and we also cater for people with special
                            dietary requirements. It is our aim to make your dining table as enjoyable and memorable as
                            possible.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 9 -->
<div class="modal fade basil-spice" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Basil Spice</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/basil-spice.png"
                            alt="basil spice">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Basilspice">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/basil-spice/id1114720844?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Basil Spice</h4>
                        <p>Basil Spice - Indian Restaurant</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 10 -->
<div class="modal fade thali-and-pickles" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thali and Pickles</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/thali-and-pickles.png"
                            alt="thali and pickles">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.Thalipickles">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/thali-and-pickles/id1093136749?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Thali and Pickles</h4>
                        <p>We specialize in authentic Indian street food. Come and try our unique Indian street food to
                            experience the real taste of India right here in London. We serve a selection of thalis
                            which we put together carefully in a variety of combinations to get your taste buds going.
                        </p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 11 -->
<div class="modal fade tandoori-nights" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tandoori Nights</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive marginbottom30" src="assets/images/ourwork/tandoori-nights.png"
                            alt="tandoori nights">
                        <div class="row">
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.lechef.tandoorinights">
                                    <img alt="android apps button" src="assets/images/android-button.png">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a target="_blank"
                                    href="https://itunes.apple.com/us/app/tandoori-nights/id1041801744?mt=8">
                                    <img alt="apple apps button" src="assets/images/apple-button.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Tandoori Nights</h4>
                        <p>At Tandoori Nights we offer the highest quality of home dining serving in the local community
                            for over 16 years and still going strong. We are always striving to do better. We have no
                            other branches and there is only one original Tandoori Nights, maintaining a single branch
                            in order to concentrate on the quality and precision we take when preparing your food. Our 4
                            times Award-winning chef is passionate about using the freshest of ingredients, to prepare
                            his distinctive and unique dishes in our 5 star hyginic kitchen. Above all, our core ethos
                            has always been making sure our dishes are cooked to order and delivered piping hot to your
                            door. Tandoori Nights Indian Takeaway Hoddesdone, Broxbourne, Herts EN11. Offering free home
                            delivery. Authentic Indian dishes by ordering online / 01992 446006. Local Hoddesdon
                            takeaway restaurant Tandoori Nights, has raised a fantastic £1,620 for Teens Unite! To
                            celebrate their 15th anniversary, Tandoori Nights generously agreed to donate 20% of all
                            their takings between 10th – 24th March and we can’t thank them enough!. We always
                            appreciate the support of local businesses and the owner Anhar Uddin has agreed to run this
                            fundraiser annually, which will truly help us to provide even more fun days out for our
                            teens as well as running activities at our respite care centre.</p>
                        <hr>
                        <h4>App Features:</h4>
                        <ul class="list-unstyled custom-list">
                            <li>View our menu</li>
                            <li>Place an order</li>
                            <li>Keep up-to-date with our special offers and promotions</li>
                            <li>Easily telephone the restaurant from your mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- End 11 -->

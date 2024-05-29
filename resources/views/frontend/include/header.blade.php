<nav>
    <div class="navbar">
        <i class='bx bx-menu' style="color: red!important; font-size: 40px"></i>

        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}"
                    alt="logo"></a>
        </div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></span>
                <i class='bx bx-x' style="color: red!important;"></i>
            </div>
            <ul class="links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    <a href="#">Services</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="{{ route('web-development') }}">Web Development</a>
                        </li>
                        <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a>
                        </li>
                        <li><a href="{{ route('mobile-app-development') }}">Mobile App
                                Development</a></li>
                        <li><a href="{{ route('custom-software-development') }}">Custom
                                Software Development</a>
                        </li>
                        <li><a href="{{ route('graphic-design') }}">Graphic Design</a></li>
                    </ul>
                </li>
                <li> <a href="{{ route('packages') }}">Seo Packages</a> </li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                {{-- <button class="btn btn-primary hidden-sm hidden-md hidden-lg">Book Intro Call</button> --}}
                <a href="http://127.0.0.1:8000/custom-software-development"
                    class="btn btn-custom text-uppercase transition custom-radius hidden-sm hidden-md hidden-lg">View
                    Details</a>

            </ul>
        </div>
        <div class="search-box">
            <a href="http://127.0.0.1:8000/custom-software-development"
                class="btn btn-custom text-uppercase transition custom-radius hidden-sm hidden-xs">Book Intro Call</a>

            <i class='bx bx-search' style="display: none"></i>
            <div class="input-box" style="display: none">
                <button>Book Intro Call</button>
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
</nav>




<script>
    // search-box open close js code
    let navbar = document.querySelector(".navbar");
    let searchBox = document.querySelector(".search-box .bx-search");
    // let searchBoxCancel = document.querySelector(".search-box .bx-x");

    searchBox.addEventListener("click", () => {
        navbar.classList.toggle("showInput");
        if (navbar.classList.contains("showInput")) {
            searchBox.classList.replace("bx-search", "bx-x");
        } else {
            searchBox.classList.replace("bx-x", "bx-search");
        }
    });

    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .bx-menu");
    let menuCloseBtn = document.querySelector(".nav-links .bx-x");
    menuOpenBtn.onclick = function() {
        navLinks.style.left = "0";
    }
    menuCloseBtn.onclick = function() {
        navLinks.style.left = "-100%";
    }


    // sidebar submenu open close js code
    let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    htmlcssArrow.onclick = function() {
        navLinks.classList.toggle("show1");
    }
    let moreArrow = document.querySelector(".more-arrow");
    moreArrow.onclick = function() {
        navLinks.classList.toggle("show2");
    }
    let jsArrow = document.querySelector(".js-arrow");
    jsArrow.onclick = function() {
        navLinks.classList.toggle("show3");
    }
</script>

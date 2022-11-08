<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css') }}">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendors/progressbar-fill-visible/css/progressBar.css') }}">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.css') }}">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/modal-video/modal-video.min.css') }}">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fancybox/dist/jquery.fancybox.min.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick/slick-theme.css') }}">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/carouselTicker.css') }}" media="screen"> --}}
    <title>Easygroupe | Immergez-vous dans notre monde</title>

    <style>
        .bitcoin {
            /* margin-top: 130px; */
            /* margin-bottom: 0px; */
            /* background-color: white; */
            padding: 0px;
            position: relative;
            display: flex;
            background-color: #085359;
        }

        /*
        #alert {
            position: absolute;
            left: 10%;
            right: 10%;
            width: 100%;
        } */

        #flash-msg {
            z-index: 2000;
        }
    </style>

</head>

<body class="home">

    @include('sweetalert::alert')
    {{-- <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
        </div>
    </div> --}}
    <div id="page" class="full-page bg-white">
        <!-- site header html start  -->

        <header id="masthead" class="site-header site-header-transparent">
            <!-- header html start -->

            <div class="top-header" style="background-color:#085359; overflow:hidden;">
                <div class="bitcoin">
                    <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
                        background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <a href="tel:+228 92227680"><i class="fas fa-phone-alt"></i> +228 92227680</a>
                                    </li>
                                    <li>
                                        <a href="mailto:infos@easygroup.org"><i class="fas fa-envelope"></i>
                                            infos@easygroupe.com</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Agoè Minamadou
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                            <div class="header-social social-links">
                                <ul>

                                    <li>
                                        <a href="https://cutt.ly/easycrypto15" target="_blank">
                                            <i class="fab fa-telegram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com/easycrypto15/" target="_blank">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header" style="background-color:#085359">
                <div class="container">
                    <div class="hgroup-wrap d-flex justify-content-between align-items-center">
                        <div class="site-identity">
                            <h1 class="site-title">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/site-logo.png') }}" alt="logo">
                                </a>
                            </h1>
                        </div>
                        <div class="main-navigation">
                            <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                <ul>
                                    <li class="@yield('home')">
                                        <a href="{{ route('home') }}">Accueil</a>
                                    </li>
                                    <li class="@yield('about')">
                                        <a href="{{ route('about') }}">A Propos</a>
                                    </li>
                                    <li class="@yield('blog')">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-btn d-inline-block">
                                <a href="{{ route('contact') }}" class="button-round">NOUS JOINDRE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        <!-- market value slider -->

        <!-- market value slider end -->
        <!-- site header html end  -->
        <main id="content" class="site-main">

            @yield('content')

        </main>
        <!-- site footer html start  -->
        <footer id="colophon" class="site-footer footer-primary"
            style="background-image: url(assets/images/img13.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget_text">
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('assets/images/site-logo.png') }}" alt="logo"></a>
                                </div>
                                <div class="textwidget widget-text">
                                    100% axé resultas, à EASY GROUPE nous mettons en oeuvre toute notre expertise et
                                    notre
                                    professionnalisme
                                    pour vous fournir des offres bien structurées.


                                </div>
                                <div class="social-links">
                                    <ul>

                                        <li>
                                            <a href="https://cutt.ly/easycrypto15" target="_blank">
                                                <i class="fab fa-telegram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="www.twitter.com/easycrypto15/" target="_blank">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget">
                                <h3 class="widget-title">Liens Utiles</h3>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">A Propos</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget contact-widget">
                                <h3 class="widget-title">Addresse</h3>
                                <p></p>
                                <div class="widget-wrap row">
                                    <div class="widget-map col-sm-6">
                                        <img src="{{ asset('assets/images/map-widget.png') }}" alt="">
                                        <div class="hotspot">
                                            <div class="hotspot-one">

                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="hotspot-content"></span>
                                            </div>
                                            <div class="hotspot-two">

                                                <i class="fas fa-map-marker-alt"></i>

                                                <span class="hotspot-content"></span>
                                            </div>
                                            <div class="hotspot-three">

                                                <i class="fas fa-map-marker-alt"></i>

                                                <span class="hotspot-content"></span>
                                            </div>
                                            <div class="hotspot-four">

                                                <i class="fas fa-map-marker-alt"></i>

                                                <span class="hotspot-content"></span>
                                            </div>
                                            <div class="hotspot-five">

                                                <i class="fas fa-map-marker-alt"></i>

                                                <span class="hotspot-content"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-detail-widget col-sm-6">
                                        <ul>
                                            <li>
                                                <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                                Agoè Minamadou
                                            </li>
                                            <li>
                                                <a href="tel:+228 92227680">
                                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                                    228 92227680 </br>
                                                </a>
                                                <a href="tel:+228 98203002">
                                                    <i aria-hidden="true" class="icon icon-phone1"></i> 228 98203002
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:infos@easygroupe.org">
                                                    <i aria-hidden="true" class="icon icon-envelope1"></i>
                                                    infos@easygroupe.org
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                            <div class="bottom-footer-content row">
                                <div class="copy-right col-7">Copyright &copy; 2021 felomdigital. Tous droits réservés.
                                </div>
                                <div class="footer-menu text-right col-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site footer html end  -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Entrez votre text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- header html end -->
    </div>


    <!-- JavaScript -->
    <script src="{{ asset('assets/vendors/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/vendors/waypoint/noframework.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar-fill-visible/js/progressBar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/circle-progress/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
    <script src="{{ asset('assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-nav/jquery.slicknav.js') }}"></script> --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/custom0.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script>
        function showPopUp() {
            newsletter.style.display = "block";
            // getElementById('newsletter').removeAttribute("style");
            // ewsletter.style.removeProperty("display");
            // newsletter.style.place-content = "center";
        }
        if (getCookie("newsletter") === "") {
            setTimeout(showPopUp, 40000);
        }


        function ClosePopUp() {
            setCookie("newsletter", "yes");
            newsletter.style.display = "none";
        }

        function SubmitClose() {
            newsletter.style.display = "none";
        }

        function setCookie(cname, cvalue) {
            const d = new Date();
            d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        //config flash message ...
        let flash_msg = document.getElementById('flash-msg');
        if (flash_msg) {
            // let messageContent = "{{ session('message') }}";
            // if (messageContent) {
            //     let newsletterElement = document.querySelector('#newsletter');
            //     newsletterElement.style.display = "none";
            // }
            setTimeout(() => {
                const alert = bootstrap.Alert.getOrCreateInstance('#alertM')
                alert.close()
                // document.querySelector('#alertM').classList.toggle('show');
                setTimeout(() => {
                    flash_msg.style.display = 'none';
                }, 1500);
            }, 5000);
        }
    </script>
    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
</body>

</html>

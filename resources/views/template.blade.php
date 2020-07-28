<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Canoë Kayak Château Thébaud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('images/fav.jpg') }}" rel="icon">


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo"><a href="/">ALCKCT</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Accueil</a></li>
                            <li><a href="/Ecole">Ecole de pagaie</a></li>
                            <li class="has-dropdown">
                                <a href="classes.html">Loisirs</a>
                                <ul class="dropdown">
                                    <li><a href="classes-single.html">Randonnée</a></li>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Parcours</a></li>
                                    <li><a href="#">Plan d'accès</a></li>
                                    <li><a href="#">Ecole, centre aéré, comité d'entreprise</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="classes.html">Disciplines</a>
                                <ul class="dropdown">
                                    <li><a href="/slalom">Slalom</a></li>
                                    <li><a href="/kayakpolo">Kayak-Polo</a></li>
                                    <li><a href="#">Descente</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="btn-cta"><a href="#">Réservation</a></li>
                            @if(Auth::user() == null)
                                <li><a  href="/login" class="nav-link" >Se Connecter</a></li>
                                <li><a  href="/register" class="nav-link" >S'enregister</a></li>
                            @else
                                <li><a >Vous êtes connecté</a></li>
                                <li> <a href="/logout">Se Deconnecter</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Bienvenue sur le site de l'ALCKCT</h1>
                                    <p><a href="#" class="btn btn-primary btn-lg btn-learn">Réserver des canoës-kayaks dés maintenant</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Vous trouverez sur ces pages les dernières actualités du club de canoë kayak</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Les locations sont disponibles </h1>
                                    <p><a href="#" class="btn btn-primary btn-lg btn-learn">Réserver maintenant</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Le site de Pont Caffino, surplombé de falaises, offre de nombreuses activités</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

@yield('content')


    <footer id="colorlib-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>About Robust Gym</h4>
                    <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Quick Links</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#"><i class="icon-check"></i> About Us</a></li>
                        <li><a href="#"><i class="icon-check"></i> Testimonials</a></li>
                        <li><a href="#"><i class="icon-check"></i> Classes</a></li>
                        <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                        <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                        <li><a href="#"><i class="icon-check"></i> Contact</a></li>
                    </ul>
                    </p>
                </div>

                <div class="col-md-3 colorlib-widget">
                    <h4>Recent Post</h4>
                    <div class="f-blog">
                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="blog.html">Tips for sexy body</a></h2>
                            <p class="admin"><span>18 April 2018</span></p>
                        </div>
                    </div>
                    <div class="f-blog">
                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="blog.html">Tips for sexy body</a></h2>
                            <p class="admin"><span>18 April 2018</span></p>
                        </div>
                    </div>
                    <div class="f-blog">
                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="blog.html">Tips for sexy body</a></h2>
                            <p class="admin"><span>18 April 2018</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 colorlib-widget">
                    <h4>Contact Info</h4>
                    <ul class="colorlib-footer-links">
                        <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                        <li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
                        <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
                        <li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br>
                            <small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>
<!-- Counters -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>


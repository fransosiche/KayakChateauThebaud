<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Canoë Kayak Château Thébaud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site officiel du club de Canoë-Kayak de Château-Thébaud. Location de canoe kayak et actualités du club."/>
    <meta name="keywords" content="Canoë, canoe, kayak, reservation, Kayak, Château-Thébaud, Loire-Atlantique, Location, Réservation, Cours, Sport, Club, Loisir, Base de Loisir, Pont Caffino, Paddle, 44"/>
    <meta name="author" content="François Biron"/>
    <meta name="robots" content="index"/>
    <link href="{{ asset('images/fav.jpg') }}" rel="icon">



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
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
                            <li class="has-dropdown">
                                <a>Club</a>
                                <ul class="dropdown">
                                    <li><a href="/Ecole">Ecole de pagaie</a></li>
                                    <li><a href="/Inscription">Inscription</a></li>
                                    <li><a href="/Bureau">Bureau</a></li>
                                    @if (Auth::check() && Auth::user()->is_admin)
                                    <li><a href="/Réunions">Compte Rendu de réunion</a></li>
                                    @endif
                                    <li><a href="/Vêtements">Vêtements</a></li>
                                    <li><a href="/Pagayons">Pagayons</a></li>
                                    <li><a href="/Parcours">Parcours</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a>Disciplines</a>
                                <ul class="dropdown">
                                    <li><a href="/Slalom">Slalom</a></li>
                                    <li><a href="/Kayak-Polo">Kayak-Polo</a></li>
                                    <li><a href="/Descente">Descente</a></li>
                                </ul>
                            </li>
                            <li><a href="/Actualites">Posts</a></li>
                            <li><a href="/Contact">Contact</a></li>
                            <li class="btn-cta"><a href="/Reservation">Locations</a></li>
                            @if(Auth::user() == null)
                                <li><a href="/login" class="nav-link">Se Connecter</a></li>
                            @else
                                <li><a> Bonjour {{ Auth::user() -> name }}</a></li>
                                <li><a href="/logout">Déconnexion</a></li>
                            @endif
                            @if (Auth::check() && Auth::user()->is_admin)
                                <li><a href="/Admin/{{ date("Y-m-d")  }}">Admin</a></li>
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
                <li style="background-image: url({{ url('/images/img_bg_2.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Bienvenue sur le site de l'ALCKCT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{ url('/images/img_bg_1.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Vous trouverez sur ces pages les dernières actualités du club de canoë
                                        kayak</h1>
                                    <p><a href="/Reservation" class="btn btn-primary btn-lg btn-learn">Louer dés
                                            maintenant</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{ url('/images/img_bg_3.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Locations disponibles de début Mai à mi Octobre </h1>
                                    <p><a href="/Reservation" class="btn btn-primary btn-lg btn-learn">Réserver
                                            maintenant</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{ url('/images/img_bg_4.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Le site de Pont Caffino, surplombé de falaises, offre de nombreuses
                                        activités</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    @include('cookieConsent::index')
    @yield('content')

    <footer id="colorlib-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>A propos du club de canoë-kayak de Chateau-Thébaud</h4>
                    <p>Sur notre site de Pont Caffino, surplombé de falaises, la vallée de la Maine ressemble à un
                        véritable petit canyon où il est possible de pratiquer de nombreuses activités.
                    </p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="https://www.facebook.com/ALCKCT"><i class="icon-facebook"></i></a></li>
                    </ul>

                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Liens rapides</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="/"><i class="icon-check"></i> Accueil</a></li>
                        <li><a href="/Actualites"><i class="icon-check"></i> Actualités</a></li>
                        <li><a href="/Reservation"><i class="icon-check"></i> Locations</a></li>
                        <li><a href="/Conditions"><i class="icon-check"></i> Conditions d'utilisations</a></li>
                    </ul>

                </div>

                <div class="col-md-3 colorlib-widget">
                    <h4>Sites utiles</h4>
                    <div class="f-blog">
                        <div class="desc">
                            <h2><a style="padding-top: -20px" href="https://www.pontcaffino.fr/">Base de loisirs de Pont
                                    Caffino</a></h2>
                        </div>
                    </div>
                    <div class="f-blog">
                        <div class="desc">
                            <h2><a style="padding-bottom: 20px" href="https://amicale-mcanonnet.org/">Amicale Laïque de
                                    Château Thébaud </a></h2>
                        </div>
                    </div>
                    <div class="f-blog">
                        <div class="desc">
                            <h2><a href="https://www.ffck.org/">Fédération Française de canoë kayak et sport de
                                    pagaie</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 colorlib-widget">
                    <h4>Informations de contact</h4>
                    <ul class="colorlib-footer-links">
                        <li>Caffino 44690
                            , <br>Château-Thébaud
                        </li>
                        <li><a href="tel://0240065407"><i class="icon-phone"></i> 02.40.06.54.07</a></li>
                        <li><a href="mailto:alckct@orange.fr"><i class="icon-envelope"></i> alckct@orange.fr </a></li>
                        <li><a href="https://www.canoekayakchateauthebaud.fr"><i class="icon-location4"></i>
                                www.canoekayakchateauthebaud.fr</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="icon-heart"
                                                                                    aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib and was edited</a> <a
                                    href="https://www.linkedin.com/in/fran%C3%A7ois-biron-337911178/" target="_blank">
                                    by François Biron</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small><br>
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
<script src="{{asset('js/toastr.min.js')}}"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="{{asset('js/respond.min.js')}}"></script>
<![endif]-->
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>
@toastr_render
</body>
</html>


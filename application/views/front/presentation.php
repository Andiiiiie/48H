<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Feel Good</title>
    <!--
    SOFTY PINKO
    https://templatemo.com/tm-535-softy-pinko
    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/templatemo-softy-pinko.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/presentation/presentation.css') ?>">

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/fontawesome-free-6.4.0-web/css/all.css') ?>" rel="stylesheet">
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo" id="feelGood">
                        Fe<span id="surligner">el</span> Good
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#welcome" class="active">Acceuil</a></li>
                        <li><a href="#features">A propos</a></li>
                        <li><a href="#work-process">Nos methodes</a></li>
                        <li><a href="#testimonials">Temoignages</a></li>
                        <li><a href="<?= site_url('front/auth/connexion') ?>">Rejoignez-Nous</a></li>
                        <li><a href="<?= site_url('back/auth/connexion') ?>">Administration</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12" >
                    <h1>Nous proposons la meilleure <strong>stratégie</strong><br>pour atteindre votre <strong>objectif</strong></h1>
                    <p>Notre mission est d'autonomiser les individus dans leur parcours vers une vie plus saine et plus heureuse.</p>
                    <a href="<?= site_url('front/Auth/connexion') ?>" class="main-button-slider">Rejoignez-Nous</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i class="fa fa-utensils"></i>
                            </div>
                            <h5 class="features-title">Nourriture saine</h5>
                            <p>Votre alimentation adaptee a vos objectifs.</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <h5 class="features-title">Sport adapte</h5>
                            <p>Vos activites vous serons conseille pour correspondre a votre alimentation.</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h5 class="features-title">Plat livré</h5>
                            <p>Nous livrons vos plats chez vous.</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-70 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="<?= base_url('assets/images/left-image.png') ?>" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Parlons de nos Plats</h2>
                </div>
                <div class="left-text">
                    <p>Que vous souhaitiez perdre du poids, maintenir votre forme ou simplement adopter une alimentation plus saine, nos plats répondent à tous vos besoins. Vous trouverez une variété de menus conçus par nos experts en nutrition, garantissant un équilibre parfait entre goût et bien-être.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">Du sport pour vous</h2>
                </div>
                <div class="left-text">
                    <p>Nous vous proposons bien plus qu'une simple livraison de plats sains chez vous. Nous vous offrons également des conseils sportifs en ligne, en parfaite harmonie avec notre alimentation équilibrée.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="<?= base_url('assets/images/right-image.png') ?> " class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Notre processus</h1>
                        <p>Aenean nec tempor metus. Maecenas ligula dolor, commodo in imperdiet interdum, vehicula ut ex. Donec ante diam.</p>
                    </div>
                </div>
            </div>

            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="<?= base_url('assets/images/work-process-item-01.png') ?>" alt=""></i>
                        <strong>Collecte des informations</strong>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="<?= base_url('assets/images/work-process-item-01.png') ?>" alt=""></i>
                        <strong>Proposition regime</strong>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="<?= base_url('assets/images/work-process-item-01.png') ?>" alt=""></i>
                        <strong>Confirmation et personnalisation</strong>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="<?= base_url('assets/images/work-process-item-01.png') ?>" alt=""></i>
                        <strong>Validation et paiement </strong>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="<?= base_url('assets/images/work-process-item-01.png') ?>" alt=""></i>
                        <strong>Livraison des repas</strong>
                    </a>
                </div>
            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
</section>
<!-- ***** Home Parallax End ***** -->

<!-- ***** Testimonials Start ***** -->
<section class="section" id="testimonials">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Nos retours</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Beaucoup ont ete satisfaits de nos services</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Testimonials Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="<?= base_url('assets/images/testimonial-icon.png') ?>" alt=""></i>
                        <p>Proin a neque nisi. Nam ipsum nisi, venenatis ut nulla quis, egestas scelerisque orci. Maecenas a finibus odio.</p>
                        <div class="user-image">
                            <img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name">Catherine Soft</h3>
                            <span>Cliente qui a reussit perdre du poids</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Testimonials Item End ***** -->

            <!-- ***** Testimonials Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="<?= base_url('assets/images/testimonial-icon.png') ?>" alt=""></i>
                        <p>Integer molestie aliquam gravida. Nullam nec arcu finibus, imperdiet nulla vitae, placerat nibh. Cras maximus venenatis molestie.</p>
                        <div class="user-image">
                            <img src="<?= base_url('assets/images/faces/face2.jpg') ?>" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name">Kelvin Wood</h3>
                            <span>Cliente qui a reussit prendre du poids</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Testimonials Item End ***** -->

            <!-- ***** Testimonials Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="<?= base_url('assets/images/testimonial-icon.png') ?>" alt=""></i>
                        <p>Quisque diam odio, maximus ac consectetur eu, auctor non lorem. Cras quis est non ante ultrices molestie. Ut vehicula et diam at aliquam.</p>
                        <div class="user-image">
                            <img src="<?= base_url('assets/images/faces/face3.jpg') ?>" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name">David Martin</h3>
                            <span>Cliente qui a reussit perdre du poids</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Testimonials Item End ***** -->
        </div>
    </div>
</section>
<!-- ***** Testimonials End ***** -->


<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright : Jessica - Fabien - Mendrika</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="<?= base_url('assets/js/front/jquery-2.1.0.min.js') ?>"></script>

<!-- Bootstrap -->
<script src="<?= base_url('assets/js/front/popper.js') ?>"></script>
<script src="<?= base_url('assets/js/front/bootstrap.min.js') ?>"></script>

<!-- Plugins -->
<script src="<?= base_url('assets/js/front/scrollreveal.min.js') ?>"></script>
<script src="<?= base_url('assets/js/front/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/front/jquery.counterup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/front/imgfix.min.js') ?>"></script>

<!-- Global Init -->
<script src="<?= base_url('assets/js/front/custom.js') ?>"></script>

</body>
</html>
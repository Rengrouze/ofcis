<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="EduLight - Multipurpose Education Template" />
    <meta name="keywords" content="edulight, bootstrap, education template, template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?= $title ?? 'test'; ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css" />
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/assets/normalize.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/assets/magnific-popup.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/assets/animate.css" />
    <!-- Mean Menu -->
    <link rel="stylesheet" href="css/assets/meanmenu.css" />
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/assets/revolution/layers.css" />
    <link rel="stylesheet" href="css/assets/revolution/navigation.css" />
    <link rel="stylesheet" href="css/assets/revolution/settings.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500%7CRoboto+Slab:300,500,400,700"
        rel="stylesheet" />
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/assets/responsive.css" />

    <!-- CSS FOR DEMO - NOT INCLUDED IN MAIN FILES -->
    <link rel="stylesheet" href="demo/demo.css" />
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!--==================
        Header
    ===================-->
    <header>
        <!-- Header Top -->
        <div class="header-top header-top-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 header-top-left">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i> 3 rue de l'Hôtellerie</li>
                            <li><i class="fa fa-phone"></i> 06 64 82 10 88</li>
                            <li><i class="fa fa-envelope"></i> contact@ofcis.fr</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12 header-top-right"></div>
                </div>
            </div>
        </div>
        <!-- Ends: .header-top -->
        <div class="main-menu">
            <div class="container">
                <div class="row">
                    <!-- Main Menu -->
                    <div class="col-sm-12">
                        <nav class="navbar" id="main-nav">
                            <div class="containers">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#edulight-navbar-collapse" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Change Logo Here -->
                                    <a class="navbar-brand" href="index.php"><img src="images/logo.png"
                                            alt="EduLight" /></a>
                                </div>
                                <!-- End .navbar-header -->

                                <!-- Fullscreen search -->
                                <div class="search-wrap">
                                    <div class="search-inner">
                                        <div class="search-cell">
                                            <form method="get">
                                                <div class="search-field-holder">
                                                    <input type="search" class="form-control main-search-input"
                                                        placeholder="Search ..." />
                                                    <button type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end fullscreen search -->

                                <div class="nav-container">
                                    <div class="menu-search">
                                        <ul class="list-unstyled">
                                            <li class="hidden-xs">
                                                <ul class="list-unstyled">
                                                    <li class="nav-search-wrap hidden-xs">
                                                        <a href="#" class="nav-search search-trigger">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends .nav-right -->
                                        </ul>
                                    </div>
                                    <div class="collapse navbar-collapse" id="edulight-navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="mega-menu dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Santé au
                                                    travail</a>
                                                <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                    <li>
                                                        <div class="mega-menu-content clearfix">
                                                            <span class="mega-content-block">
                                                                <a href="01-main-demo.html">Formation initiale Sauveteur
                                                                    Secouriste du
                                                                    Travail - SST</a>
                                                                <a href="02-edulight-default-one.html">Maintien
                                                                    Actualisation des Compétences
                                                                    SST</a>
                                                            </span>
                                                            <span class="mega-content-block">
                                                                <a href="03-edulight-default-two.html">Formation "Gestes
                                                                    et Postures"</a>
                                                                <a href="04-course-hub-v1.html">Formation à
                                                                    l'utilisation du défibrillateur
                                                                    et réanimation cardio-pulmonaire</a>
                                                            </span>
                                                            <span class="mega-content-block">
                                                                <a href="05-course-hub-v2.html">Initiation aux gestes de
                                                                    premiers
                                                                    secours</a>
                                                                <a href="05-course-hub-v2.html">Initiation aux gestes de
                                                                    premiers secours -
                                                                    Spécifique Auto-Ecoles</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End .mega-menu -->
                                            <li class="mega-menu dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formations
                                                    Sécurité Incendie et Sûreté</a>
                                                <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                    <li>
                                                        <div class="mega-menu-content clearfix">
                                                            <span class="mega-content-block">
                                                                <a href="courses-01.html">Formation manipulation
                                                                    d'extincteurs</a>
                                                                <a href="courses-02.html">Formation Equipier de première
                                                                    intervention</a>
                                                            </span>
                                                            <span class="mega-content-block">
                                                                <a href="courses-03.html">Habilitation Electrique
                                                                    H0/B0</a>
                                                                <a href="courses-04.html">Habilitation Electrique
                                                                    H0/BEBS</a>
                                                                <a href="courses-05.html">Formation risque
                                                                    attentatoire</a>
                                                            </span>
                                                            <span class="mega-content-block">
                                                                <a href="courses-06.html">Accompagnement à la mise en
                                                                    œuvre d'une
                                                                    procédure d'évacuation</a>
                                                                <a href="course-single.html">Accompagnement à la mise en
                                                                    œuvre des
                                                                    exercices de mise en sécurité des patients
                                                                    et/ou résidents - Transfert horizontal -
                                                                    Type U & J</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End .mega-menu -->
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle"
                                                    data-toggle="dropdown">Accompagnement - Audit</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="teachers-01.html">Accueillir et communiquer avec les
                                                            personnes en
                                                            situation de handicap</a>
                                                    </li>
                                                    <li>
                                                        <a href="teachers-02.html">Formation des Membres du CSE à la
                                                            CSSCT</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Teacher -->

                                            <!-- end gallery -->
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actualité</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="contact-01.html">Mention Légale</a>
                                                    </li>
                                                    <li><a href="contact-02.html">Nous trouver</a></li>
                                                    <li>
                                                        <a href="contact-03.html">Nos statistiques</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-03.html">Procédure de réclamation</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Contact -->

                                            <li><a href="shop.html">Nous contacter</a></li>
                                        </ul>
                                    </div>
                                    <!-- .navbar-collapse -->
                                </div>
                                <!-- Ends: .nav-container -->
                            </div>
                            <!-- .container -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ends: .main-menu -->
    </header>
    <!-- ends: Header -->
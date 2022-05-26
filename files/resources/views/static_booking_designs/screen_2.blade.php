<!DOCTYPE html>

<html lang="en">

<head>
    <title>PARKME | Parking Aeroport Toulouse</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico')}}?t=6" type="image/x-icon" media="all">
    <meta name="title" content="PARKMEⓟ - parking aeroport toulouse">
    <meta name="description" content="PARKME: Aéroport Toulouse Blagnac. ✓+3000 réservations ✓24/7 service client ✓Paiement sécurisé">
    <meta name="keywords" content="Place de parking à Toulouse">
    <meta name="msvalidate.01" content="078540AD4652B633D8AB87EBFCDC6065" />
    <meta name="yandex-verification" content="c9999ab2a0ac13f3" />
    <meta name="google-site-verification" content="DFAFf02qxZtKW1YRrc4lIfwDblUerr1ZXvavrIUu1bs" />
    <meta name="author" content="ParkMe">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
    <link href="{{ asset('public/assets/fonts/fontawesome/css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css?t=6') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/aos.css') }}">

    <link rel="shortcut icon" type="image/jpg" href="/favicon.ico" />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/assets/dist/css/materialize.css') }}">
</head>

<body class="">
    <div id="demo_timer" style="color: black;background: #fbd220;font-weight: 700;text-align: center;min-height: 32px;" class="d-flex align-items-center col-md-12 justify-content-md-center end justify-content-end sticky-top">
        <div style="width:100% !important;">
            <!--<p>Lavage extérieur OFFERT durant 24h!</p>-->
            <p>Bienvenue ! Premier jour à 14,99€ puis 5€/jour</p>
        </div>
        <!--<div>-->
        <!--    <span>-->
        <!--<label id="timer_days" class="timer_border"></label>&nbspDAYS-->
        <!--        <div class="d-inline-block mb-0 ml-3">-->
        <!--            <label id="timer_hours" class="timer_border mb-0 ml-md-3">21</label>-->
        <!--            <br class="d-block d-md-none">-->
        <!--            <span id="timer_text">HRS</span>-->
        <!--        </div>-->

        <!--        <div class="d-inline-block mb-0 ml-md-3 ml-0">-->
        <!--            <label id="timer_mins" class="timer_border mb-0 ml-md-2">3</label>-->
        <!--            <br class="d-block d-md-none">-->
        <!--            <span id="timer_text">MIN</span>-->
        <!--        </div>-->

        <!--        <div class="d-inline-block mb-0 ml-md-3 ml-0">-->
        <!--            <label id="timer_secs" class="timer_border mb-0 ml-md-2">29</label>-->
        <!--            <br class="d-block d-md-none">-->
        <!--            <span id="timer_text">SEC</span>-->
        <!--        </div>-->
        <!--    </span>-->
        <!--</div>-->
    </div>
    <nav class="navbar navbar-expand-sm new-navbar">
        <input type="hidden" id="screen__newnavmobile_inp" value="0" />
        <div class="container new-navbar-container new_navbar_desktop">
            <div class="row new-navbar-row screen__dsplyflexspacebw">
                <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                    <a class="screen__dsplyflexcenter" href="#">
                        <img src="https://parkme.fr/public/assets/images/logo.svg" class="newnavbar_img img-fluid logo_image" alt="parking aeroport toulouse">
                    </a>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                    <div class="screen__dsplyflexend">
                        <a href="javascript:void(0)" class="new-menu-items active">Accueil</a>
                        <a href="javascript:void(0)" class="new-menu-items">Réserver</a>
                        <a href="javascript:void(0)" class="new-menu-items">Mes réservations</a>
                        <a href="javascript:void(0)" class="new-menu-items">Compte</a>
                        <a href="javascript:void(0)" class="new-menu-items">support</a>
                        <a href="javascript:void(0)" class="new-menu-items">centre d’AIDE</a>
                        <div class="new-nav-line-vertical"></div>
                        <div class="newnav_usernotactive screen__dsplyflexcenter">
                            <a href="javascript:void(0)" onclick="dummyNavbarFunc()" class="newnav_btns">Connexion</a>
                            <a href="javascript:void(0)" class="newnav_btns">S’inscrire</a>
                        </div>
                        <div class="newnav_useractive screen__dsplyflexcenter cursorpointer">
                            <span class="new_menu_circle">M</span>
                            <span class="new_menu_username">Matéo Dal maso</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container new-navbar-container new_navbar_mobile">
            <div class="row new-navbar-row">
                <div class="col-2 screen__dsplyflexcenter">
                    <a href="javascript:void(0)" class="newmenu_navbars" id="openNavMenuMblid"><span class="fa fa-bars"></span></a>
                </div>
                <div class="col-sm-2 col-10">
                    <a class="navbar-brand newnav_imgflex col-sm-12 offset-sm-0 offset-3 col-4" href="#">
                        <img src="https://parkme.fr/public/assets/images/logo.svg" class="newnavbar_img img-fluid logo_image" alt="parking aeroport toulouse">
                    </a>
                </div>

                <div class="newnav_mblmenu">
                    <div class="newnav_usernotactive newnav_blackmblbtn">
                        <a href="javascript:void(0)" onclick="dummyNavbarFunc()" class="newnav_btns">Connexion</a>
                        <a href="javascript:void(0)" class="newnav_btns">S’inscrire</a>
                    </div>
                    <div class="newnav_useractive cursorpointer newnav_blackmbluser">
                        <span class="new_menu_circle">M</span>
                        <span class="new_menu_username">Matéo Dal maso</span>
                    </div>
                    <div class="mt-2">
                        <a href="javascript:void(0)" class="new-menu-items-mbl active">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-1"></div>
                                <span>Accueil</span>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-2"></div>
                                <span>Réserver</span>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-3"></div>
                                <span>Mes réservations</span>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-4"></div>
                                <span>Compte</span>
                            </div>
                        </a>
                        <div class="new-nav-line-horizontal"></div>
                        <a href="javascript:void(0)" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-5"></div>
                                <span>Support</span>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-6"></div>
                                <span>Centre d’aide</span>
                            </div>
                        </a>
                    </div>
                    <div class="screen__dsplyflexcenter mt-3">
                        <a href="https://parkme.fr/condition_general_parkme_de_ventes.pdf" target="_blank" class="screen__4cgv" id="">CGV</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <input type="hidden" id="screen__noheadermobile_inp" value="0" />
            <input type="hidden" id="screen__connexion_inp" value="0" />
            <input type="hidden" id="screen__creercompte_inp" value="0" />
            <div class="container screenmaxw-100 screen__2container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen01-mbl-middle">
                        <div class="row screen01-header-pd">
                            <div class="col-sm-6 col-12 text-center screen01-pd-right">
                                <img src="{{ asset('public/assets/images/picture_account_mobile.png')}}" alt="" class="screen__1-img">
                            </div>
                            <div class="col-sm-6 col-12 screen01-pd-left">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="screen01-heading">Compte</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="screen01-p mb-4">Gérer votre compte, vos véhicules</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><a href="javascript:void(0);" class="screen01-btn1 mb-3" onclick="openConnexionModal()" id="">Connexion</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><a href="javascript:void(0);" class="screen01-btn2" onclick="openCreerCompteModal()" id="">Créer
                                            un compte</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container screen__connexion_main">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Connexion</h1>
                            <div class="screen__crossicon">
                                <a href="javascript:void(0);" onclick="closeConnexionModal()" class="screen-btn-cross" id="">
                                    <i class="fa fa-times screen-back-cross" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Connexion</h1>
                            </div>
                            <div class="screen02-body-mbl">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Connectez-vous</p>
                                                <a href="javascript:void(0);" onclick="closeConnexionModal()" class="screen-btn-back screen__backicon_mbl" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" id="email" name="email" placeholder="Adresse e-mail*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="password">Mot de passe</label>
                                                        <input type="password" class="form-control form-control-lg form-check-input" id="password" name="password" placeholder="Mot de passe*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-6 screen4-tabs-div text-left">
                                                    <div class="form-group">
                                                        <label for="email"><a href="javascript:void(0);" class="" id="">Créer un compte ?</a></label>
                                                    </div>
                                                </div>
                                                <div class="col-6 screen4-tabs-div text-right">
                                                    <div class="form-group">
                                                        <label for="email"><a href="javascript:void(0);" class="" id="">Mot
                                                                de passe oublié ?</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="">Connexion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container screen__creercompte_main">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Créer un compte</h1>
                            <div class="screen__crossicon">
                                <a href="javascript:void(0);" onclick="closeCreerCompteModal()" class="screen-btn-cross" id="">
                                    <i class="fa fa-times screen-back-cross" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Créer un compte</h1>
                            </div>
                            <div class="screen02-body-mbl" id="screen__2_1by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Comment vous
                                                    appelez-vous ?</p>
                                                <a href="javascript:void(0);" onclick="closeCreerCompteModal()" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(1/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="name" name="name" placeholder="Nom*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="firstname">Prénom</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="firstname" name="firstname" placeholder="Prénom*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="continue_screen2_1by3">Continuer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="screen02-body-mbl" id="screen__2_2by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Quel est votre véhicule
                                                    ?</p>
                                                <a href="javascript:void(0);" onclick="backCreerCompteModal('1')" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(2/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="marque">Marque</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="marque" name="marque" placeholder="Marque*" required />
                                                    </div>
                                                </div>
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="modele">Modèle</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="modele" name="modele" placeholder="Modèle*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="licenseplate">Plaque immatriculation</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="licenseplate" name="licenseplate" placeholder="Plaque immatriculation (facultatif)*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="continue_screen2_2by3">Continuer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="screen02-body-mbl" id="screen__2_3by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Quel seront vos
                                                    identifiants ?</p>
                                                <a href="javascript:void(0);" onclick="backCreerCompteModal('2')" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(3/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="phonenumber">Numéro de téléphone</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" id="phonenumber" name="phonenumber" placeholder="Numéro de téléphone*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" id="email" name="email" placeholder="Adresse e-mail*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="password">Mot de passe</label>
                                                        <input type="password" class="form-control form-control-lg form-check-input" id="password" name="password" placeholder="Mot de passe*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="continue_screen2_3by3">Créer compte</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
    </main>
    <!-- footer for mobile -->
    <div>
        <div class="footer-buttons-div">
            <div class="mobile-footer-container">
                <a href="#" class="mobile-footer-items">
                    <div>
                        <div class="footer-img footer-img-1"></div>
                        <p>Accueil</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="#" class="mobile-footer-items">
                    <div>
                        <div class="footer-img footer-img-2"></div>
                        <p>Réserver</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="http://dev.parkme.fr/screen_1" class="mobile-footer-items">
                    <div>
                        <div class="footer-img footer-img-3"></div>
                        <p>Mes réservations</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="http://dev.parkme.fr/screen_2" class="mobile-footer-items mobile-footer-active">
                    <div>
                        <div class="footer-img footer-img-4"></div>
                        <p>Compte</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/assets/js/newscreensjs.js')}}"></script>
    <script src="{{ asset('public/assets/js/aos.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.caret.js') }}"></script>

    <script src="{{ asset('public/assets/js/jquery.mobilePhoneNumber.js') }}"></script>

    <script src="{{ asset('public/assets/js/custom_script.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery-ui.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>


    <script src="{{ asset('public/assets/dist/js/materialize.js') }}"></script>

    </script>

</body>

</html>
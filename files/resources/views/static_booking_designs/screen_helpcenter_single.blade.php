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
            <p>Bienvenue ! Premier jour à 14,99€ puis 5€/jour</p>
        </div>
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
        <section id="screen_01" class="">
            <input type="hidden" id="screen__helpcenterpage_inp" value="1" />
            <div class="container screenhcw-100 m-auto p-0">
                <div class="row m-0 screen__hcsingleyellow">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <div class="screen__dsplyflexcenter m-0 scree__hcs_hmbl">
                                    <a href="{{ url('screen_helpcenter') }}" class="screen__hcs_btncross" id="">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </a>
                                    <h1 class="screen__hcheadingmbl">Mon véhicule est-il sécurisé à Parkme ?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 p-0">
                        <div class="row m-0 p-0 screen__hcsinglediv">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <h1 class="screen__hcsingleheading">La sécurité à parkme</h1>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <p class="screen__hcsinglep">Parkme est équipé de caméra de surveillance et de clôture.</p>
                                <p class="screen__hcsinglep">Chaque véhicule entrant à parkme est pris en photo dans chaque angle de vue, le compteur kilométrique est également pris en photo pour vous assurer la sécurité du stationnement de votre véhicule à Parkme.</p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <h1 class="screen__hcsingleheading">La sécurité à parkme</h1>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <ul class="screen__hcsingleul">
                                    <li><a href="#">Parkme, c’est quoi ?</a></li>
                                    <li><a href="#">Comment ça marche ?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
    </main>
    <!-- no footer -->

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
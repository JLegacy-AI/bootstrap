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
            <input type="hidden" id="screen__personalinfo_inp" value="0" />
            <input type="hidden" id="screen__vehicles_list_inp" value="0" />
            <input type="hidden" id="screen__vehicles_edit_inp" value="0" />
            <input type="hidden" id="screen__vehicles_add_inp" value="0" />
            <input type="hidden" id="screen__contactor_inp" value="0" />
            <div class="container m-auto p-0 screen__4container screen__4maincontainer">
                <div class="row m-0 p-0 screen__3_mbl_change">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-4 px-md-3 px-0">
                                <div class="screen__3_headdiv m-0">
                                    <h1 class="screen-heading">Compte</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                                <div class="screen__4Circle">M</div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                                <h2 class="">Matéo Dal maso</h2>
                                <p class="">parkmemat@gmail.com</p>
                                <p class="">07 07 07 07 07</p>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                                <h2 class="screen__4heads">Mon compte</h2>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes screen4_brdrbtmmbl" onclick="openPersonalInfoModal()">
                                            <img src="{{ asset('public/assets/images/A.png')}}" class="" alt="" />
                                            <p class="">Informations personnelles</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes screen4_brdrbtmmbl">
                                            <img src="{{ asset('public/assets/images/B.png')}}" class="" alt="" />
                                            <p class="">Mes réservations</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes" onclick="openVehiclesListModal()">
                                            <img src="{{ asset('public/assets/images/C.png')}}" class="" alt="" />
                                            <p class="">Mes véhicules</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                                <h2 class="screen__4heads">Support</h2>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes screen4_brdrbtmmbl" onclick="openContactorModal()">
                                            <img src="{{ asset('public/assets/images/D.png')}}" class="" alt="" />
                                            <p class="">Nous contacter</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes">
                                            <img src="{{ asset('public/assets/images/E.png')}}" class="" alt="" />
                                            <p class="">Mes questions</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="screen__4boxes screen__4boxesblack">
                                            <p class="">Déconnexion</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0 text-center mt-1">
                                <a href="https://parkme.fr/condition_general_parkme_de_ventes.pdf" target="_blank" class="screen__4cgv" id="">CGV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Personal Information Modal -->
            <div class="container m-auto p-0 screen__4container screen__4infocontainer">
                <div class="row m-0 p-0">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                <div class="screen__dsplyflexstart m-0">
                                    <a href="javascript:void(0);" onclick="closePersonalInfoModal()" class="screen-btn-cross" id="">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </a>
                                    <h1 class="screen__4infoheading">Informations personnelles</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0 screen__4infoformrow">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="firstname" value="Matéo Dal maso" name="firstname" placeholder="Prénom*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="name" value="Dalmaso" name="name" placeholder="Nom*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="number">Numéro de téléphone</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="number" value="07 78 68 22 57" name="number" placeholder="Numéro de téléphone*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="email" class="form-control form-control-lg form-check-input" id="email" value="dalmasomateo@gmail.com" name="email" placeholder="Adresse e-mail*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="newpassword">Nouveau mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-check-input" id="newpassword" value="" name="newpassword" placeholder="Nouveau mot de passe*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="passwordconfirmation">Confirmation mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-check-input" id="passwordconfirmation" value="" name="passwordconfirmation" placeholder="Confirmation mot de passe*" required />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv">
                                <a href="javascript:void(0);" class="screen__4enregistrer" id="">Enregistrer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mes Vehicles List-->
            <div class="container m-auto p-0">
                <div class="row m-0 p-0 screen__4Mdl_vehicleslist screen__4vehicleslist_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4vehiclelist_custommodal">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Mes véhicules</p>
                                                <a href="javascript:void(0);" onclick="closeVehiclesListModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0" id="">
                                        <div class="col-12 screen__4vlistdiv">
                                            <div class="screen__4Mdlrows row" onclick="openVehicleEditModal()">
                                                <div class="col-lg-2 col-md-2 col-sm-3 col-3 pr-0">
                                                    <img src="{{ asset('public/assets/images/F.png')}}" class="screen__4vlist_img" alt="" />
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-7 col-7 pl-0">
                                                    <h2 class="screen__4vlisthead">Peugeot 208</h2>
                                                    <p class="screen__4vlistp">111 ABC 31</p>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-2 dsflex-justify-align-center">
                                                    <a href="javascript:void(0);" class="screen3-detail-btn" id="">
                                                        <i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen03-modalbtndiv text-center">
                                            <div class="row screen__3Modalpd2">
                                                <div class="col-12 m-0 p-0">
                                                    <a href="javascript:void(0);" onclick="openVehicleAddModal()" class="screen__4vlistaddbtn" id="">+
                                                        Ajouter un
                                                        véhicule</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mes Vehicles Edit Vehicle-->
            <div class="container m-auto p-0">
                <div class="row screen__4Mdl_vehiclesedit screen__4vehiclesedit_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4vehicleedit_custommodal">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Peugeot 208 111 ABC 31
                                                </p>
                                                <a href="javascript:void(0);" onclick="closeVehicleEditModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="screen__4delete" id="">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclebrand">Marque véhicule</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="vehiclebrand" value="Peugeot" name="vehiclebrand" placeholder="Marque véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclemodel">Modèle véhicule</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="vehiclemodel" value="208" name="vehiclemodel" placeholder="Modèle véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="licenseplate">Plaque immatriculation</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="licenseplate" value="07 78 68 22 57" name="licenseplate" placeholder="Plaque immatriculation*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <a href="javascript:void(0);" class="screen__4enregistrer" id="">Enregistrer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mes Vehicles Add Vehicle-->
            <div class="container m-auto p-0">
                <div class="row screen__4Mdl_vehiclesadd screen__4vehiclesadd_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4vehicleadd_custommodal">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Ajouter un véhicule</p>
                                                <a href="javascript:void(0);" onclick="closeVehicleAddModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclebrand">Marque véhicule</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="vehiclebrand" name="vehiclebrand" placeholder="Marque véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclemodel">Modèle véhicule</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="vehiclemodel" name="vehiclemodel" placeholder="Modèle véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="licenseplate">Plaque immatriculation</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="licenseplate" name="licenseplate" placeholder="Plaque immatriculation*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <a href="javascript:void(0);" class="screen__4enregistrer" id="">Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nous Contactor Modal-->
            <div class="container m-auto p-0">
                <div class="row screen__4Mdl_contactor screen__4contactor_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4contactor_custommodal">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Nous contactor</p>
                                                <a href="javascript:void(0);" onclick="closeContactorModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 p-0 screen__4contactordiv">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-md-3 screen__dsplyflexcenter mbx1em screen__pstrelv">
                                            <a href="tel:+0768288671" class="screen__4copybtns" id=""><input type="text" value="07 68 28 86 71" class="screen__4contactorinputs" id="screen__4contactnumber" readonly /></a><a href="javascript:void(0);" class="screen__4copybtnsicon" onclick="copyContact('screen__4contactnumber')" id=""></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-md-3 screen__dsplyflexcenter screen__pstrelv">
                                            <a href="mailto:contact@parkme.fr" class="screen__4copybtns" id=""><input type="text" value="contact@parkme.fr" class="screen__4contactorinputs" id="screen__4contactemail" readonly /></a><a href="javascript:void(0);" class="screen__4copybtnsicon" onclick="copyContact('screen__4contactemail')" id=""></a>
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
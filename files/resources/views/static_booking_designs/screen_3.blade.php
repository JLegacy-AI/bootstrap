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
        <section id="screen__1" class="">
            <div class="container m-auto p-0 screen__3_container">
                <div class="row m-0 p-0 screen__3_mbl_change">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                        <div class="screen__3_headdiv m-0 screen__3__heading">
                            <h1 class="screen-heading">Mes réservations</h1>
                            <a href="javascript:void(0);" onclick="openAjouterModal()" class="screen__3_topbtn" id="">+
                                Ajouter<span class="screen__3_mblnone"> numéro réservation</span></a>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 screen-body-pd">
                            <div class="col-sm-12 col-12 px-0 pl-sm-0">
                                <div class="screen__3tabs_anim">
                                    <ul class="nav nav-tabs screen__3tabs_ul">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab_tout_voir" role="tab">Tout voir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_a_venir" role="tab">À
                                                venir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_en_cours" role="tab">En
                                                cours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_termine" role="tab">Terminé</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                            <div>
                                                <div class="row m-0 screen__3tabs_rowboxouter" onclick="openBookingDetailsModal()">
                                                    <div class="col-12">
                                                        <div class="row screen__3tabs_rowboxinner">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                <div class="row screen__3tabs_rowbox_dsk">
                                                                    <div class="col-3">
                                                                        <h1 class="">Parkme</h1>
                                                                        <p class="">#1515</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">54,99€</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row screen__3tabs_rowbox_mbl">
                                                                    <div class="col-12">
                                                                        <h1 class="">Parkme</h1>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="">54,99€ | 27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="screen__3tabs_ribon">
                                                                <span class="screen__3tabs_ribon__ screen__3tabs_ribon__green">À venir</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-0 screen__3tabs_rowboxouter" onclick="openBookingDetailsModal()">
                                                    <div class="col-12">
                                                        <div class="row screen__3tabs_rowboxinner">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                <div class="row screen__3tabs_rowbox_dsk">
                                                                    <div class="col-3">
                                                                        <h1 class="">Parkme</h1>
                                                                        <p class="">#1519</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">54,99€</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row screen__3tabs_rowbox_mbl">
                                                                    <div class="col-12">
                                                                        <h1 class="">Parkme</h1>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="">54,99€ | 27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="screen__3tabs_ribon">
                                                                <span class="screen__3tabs_ribon__ screen__3tabs_ribon__orange">En cours</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-0 screen__3tabs_rowboxouter" onclick="openBookingDetailsModal()">
                                                    <div class="col-12">
                                                        <div class="row screen__3tabs_rowboxinner">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                <div class="row screen__3tabs_rowbox_dsk">
                                                                    <div class="col-3">
                                                                        <h1 class="">Parkme</h1>
                                                                        <p class="">#1523</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">54,99€</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row screen__3tabs_rowbox_mbl">
                                                                    <div class="col-12">
                                                                        <h1 class="">Parkme</h1>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="">54,99€ | 27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="screen__3tabs_ribon">
                                                                <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">Terminé</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_a_venir">
                                            <div>
                                                <div class="row m-0 screen__3tabs_rowboxouter" onclick="openBookingDetailsModal()">
                                                    <div class="col-12">
                                                        <div class="row screen__3tabs_rowboxinner">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                <div class="row screen__3tabs_rowbox_dsk">
                                                                    <div class="col-3">
                                                                        <h1 class="">Parkme</h1>
                                                                        <p class="">#1515</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p class="">54,99€</p>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row screen__3tabs_rowbox_mbl">
                                                                    <div class="col-12">
                                                                        <h1 class="">Parkme</h1>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="">54,99€ | 27 juin - 5 juilllet</p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="screen__3tabs_ribon">
                                                                <span class="screen__3tabs_ribon__">À venir</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_cours">
                                            <div></div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_termine">
                                            <div></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-auto p-0">
                <div class="row screen__ajouter_main screen__ajouter_dsk_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-12 col-12 screen__ajouter_dsk_custmodal">
                        <div class="row screen-body-pd">
                            <div class="col-sm-12 col-12">
                                <div class="screen03-modalpd screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Ajouter réservation</p>
                                                <a href="javascript:void(0);" onclick="closeAjouterModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="number">Numéro de réservation</label>
                                                        <input type="number" class="form-control form-control-lg form-check-input" id="number" name="number" placeholder="Numéro de réservation*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" id="email" name="phone" placeholder="Adresse e-mail*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen03-modalbtndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="">Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Details Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_details screen__3detail_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3details_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Détail</p>
                                                <a href="javascript:void(0);" onclick="closeBookingDetailsModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="screen__3facture" id="">Facture</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12">
                                            <div class="screen__3Mdlrows row">
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-4">
                                                    <img src="{{ asset('public/assets/images/parkme_pic.png')}}" class="screen__Mblimg" alt="" />
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-8 col-8 pl-0">
                                                    <h1 class="screen__3Mdlh1">Parkme (#1515)</h1>
                                                    <p class="screen__3Mdlp1">Aéroport Toulouse Blagnac</p>
                                                </div>
                                            </div>
                                            <div class="row screen3__Mdlhr"></div>
                                            <div class="screen__3Modalpd1 screen__3Mdl_dflx mt-2 row">
                                                <div class="col-1 screen3__Mblmark"></div>
                                                <div class="col-11 screen3__Mblmarkinfo pl-0">
                                                    <h2 class="">27 juin 2021 <span class="">05:00</span></h2>
                                                    <h2 class="">05 juil 2021 <span class="">15:00</span></h2>
                                                </div>
                                            </div>
                                            <div class="screen__3Modalpd1 mt-4 mb-4 row">
                                                <div class="col-1"></div>
                                                <div class="col-11 pl-0">
                                                    <span class="screen__3Mdltags"><img src="images/navette_parkme_pic.png" class="screen__3MdltagsImg1" alt="" />
                                                        Navette Parkme</span>
                                                    <span class="screen__3Mdltags"><img src="images/lavage_exterieur_pic.png" class="screen__3MdltagsImg2" alt="" />
                                                        Lavage extérieur</span>
                                                </div>
                                            </div>
                                            <div class="row screen3__Mdlhr"></div>
                                            <div class="screen__3Modalpd3 row">
                                                <div class="col-1 screen__3dflex"><span class="screen__3Mbldot"></span>
                                                </div>
                                                <div class="col-11 pl-0"><span class="screen__3Mblpric">54,99€</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen03-modalbtndiv text-center">
                                            <div class="row screen__3Modalpd2">
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" class="screen__3Mblbtn_orange" onclick="openBookingModifierModal()" id="">Modifier</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" class="screen__3Mblbtn_red" onclick="openBookingAnnulerModal()" id="">Annuler</a>
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
            <!-- Booking Modifier Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_modifier screen__3modifier_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3modifier_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd_mod screen1page-new">
                                    <div class="row mb-screen-head screen__3_pd_top">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Modifier</p>
                                                <a href="javascript:void(0);" onclick="closeBookingModifierModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen__3icondiv">
                                            <i class="fa fa-exclamation screen__3icon screen__3iconorange"></i>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="screen__3mod_head">Modifier réservation</h2>
                                        </div>
                                        <div class="col-12">
                                            <ol class="screen__3ol">
                                                <li>Pour modifier, vous devez annuler votre réservation actuelle
                                                    (remboursement 3-5 j)</li>
                                                <li>Faire une nouvelle réservation</li>
                                            </ol>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen__3Mblbtn_orange" id="">Annuler
                                                réservation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Annuler Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_annuler screen__3annuler_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3annuler_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd_mod screen1page-new">
                                    <div class="row mb-screen-head screen__3_pd_top">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Annuler</p>
                                                <a href="javascript:void(0);" onclick="closeBookingAnnulerModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen__3icondiv">
                                            <i class="fa fa-exclamation screen__3icon screen__3iconred"></i>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="screen__3mod_head">Annuler réservation</h2>
                                        </div>
                                        <div class="col-12">
                                            <p class="screen__3anu_p">Êtes-vous sur de vouloir annuler votre réservation ? (remboursement 3-5 jours)</p>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen__3Mblbtn_red" id="">Annuler réservation</a>
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
                <a href="http://dev.parkme.fr/screen_1" class="mobile-footer-items mobile-footer-active">
                    <div>
                        <div class="footer-img footer-img-3"></div>
                        <p>Mes réservations</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="http://dev.parkme.fr/screen_2" class="mobile-footer-items">
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
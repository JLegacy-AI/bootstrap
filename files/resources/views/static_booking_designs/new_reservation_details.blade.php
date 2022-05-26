@php
$settings = \App\Settings::find(1);
@endphp
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
<style>
    #demo_timer {
        display: none !important;
    }

    @media(max-width:767px) {
        .navbar {
            display: none;
        }
    }
</style>

<body class="">
    @include('layouts.navigation')
    <main>
        <!-- Screen 1 Starts -->
        <section id="" class="">
            <div class="container m-auto p-0">
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 new_reserv_leftside">
                                <div class="row m-0 p-0">
                                    <div class="col-12 p-0 new_reserv_left_section1">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_subsection1 m-0">
                                                <a href="#" class="new_reserv_left_backicon1">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </a>
                                                <div>
                                                    <span class="new_reserv_left_headnumber">#45654</span>
                                                    <span class="new_reserv_left_headdot">.</span>
                                                    <a href="#" class="new_reserv_left_headrecu">Reçu</a>
                                                </div>
                                            </div>
                                            <div class="col-12 new_reserv_left_subsection2 m-0">
                                                <a href="#" class="new_reserv_left_backicon2">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </a>
                                                <h2 class="new_reserv_left_heading">Votre réservation</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 new_reserv_left_section2">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_section2sub m-0">
                                                <img src="{{ asset('public/assets/images/icon_reserv_plane.png')}}" />
                                                <span>Aéroport Toulouse-Blagnac</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 new_reserv_left_sectionseparatordiv1">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_sectionseparator m-0"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 p-0 new_reserv_left_section3">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_subsection3_1 m-0">
                                                <h2 class="new_reserv_left_subsectionh2">Date</h2>
                                                <a href="javascript:void(0);" class="new_reserv_left_sec3modifier" id="" onclick="openModifierModal()">Modifier</a>
                                            </div>
                                            <div class="col-12 new_reserv_left_subsection3_2 m-0">
                                                <div class="row screen__3Mdl_dflx new_reserv_left_subsection3_2details">
                                                    <div class="col-1 new_reserv_left_subsection3_2mblmark"></div>
                                                    <div class="col-11 new_reserv_left_subsection3_2markinfo pl-0">
                                                        <h2 class=""><span id="">08 Juillet</span> - <span id="">17:00</span></h2>
                                                        <h2 class=""><span id="">10 Juillet</span> - <span id="">20:00</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 new_reserv_left_sectionseparatordiv2 new_reserv_showmbl">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_sectionseparator m-0"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 p-0 new_reserv_left_section4 new_reserv_showmbl">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_subsection3_1 m-0">
                                                <h2 class="new_reserv_left_subsectionh2">Votre parking</h2>
                                            </div>
                                            <div class="col-12 new_reserv_right_section1 m-0 new_reserv_showmbl">
                                                <div class="new_reserv_right_section1div new_reserv_onleftsection1div">
                                                    <img src="{{ asset('public/assets/images/icon_reserv_map.png')}}" />
                                                    <div class="new_reserv_right_section1subdiv">
                                                        <h3>Parkme - Extérieur</h3>
                                                        <p>32 rue raymond grimaud, 31700 Blagnac </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 new_reserv_left_sectionseparatordiv3">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_sectionseparator m-0"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 p-0 new_reserv_left_section5">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_subsection5_1 m-0">
                                                <h2 class="new_reserv_left_subsectionh2">Véhicule</h2>
                                            </div>
                                            <div class="col-12 new_reserv_left_subsection5_2 m-0">
                                                <div class="row m-0">
                                                    <div class="col-12 new_reserv_left_subsection5_2main">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-3 new_reserv_left_section5_imgdiv pr-0">
                                                                <div class="new_reserv_left_section5_imgsubdiv">
                                                                    <img src="{{ asset('public/assets/images/icon_reserv_car.png')}}" alt="" />
                                                                    <span>1</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-7 col-7 new_reserv_left_section5_textdiv pl-0">
                                                                <h2>Skoda octavia</h2>
                                                                <p>554 AEC 31</p>
                                                                <a href="javascript:void(0);" id="">Aucun lavage</a>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-2 col-2 dsflex-justify-align-center">
                                                                <a href="javascript:void(0);" class="new_reserv_left_section5_arrow" id="">
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0">
                                    <div class="col-12 new_reserv_left_sectionseparatordiv4">
                                        <div class="row m-0">
                                            <div class="col-12 new_reserv_left_sectionseparator m-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12 new_reserv_rightside">
                                <div class="row m-0 new_reserv_rightsidebar">
                                    <div class="col-12 m-0 new_reserv_right_section1">
                                        <div class="new_reserv_right_section1div">
                                            <img src="{{ asset('public/assets/images/icon_reserv_map.png')}}" />
                                            <div class="new_reserv_right_section1subdiv">
                                                <h3>Parkme</h3>
                                                <p>32 rue raymond grimaud, 31700 Blagnac</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0 new_reserv_right_separator"></div>
                                    <div class="col-12 m-0 new_reserv_right_section2">
                                        <div class="row m-0">
                                            <h2 class="new_reserv_right_section2_h2">Prix</h2>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-6 p-0 text-left">
                                                <p class="new_reserv_right_section2_p">5 jours (1 véhicule)</p>
                                            </div>
                                            <div class="col-6 p-0 text-right">
                                                <p class="new_reserv_right_section2_p">34,99€</p>
                                            </div>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-6 p-0 text-left">
                                                <p class="new_reserv_right_section2_p">Navette aéroport</p>
                                            </div>
                                            <div class="col-6 p-0 text-right">
                                                <p class="new_reserv_right_section2_p">0€</p>
                                            </div>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-6 p-0 text-left">
                                                <p class="new_reserv_right_section2_p">Aucun lavage</p>
                                            </div>
                                            <div class="col-6 p-0 text-right">
                                                <p class="new_reserv_right_section2_p">0€</p>
                                            </div>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-6 p-0 text-left">
                                                <p class="new_reserv_right_section2_total">Total (TTC)</p>
                                            </div>
                                            <div class="col-6 p-0 text-right">
                                                <p class="new_reserv_right_section2_total">34,99€</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 m-0">
                                        <a href="#" class="new_reserv_right_section3_btnblack">Télécharger le reçu</a>
                                    </div>
                                    <div class="col-12 m-0">
                                        <a href="#" class="new_reserv_right_section3_btnblack">Besoin d’aide ?</a>
                                    </div>
                                    <div class="col-12 m-0">
                                        <a href="#" class="new_reserv_right_section3_btnred">Annuler réservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
        <!-- 1st POPUP (change date) -->
        <div class="container m-auto p-0">
            <div class="row m-0 p-0 screen_new_reserv_datemodal screen_new_reserv_modals">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-12 p-0 screen_new_reserv_customdatemodal">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12 new_pd_dsk">
                            <div class="screen_new_reserv_Modalpd_mod screen_new_reservpage_new">
                                <div class="row screen_new_reservmb_head screen_new_reserv_pd_top">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen_new_reservheader_main">
                                            <p class="screen_new_reservMdlhead">Modifier date</p>
                                            <a href="javascript:void(0);" onclick="closeModifierModal()" class="screen_new_reservbtn_back" id="">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                            <!-- this eraser would appear after new date being put to reset date change-->
                                            <a href="javascript:void(0);" class="new_reserv_right_effacer" id="">Effacer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="arrivalDate" class="new_reserv_mdl_input_label">Arrivée</label>
                                                    <input type="date" class="form-control form-control-lg new_reserv_mdl_input" name="" id="" value="2021-10-22" placeholder="Date arrivée" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="" class="new_reserv_mdl_input_label">&nbsp;</label>
                                                    <select class="form-control form-control-lg new_reserv_mdl_input" id="arriveeTime" name="start_time" required>
                                                        <option selected>05:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="departureDate" class="new_reserv_mdl_input_label">Retour</label>
                                                    <input type="date" class="form-control form-control-lg new_reserv_mdl_input" name="" id="" value="2021-10-24" placeholder="Date retour" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="" class="new_reserv_mdl_input_label">&nbsp;</label>
                                                    <select class="form-control form-control-lg new_reserv_mdl_input" id="departTime" name="end_time" required>
                                                        <option selected>05:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="new_reserv_mdl_bottom">
                                            <div class="new_reserv_mdl_liner"></div>
                                            <div class="new_reserv_mdl_total">
                                                <!-- this total would appear according to new date being put -->
                                                <span>Total à payer: 15€</span>
                                            </div>
                                            <div class="new_reserv_mdl_liner"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 new_reserv_mdlbtndiv text-center">
                                        <!-- class "new_reserv_mdlbtn_black" is after date change and for before it must be gray as "new_reserv_mdlbtn_gray" -->
                                        <a href="javascript:void(0);" class="new_reserv_mdlbtn new_reserv_mdlbtn_black" id="" onclick="openPaymentModal()">Changer date</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2nd POPUP (Payment)-->
        <div class="container m-auto p-0">
            <div class="row m-0 p-0 screen_new_reserv_paymentmodal screen_new_reserv_modals">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-12 p-0 screen_new_reserv_custompaymentmodal">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12 new_pd_dsk">
                            <div class="screen_new_reserv_Modalpd_mod screen_new_reservpage_new">
                                <div class="row screen_new_reservmb_head screen_new_reserv_pd_top">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen_new_reservheader_main">
                                            <p class="screen_new_reservMdlhead">Paiement</p>
                                            <a href="javascript:void(0);" onclick="closePaymentModal()" class="screen_new_reservbtn_back" id="">
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="cardname" class="new_reserv_mdl_paylabel">Nom sur la carte</label>
                                            <input type="text" id="cardname" autocomplete="off" class="form-control form-control-lg new_reserv_mdl_payinput" value="" name="cardname" placeholder="Nom sur la carte" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="cardnumber" class="new_reserv_mdl_paylabel">Numéro sur la carte</label>
                                            <input type="text" class="form-control form-control-lg new_reserv_mdl_payinput" id="cardnumber" name="card_number" aria-describedby="cardnumberError" value="" placeholder="Numéro sur la carte" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="carddateexpiry" class="new_reserv_mdl_paylabel">Date expiration</label>
                                                    <div class="row">
                                                        <div class="col-6" style="position:relative;">
                                                            <input type="text" class="form-control form-control-lg new_reserv_mdl_payinput" id="carddateexpirymonth" name="exp_month" aria-describedby="carddateexpiryError" value="" placeholder="MM" />
                                                            <span class="form_slash_seperator">/</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control form-control-lg new_reserv_mdl_payinput" id="carddateexpiry" name="exp_year" aria-describedby="carddateexpiryError" value="" placeholder="AA" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cardcvc" class="new_reserv_mdl_paylabel">CVC</label>
                                                    <input type="number" class="form-control form-control-lg new_reserv_mdl_payinput" id="cardcvc" name="cvc" aria-describedby="cardcvcError" value="" placeholder="CVC (3 chiffres)" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 new_reserv_mdlbtndiv text-center">
                                        <a href="javascript:void(0);" class="new_reserv_mdlbtn new_reserv_mdlbtn_black" id="" onclick="openConfirmationModificationModal()">Payer 15€</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3rd POPUP (Confirmation Modification)-->
        <div class="container m-auto p-0">
            <div class="row m-0 p-0 screen_new_reserv_confirmmodal screen_new_reserv_modals">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-12 p-0 screen_new_reserv_customconfirmmodal">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12 new_pd_dsk">
                            <div class="screen_new_reserv_Modalpd_mod screen_new_reservpage_new">
                                <div class="row screen_new_reservmb_head screen_new_reserv_pd_top">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen_new_reservheader_main">
                                            <p class="screen_new_reservMdlhead">Confirmation modification</p>
                                            <a href="javascript:void(0);" onclick="closeConfirmationModificationModal()" class="screen_new_reservbtn_back" id="">
                                                <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="">
                                    <div class="col-12 new_reserv_mdl_icondiv">
                                        <i class="fa fa-info new_reserv_mdl_icon new_reserv_mdl_icon_gray"></i>
                                    </div>
                                    <div class="col-12">
                                        <h2 class="new_reserv_mdl_head">Modification réservation</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="new_reserv_mdl_confirm_p">Les nouvelles dates seront appliqués, aucun supplément n’est demandé.</p>
                                    </div>
                                    <div class="col-12 new_reserv_mdlbtndiv text-center">
                                        <a href="javascript:void(0);" class="new_reserv_mdlbtn new_reserv_mdlbtn_black" id="" onclick="openRefundModal()">Confirmer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4th POPUP (Refund action)-->
        <div class="container m-auto p-0">
            <div class="row m-0 p-0 screen_new_reserv_refundmodal screen_new_reserv_modals">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-12 p-0 screen_new_reserv_customrefundmodal">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12 new_pd_dsk">
                            <div class="screen_new_reserv_Modalpd_mod screen_new_reservpage_new">
                                <div class="row screen_new_reservmb_head screen_new_reserv_pd_top">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen_new_reservheader_main">
                                            <p class="screen_new_reservMdlhead">Remboursement partiel</p>
                                            <a href="javascript:void(0);" onclick="closeRefundModal()" class="screen_new_reservbtn_back" id="">
                                                <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="">
                                    <div class="col-12 new_reserv_mdl_icondiv">
                                        <i class="fa fa-info new_reserv_mdl_icon new_reserv_mdl_icon_gray"></i>
                                    </div>
                                    <div class="col-12">
                                        <h2 class="new_reserv_mdl_head">Remboursement de 15€</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="new_reserv_mdl_confirm_p">Les nouvelles dates seront appliqués, Votre réservation sera partiellement remboursé (Délai 2-5j).</p>
                                    </div>
                                    <div class="col-12 new_reserv_mdlbtndiv text-center">
                                        <a href="javascript:void(0);" class="new_reserv_mdlbtn new_reserv_mdlbtn_black" id="">Confirmer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('public/assets/js/newscreensjs.js')}}"></script>
    <script src="{{ asset('public/assets/js/aos.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.caret.js') }}"></script>

    <script src="{{ asset('public/assets/js/jquery.mobilePhoneNumber.js') }}"></script>

    <script src="{{ asset('public/assets/js/custom_script.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery-ui.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>


    <script src="{{ asset('public/assets/dist/js/materialize.js') }}"></script>

    <script>
        function openModifierModal() {
            $('body').css('overflow', 'hidden');
            $(".screen_new_reserv_datemodal").attr('style', 'visibility: visible;');
            $(".screen_new_reserv_customdatemodal").attr('style', 'transform: translateY(0%);');
        }

        function closeModifierModal() {
            $('body').css('overflow', 'auto');
            $(".screen_new_reserv_datemodal").attr('style', 'visibility: hidden;');
            $(".screen_new_reserv_customdatemodal").attr('style', 'transform: translateY(100%);');
        }

        function openPaymentModal() {
            closeModifierModal();
            $('body').css('overflow', 'hidden');
            $(".screen_new_reserv_paymentmodal").attr('style', 'visibility: visible;');
            $(".screen_new_reserv_custompaymentmodal").attr('style', 'transform: translateY(0%);');
        }

        function closePaymentModal() {
            $('body').css('overflow', 'auto');
            openModifierModal();
            $(".screen_new_reserv_paymentmodal").attr('style', 'visibility: hidden;');
            $(".screen_new_reserv_custompaymentmodal").attr('style', 'transform: translateY(100%);');
        }

        function openConfirmationModificationModal() {
            closePaymentModal();
            closeModifierModal();
            $('body').css('overflow', 'hidden');
            $(".screen_new_reserv_confirmmodal").attr('style', 'visibility: visible;');
            $(".screen_new_reserv_customconfirmmodal").attr('style', 'transform: translateY(0%);');
        }

        function closeConfirmationModificationModal() {
            $('body').css('overflow', 'auto');
            openPaymentModal();
            $(".screen_new_reserv_confirmmodal").attr('style', 'visibility: hidden;');
            $(".screen_new_reserv_customconfirmmodal").attr('style', 'transform: translateY(100%);');
        }

        function openRefundModal() {
            closeConfirmationModificationModal();
            closePaymentModal();
            closeModifierModal();
            $('body').css('overflow', 'hidden');
            $(".screen_new_reserv_refundmodal").attr('style', 'visibility: visible;');
            $(".screen_new_reserv_customrefundmodal").attr('style', 'transform: translateY(0%);');
        }

        function closeRefundModal() {
            $('body').css('overflow', 'auto');
            openConfirmationModificationModal();
            $(".screen_new_reserv_refundmodal").attr('style', 'visibility: hidden;');
            $(".screen_new_reserv_customrefundmodal").attr('style', 'transform: translateY(100%);');
        }
    </script>

</body>

</html>
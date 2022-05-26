<style>
    input[type="date"]::before {
        content: attr(placeholder);
        width: 100%;
    }
    input[type="date"] {
        width: 100%;
        height: calc(2.5em + 1rem + 2px);
        display: flex;
        justify-content: flex-start;
        align-items: center;
        white-space: nowrap;
    }

    /* hide our custom/fake placeholder text when in focus to show the default
     * 'mm/dd/yyyy' value and when valid to show the users' date of birth value.
     */
    input[type="date"]:focus::before,
    input[type="date"]:valid::before {
        display: none
    }

    @media(max-width:767px) and (orientation:portrait) {

        .new-navbar .newmenu_navbars,
        .new-navbar .newmenu_navbars:hover,
        .new-navbar .newmenu_navbars:focus {
            color: #fff;
        }

        .new-navbar .newmenu_navbars span {
            -webkit-text-stroke: 1px #635e62;
        }
    }
</style>
<div class="container py-5 pd_class_xl">
    <div class="no-gutters row">
        <!--<div class="col-md-1"></div>-->
        <div class="col-md-5">
            <div class="p-0 py-3 bg-black bg_black_class_xl">
                <div class="row py-0 px-3">
                    <div class="col-sm-12 col-12">
                        <div class="">
                            <h2 class="text-white pb-2 resrerver-hed" style="font-family:'Helvetica LT W01 Bold'">Réserver votre place de <b style="color:#fbd220;">parking aéroport</b> parkme</h2>
                        </div>
                    </div>
                </div>
                <div class="row py-0 px-3">
                    <div class="col-sm-12 col-12">
                        <div class="section1-form">
                            <div class="form-group">
                                <label><b>AÉROPORT</b></label>
                                <div class="nw_form_inputdiv">
                                    <select class="form-control form-control-lg" id="airport" name="airport" required>
                                        <option value="" disabled selected hidden>Aéroport</option>
                                        @foreach($airports as $airport)
                                        <option value={{ $airport->code }}>{{ $airport->name }} ({{ $airport->code }})</option>
                                        @endforeach
                                    </select>
                                    <span class="nw_form_inputicon"><img src="{{ asset('public/assets/images/new_icons/airport_icon.png') }}" width="14px" /></span>
                                </div>
                                <label id="airportError">Aéroport non sélectionnée</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-0 px-3">
                    <div class="col-sm-6 col-6">
                        <div class="section1-form">
                            <div class="form-group">
                                <label><b>ARRIVÉE</b><span id="au_parking" style="font-weight: 100; opacity: 0.7"> (parking)</span></label>
                                <div class="nw_form_inputdiv">
                                    <input type="date" class="form-control form-control-lg" placeholder="Date arrivée" name="start_date" id="arrivalDate" autocomplete="off" required>
                                    <span class="nw_form_inputicon1"><img src="{{ asset('public/assets/images/new_icons/date_icon.png') }}" width="13px" /></span>
                                </div>
                                <label id="arrivalError">Date non sélectionnée</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6">
                        <div class="section1-form">
                            <div class="form-group">
                                <label class="invisible" for="arriveeTime">ARRIVÉE</label>
                                <div class="nw_form_inputdiv">
                                    <select class="form-control form-control-lg" id="arriveeTime" name="start_time" required>
                                        <option value="" disabled selected hidden>Heure arrivée</option>
                                        @foreach($timeslots as $timeslot)
                                        <option><?php echo $timeslot->timeslot; ?></option>
                                        @endforeach
                                    </select>
                                    <span class="nw_form_inputicon1"><img src="{{ asset('public/assets/images/new_icons/hour_icon.png') }}" width="14px" /></span>
                                </div>
                                <label id="arrivalTimeError">Sélectionner heure</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-0 px-3">
                    <div class="col-sm-6 col-6">
                        <div class="section1-form">
                            <div class="form-group">
                                <label><b>RETOUR</b><span id="au_aeroport" style="font-weight: 100; opacity: 0.7"> (aéroport)</span></label>
                                <div class="nw_form_inputdiv">
                                    <input type="date" class="form-control form-control-lg" placeholder="Date retour" name="end_date" id="departureDate" autocomplete="off" required>
                                    <span class="nw_form_inputicon2"><img src="{{ asset('public/assets/images/new_icons/date_icon.png') }}" width="13px" /></span>
                                </div>
                                <label id="departError">Date non sélectionnée</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6">
                        <div class="section1-form">
                            <div class="form-group">
                                <label class="invisible" for="departTime">DÉPART</label>
                                <div class="nw_form_inputdiv">
                                    <select class="form-control form-control-lg" id="departTime" name="end_time" required>
                                        <option value="" disabled selected hidden>Heure retour</option>
                                        @foreach($timeslots as $timeslot)
                                        <option><?php echo $timeslot->timeslot; ?></option>
                                        @endforeach
                                    </select>
                                    <span class="nw_form_inputicon2"><img src="{{ asset('public/assets/images/new_icons/hour_icon.png') }}" width="14px" /></span>
                                </div>
                                <label id="departTimeError">Sélectionner heure</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-0 px-3">
                    <div class="col">
                        <div class="form-group mt-2 mb-0">
                            <button type="button" id="validateForm" class="index-btn d-block w-100 text-center"><b>RÉSERVER</b></button>
                            <!--  id="btn-screen0" -->
                        </div>
                    </div>
                </div>
                <div class="new-icons row no-gutters py-0 px-3">

                    <div class="col-3 col-xl-3">
                        <div class="new-icon">
                            <img src="{{ asset('public/assets/images/new_icons/1.png') }}" alt="" class="new-icon-img m-auto">
                        </div>
                        <span class="new-icon-text d-xl-block"><b>Jour 1:</b> 14,99€<br><span class="nw_icon_thin_text">puis</span> <b>5€/j</b></span>
                    </div>
                    <div class="col-3 col-xl-3">
                        <div class="new-icon">
                            <img src="{{ asset('public/assets/images/new_icons/2.png') }}" alt="" class="new-icon-img m-auto">
                        </div>
                        <span class="new-icon-text"><b>Navette</b> <span class="nw_icon_thin_text">PARKME</span><br><b>inclus</b></span>
                    </div>
                    <div class="col-3 col-xl-3">
                        <div class="new-icon">
                            <img src="{{ asset('public/assets/images/new_icons/3.png') }}" alt="" class="new-icon-img m-auto">
                        </div>
                        <span class="new-icon-text">Les <b>clefs</b> <span class="nw_icon_thin_text">doivent<br>être</span> <b>laissées</b></span>
                    </div>
                    <div class="col-3 col-xl-3">
                        <div class="new-icon">
                            <img src="{{ asset('public/assets/images/new_icons/4.png') }}" alt="" class="new-icon-img m-auto">
                        </div>
                        <span class="new-icon-text"><b>Modification</b> <span class="nw_icon_thin_text">et</span> <br><b>annulation gratuite</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsection1">
    <div class="container newhmcontainer mt-4 pb-1">
        <div class="row">
            <div class="col-12">
                <h1 class="newhmsec1_h1">Pour vous</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 newhmsec1">
                <div class="newhmsec1_div">
                    <div class="newhmsec1_subdivs btnrippleeffect1" onclick="location.href='{{ url('mes-reservations') }}'">
                        <div class="newhmsec1_subdiv1">
                            <img src="{{ asset('public/assets/images/home_section1_1.png')}}" class="" alt="PARKME" />
                        </div>
                        <div class="newhmsec1_subdiv2">
                            <h2 class="">Mes parkings</h2>
                            <p class="">Gérer vos réservations</p>
                        </div>
                    </div>
                    <div class="newhmsec1_subdivs btnrippleeffect1" onclick="location.href='{{ url('help-center/support/nous-contacter') }}'">
                        <div class="newhmsec1_subdiv1">
                            <img src="{{ asset('public/assets/images/home_section1_2.png')}}" class="" alt="PARKME" />
                        </div>
                        <div class="newhmsec1_subdiv2">
                            <h2 class="">Support</h2>
                            <p class="">Contacter Parkme</p>
                        </div>
                    </div>
                    <div class="newhmsec1_subdivs btnrippleeffect1" onclick="location.href='{{ url('help-center') }}'">
                        <div class="newhmsec1_subdiv1">
                            <img src="{{ asset('public/assets/images/home_section1_3.png')}}" class="" alt="PARKME" />
                        </div>
                        <div class="newhmsec1_subdiv2">
                            <h2 class="">Centre d’aide</h2>
                            <p class="">Questions fréquentes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsection2">
    <div class="container newhmcontainer pt-4 pb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="newhmsec2_h1">Comment ça marche ?</h1>
            </div>
        </div>
        <div class="row no-gutters nwhmrownogutters">
            <div class="col-12 newhmsec2">
                <div class="newhmsec2_div">
                    <div class="newhmsec2_subdivs">
                        <h2 class="newhmsec2_black1h2"><span class="newhmsec2_spanyellow">Parkme</span> est un<br />parking aéroport</h2>
                    </div>
                    <div class="newhmsec2_subdivs" id="newhmsec2_subdiv_A">
                        <span class="newhmsec2_spannum">1</span>
                        <h2 class="newhmsec2_pich2">Réserver en ligne<br />votre place parkme</h2>
                    </div>
                    <div class="newhmsec2_subdivs" id="newhmsec2_subdiv_B">
                        <span class="newhmsec2_spannum">2</span>
                        <h2 class="newhmsec2_pich2">Garer votre véhicule<br />et laisser vos clefs</h2>
                    </div>
                    <div class="newhmsec2_subdivs" id="newhmsec2_subdiv_C">
                        <span class="newhmsec2_spannum">3</span>
                        <h2 class="newhmsec2_pich2">La navette vous<br />transporte à l’aéroport</h2>
                    </div>
                    <div class="newhmsec2_subdivs">
                        <h2 class="newhmsec2_black2h2"><span class="newhmsec2_spanyellow">Votre retour</span></h2>
                    </div>
                    <div class="newhmsec2_subdivs" id="newhmsec2_subdiv_D">
                        <span class="newhmsec2_spannum">4</span>
                        <h2 class="newhmsec2_pich2">Prévenez parkme<br />de votre retour par tel</h2>
                    </div>
                    <div class="newhmsec2_subdivs" id="newhmsec2_subdiv_E">
                        <span class="newhmsec2_spannum">5</span>
                        <h2 class="newhmsec2_pich2">Retrouvez la navette<br />devant l’aéroport</h2>
                    </div>
                    <div class="newhmsec2_subdivs">
                        <h2 class="newhmsec2_black1h2">Fin: Récupérez<br />votre véhicule<br />dans votre parking<br /><span class="newhmsec2_spanyellow">parkme</span></h2>
                    </div>
                </div>
                <i class="fa fa-arrow-left newhmsec2_arrowleft" aria-hidden="true"></i>
                <i class="fa fa-arrow-right newhmsec2_arrowright" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>
<div class="newsection3">
    <div class="container newhmcontainer mt-5 mb-4">
        <div class="row no-gutters nwhmrownogutters">
            <div class="col-12 newhmsec3">
                <div class="newhmsec3_div">
                    <h2 class="newhmsec3_blackthin">NOUVEAU !</h2>
                    <h2 class="newhmsec3_blackbold">Départ et arrivée en<br />2 minutes</h2>
                    <img src="{{ asset('public/assets/images/home_section3.png')}}" class="newhmsec3_img" alt="PARKME" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsection4">
    <div class="container newhmcontainer mt-4 mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="newhmsec4_h1">Trouver un parking parkme</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 newhmsec4" onclick="location.href='{{ url('help-center/localisation/adresse') }}'">
                <div class="newhmsec4_div btnrippleeffect1 text-center">
                    <h2 class="newhmsec4_blacktext">Aéroport toulouse-blagnac (TLS)</h2>
                </div>
                <div class="newhmsec4_buttondiv">
                    <button type="button" href="{{ url('help-center/localisation/adresse') }}" class="newhmsec4_button btnrippleeffect" onclick="location.href='{{ url('help-center') }}'">C’est parti !</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsection5">
    <div class="container newhmcontainer mt-4 mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="newhmsec5_h1">Combien ça coûte ?</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 newhmsec5" onclick="">
                <div class="newhmsec5_div">
                    <div class="newhmsec5_subdiv1 text-center">
                        <h2 class="newhmsec5_blacktext1">Premier jour<span class="newhmsec5_blacktext1span"> à <span class="newhmsec2_spanyellow">14,99€</span></span></h2>
                    </div>
                    <div class="newhmsec5_subdiv2 text-center">
                        <h2 class="newhmsec5_blacktext2">Chaque jour<br />supplémentaire<br /><span class="newhmsec2_spanyellow">5€/jour</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsection6">
    <div class="container newhmcontainer mt-5 mb-5">
        <div class="row">
            <div class="col-12 newhmsec6">
                <div class="newhmsec6_div">
                    <h2 class="newhmsec6_blackbold">Modification et <span class="newhmsec6_span">annulation gratuite</span></h2>
                    <p class="newhmsec6_blackthin">Créer un compte <span class="newhmsec6_spandsk">afin de</span><span class="newhmsec6_spanmbl">pour</span> gérer vos réservations</p>
                    <!-- <button class="newhmsec6_button btnrippleeffect" onclick="location.href='{{ url('register') }}'">Créer un compte</button> -->
                    <div class="nwripplediv">
                        <a href="{{ url('register') }}" class="ripple">Créer un compte</a>
                    </div>

                    <img src="{{ asset('public/assets/images/home_section6.png')}}" class="newhmsec6_img" alt="PARKME" />
                </div>
            </div>
        </div>
    </div>
</div>
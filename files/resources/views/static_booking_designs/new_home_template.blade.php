<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PARKME | Parking Aeroport Toulouse</title>
    @include('layouts.meta')
    @include('layouts.head')
    <style>
        .new-icons {
            margin-top: 10px;
        }

        @media(max-width:767px) and (orientation:portrait) {
            .navbar {
                background: transparent !important;
            }

            .new_navbar_mobile {
                display: block !important;
            }

            #demo_timer,
            .new_navbar_desktop {
                display: none !important;
            }
        }

        @media(max-width:767px) and (orientation:landscape) {
            .new_navbar_mobile {
                display: none !important;
            }

            #demo_timer,
            .new_navbar_desktop {
                display: block !important;
            }
        }

        .dataTables_filter,
        .dataTables_paginate.paging_simple_numbers {
            display: inline-block;
            float: right;
        }

        .dataTables_length,
        .dataTables_info {
            display: inline-block;
        }

        .paginate_button.previous,
        .paginate_button.next,
        .paginate_button {
            border: 1px solid;
            padding: 5px;
            margin-right: 10px;
            margin-left: 10px;
            cursor: pointer;
        }

        .paginate_button {
            margin-right: 5px !important;
            margin-left: 5px !important;
        }
    </style>
</head>

<body class="body hompage_bg">
    <div id="demo_timer" style="color: black;background: #fbd220;font-weight: 700;text-align: center;min-height: 32px;" class="d-flex align-items-center col-md-12 justify-content-md-center end justify-content-end sticky-top">
        <div style="width:100% !important;">
            <!--<p>Lavage extérieur OFFERT durant 24h!</p>-->
            <p>Bienvenue ! Premier jour à 14,99€ puis 5€/jour</p>
        </div>
    </div>
    @include('layouts.navigation')
    <div class="newsection1">
        <div class="container newhmcontainer mt-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="newhmsec1_h1">Pour vous</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 newhmsec1">
                    <div class="newhmsec1_div">
                        <div class="newhmsec1_subdivs btnrippleeffect1">
                            <div class="newhmsec1_subdiv1">
                                <img src="{{ asset('public/assets/images/home_section1_1.png')}}" class="" alt="PARKME" />
                            </div>
                            <div class="newhmsec1_subdiv2">
                                <h2 class="">Mes parkings</h2>
                                <p class="">Gérer vos réservations</p>
                            </div>
                        </div>
                        <div class="newhmsec1_subdivs btnrippleeffect1">
                            <div class="newhmsec1_subdiv1">
                                <img src="{{ asset('public/assets/images/home_section1_2.png')}}" class="" alt="PARKME" />
                            </div>
                            <div class="newhmsec1_subdiv2">
                                <h2 class="">Support</h2>
                                <p class="">Contacter Parkme</p>
                            </div>
                        </div>
                        <div class="newhmsec1_subdivs btnrippleeffect1">
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
        <div class="container newhmcontainer mt-4 mb-5">
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
                <div class="col-12 newhmsec4" onclick="location.href='{{ url('help-center') }}'">
                    <div class="newhmsec4_div btnrippleeffect1 text-center">
                        <h2 class="newhmsec4_blacktext">Aéroport toulouse-blagnac (TLS)</h2>
                    </div>
                    <div class="newhmsec4_buttondiv">
                        <button class="newhmsec4_button btnrippleeffect" onclick="location.href='{{ url('help-center') }}'">C’est parti !</button>
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
                            <a href="#" class="ripple">Créer un compte</a>
                        </div>
                        <img src="{{ asset('public/assets/images/home_section6.png')}}" class="newhmsec6_img" alt="PARKME" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newfootersection">
        <div class="container newftcontainer pb-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="newfth1">Parkme</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 newftdiv">
                    <div class="newftdiv2">
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Assistance</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Localisation</h2>
                                    <p class="newftp">Toutes les adresses</p>
                                </div>
                            </div>
                            <div class="newftdivhover newftbrdrbtm">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Support</h2>
                                    <p class="newftp">Nous contacter</p>
                                </div>
                            </div>
                            <div class="newftdivhover" onclick="location.href='{{ url('help-center') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Centre d’aide</h2>
                                    <p class="newftp">Questions fréquentes</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Réservation</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Modification</h2>
                                    <p class="newftp">Tout savoir sur la modification</p>
                                </div>
                            </div>
                            <div class="newftdivhover">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Annulation</h2>
                                    <p class="newftp">Tout savoir sur l’annulation copie</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Service additionnel</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Navette</h2>
                                    <p class="newftp">Tous les sujets</p>
                                </div>
                            </div>
                            <div class="newftdivhover">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Lavage</h2>
                                    <p class="newftp">Tous les sujets</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">À propos</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Qui sommes nous ?</h2>
                                    <p class="newftp">Découvrir Parkme</p>
                                </div>
                            </div>
                            <div class="newftdivhover">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Comment ça marche ?</h2>
                                    <p class="newftp">Le fonctionnement de parkme</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters newftbrdrbtm newftmargintop"></div>
            <div class="row mt-4">
                <div class="col-6">
                    <p class="newftp1">&#169; <?php echo date("Y"); ?> <a href="{{url('/')}}" class="newftparkme">Parkme</a> <a href="#" class="newfta">Conditions générales</a></p>
                </div>
                <div class="col-6 text-right">
                    <a href="#"><img src="{{ asset('public/assets/images/footer_fb.png')}}" class="newftimg" alt="PARKME" /></a>
                    <a href="#"><img src="{{ asset('public/assets/images/footer_insta.png')}}" class="newftimg" alt="PARKME" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer for mobile -->
    <div>
        <div class="footer-buttons-div">
            <div class="mobile-footer-container">
                <a href="{{ url('') }}" class="{{ (request()->is('/')) ? 'mobile-footer-items mobile-footer-active' : 'mobile-footer-items' }}">
                    <div>
                        <div class="footer-img footer-img-1"></div>
                        <p>Accueil</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="{{ url('') }}" class="mobile-footer-items">
                    <div>
                        <div class="footer-img footer-img-2"></div>
                        <p>Réserver</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="{{ url('mes-reservations') }}" class="{{ (request()->is('mes-reservations*') || request()->is('reservations*')) ? 'mobile-footer-items mobile-footer-active' : 'mobile-footer-items' }}">
                    <div>
                        <div class="footer-img footer-img-3"></div>
                        <p>Mes réservations</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
                <a href="{{ url('mon-compte') }}" class="{{ (request()->is('mon-compte*') || request()->is('home*')) ? 'mobile-footer-items mobile-footer-active' : 'mobile-footer-items' }}">
                    <div>
                        <div class="footer-img footer-img-4"></div>
                        <p>Compte</p>
                    </div>
                    <div class="footer-hover-gray"></div>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.scripts')
    <script>
        var $el = $("#openNavMenuMblid");
        var $ee = $(".newnav_mblmenu");
        $el.click(function(e) {
            console.log('clicked');
            e.stopPropagation();
            $(".newnav_mblmenu").addClass('active');
            $("body").addClass('new_navbar_mobile_body');
        });
        $(document).on('click', function(e) {
            if (($(e.target).attr('class') != $ee.attr('class')) && ($ee.hasClass('active'))) {
                $ee.removeClass('active');
                $("body").removeClass('new_navbar_mobile_body');
            }
        });
        $(document).ready(function() {
            $(".newhmsec2_arrowleft").hide();
            $(".newhmsec2_arrowleft").click(function() {
                var leftPos = $('.newhmsec2_div').scrollLeft();
                $(".newhmsec2_div").animate({
                    scrollLeft: leftPos - 260
                }, 800);
                $(".newhmsec2_arrowright").show();
            });

            $(".newhmsec2_arrowright").click(function() {
                var leftPos = $('.newhmsec2_div').scrollLeft();
                $(".newhmsec2_div").animate({
                    scrollLeft: leftPos + 260
                }, 800);
                $(".newhmsec2_arrowleft").show();
            });

            $(function() {
                var scrollLeftPrev = 0;
                $('.newhmsec2_div').scroll(function() {
                    var $elem = $('.newhmsec2_div');
                    var newScrollLeft = $elem.scrollLeft(),
                        width = $elem.width(),
                        scrollWidth = $elem.get(0).scrollWidth;
                    var offset = 0;

                    if ((scrollWidth - newScrollLeft - width) == offset) {
                        $(".newhmsec2_arrowleft").show();
                        $(".newhmsec2_arrowright").hide();
                    }
                    if (newScrollLeft === 0) {
                        $(".newhmsec2_arrowleft").hide();
                        $(".newhmsec2_arrowright").show();
                    }
                    scrollLeftPrev = newScrollLeft;
                });
            });
        });
        var parent, ink, d, x, y;


        $(".ripple").mouseup(function(e) {
            ink.addClass("end");
        });
        $(".ripple").mousedown(function(e) {

            var item = $(this);

            parent = item.parent();
            //create .ink element if it doesn't exist
            if (parent.find(".ink").length == 0)
                parent.prepend("<div class='ink'></div>");

            ink = parent.find(".ink");
            //incase of quick double clicks stop the previous animation
            ink.removeClass("animate");
            ink.removeClass("end");
            //set size of .ink
            if (!ink.height() && !ink.width()) {
                //use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
                d = Math.max(parent.outerWidth(), parent.outerHeight());
                ink.css({
                    height: d,
                    width: d
                });
            }

            //get click coordinates
            //logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
            x = e.pageX - parent.offset().left - ink.width() / 2;
            y = e.pageY - parent.offset().top - ink.height() / 2;

            //set the position and add class .animate
            ink.css({
                top: y + 'px',
                left: x + 'px'
            }).addClass("animate");

        });
    </script>
</body>

</html>
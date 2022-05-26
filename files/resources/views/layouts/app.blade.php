@php 
$settings = \App\Settings::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$settings->application_name}}</title>
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

        @media (max-width: 575px) {

            #demo_timer,
            .new_navbar_desktop {
                display: none !important;
            }

            .new_navbar_mobile {
                display: block !important;
            }
            .newnav_imgflex {
                display: flex !important;
                justify-content: center;
                align-items: center;
            }

            .newnavbar_img {
                width: 80%;
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
            <p>{{ $settings->promo_text }}</p>
        </div>
    </div>
    @include('layouts.navigation')

    @yield('content')
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




    <!-- Nous Contactor Modal-->
    <div class="container m-auto p-0">
        <div class="row screen__4Mdl_connectez screen__4contactor_modal">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4connectez_custommodal">
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                        <div class="screen__3Modalpd screen1page-new">
                            <div class="row mb-screen-head screen3__Modalpd1 screen3__Modalpd1_login">
                                <div class="col-sm-12 col-12" id="">
                                    <div class="screen-header-main">
                                        <p class="screen__3Mdlhead">Connectez-vous</p>
                                        <a href="javascript:void(0);" onclick="closeConnectezModal()" class="screen03-btn-back" id="">
                                            <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                            <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <form id="mainForm" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row m-0 p-0 screen__4contactordiv screen4_popuplogin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__dsplyflexcenter screen__pstrelv">
                                        <div class="form-group w-100">
                                            <label for="email">Adresse e-mail</label>
                                            <input type="email" class="form-control form-control-lg form-check-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Adresse e-mail*" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__dsplyflexcenter screen__pstrelv">
                                        <div class="form-group w-100">
                                            <label for="password">Mot de passe</label>
                                            <input type="password" class="form-control form-control-lg form-check-input  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mot de passe*" required autocomplete="current-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__dsplyflexcenter screen__pstrelv">
                                        <div class="row no-gutters w-100">
                                            <div class="col-6 screen4-tabs-div text-left">
                                                <div class="form-group">
                                                    <label for="email"><a href="{{ route('register') }}" class="" id="">Créer un compte ?</a></label>
                                                </div>
                                            </div>
                                            <div class="col-6 screen4-tabs-div text-right">
                                                <div class="form-group">
                                                    <label for="email"><a href="{{ route('password.request') }}" class="" id="">Mot
                                                            de passe oublié ?</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 screens-btndiv text-center">
                                        <button type="button" class="screen-btn" id="validateForm" name="submit">Connexion</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
    <script>
        var $el = $("#openNavMenuMblid");
        var $ee = $(".newnav_mblmenu");
        $el.click(function(e) {
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
        $(".ripple").mouseout(function(e) {
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

    <script>
        function openConnectezModal() {
            $(".screen__4Mdl_connectez").attr('style', 'visibility: visible;');
            $(".screen__4connectez_custommodal").attr('style', 'transform: translateY(0%);');
        }

        function closeConnectezModal() {
            $(".screen__4Mdl_connectez").attr('style', 'visibility: hidden;');
            $(".screen__4connectez_custommodal").attr('style', 'transform: translateY(100%);');
        }
        $('#validateForm').on('click', function(e) {
            // all checks here
            // $('#mainForm').submit();
            $.post("request-login", {
                email: $('#email').val(),
                password: $('#password').val()
            }, function(data, status) {
                var response = JSON.parse(data);
                if (response.loggedIn) {
                    window.location.href = "{{ url('book/details') }}";
                } else {
                    alert('invalid credentials');
                }
            });
        })
    </script>
</body>

</html>
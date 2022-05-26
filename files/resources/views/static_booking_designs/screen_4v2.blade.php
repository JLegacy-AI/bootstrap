@extends('layouts.app')
@section('content')
<style>
    body {
        background: #f1f2f2 !important;
    }

    @media(max-width:767px) {
        body {
            background: #fff !important;
        }
    }

    @media(max-width:767px) and (orientation:portrait) {}

    @media(max-width:767px) and (orientation:landscape) {
        .screenmaxw-80 {
            max-width: 90%;
        }
    }
</style>
<main>
    <!-- Screen 1 Starts -->
    <section id="screen__1" class="">
        <div class="container m-auto p-0 screen__4container screen__4maincontainer screenmaxw-80">
            <div class="row m-0 p-0 screen__3_mbl_change nw_dskp_hd_mbl_shw">
                <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
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
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="row m-0 p-0 nw_dskp_hd_mbl_shw_flex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                            <div class="screen__4Circle">M</div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                            <h2 class="">Bonjour Matéo</h2>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                            <h2 class="screen__4heads nw_sc__4heads">Mon compte</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="nw_sc__4boxes active screen4_brdrbtmmbl" onclick="openPersonalInfoModal()">
                                        <img src="{{ asset('public/assets/images/A.png')}}" class="" alt="" />
                                        <p class="">Informations personnelles</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <a href="{{ url('reservations') }}" class="nw_sc__4boxes screen4_brdrbtmmbl">
                                        <img src="{{ asset('public/assets/images/B.png')}}" class="" alt="" />
                                        <p class="">Mes réservations</p>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="nw_sc__4boxes" onclick="openVehiclesListModal()">
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="nw_sc__4boxes screen4_brdrbtmmbl" onclick="openContactorModal()">
                                        <img src="{{ asset('public/assets/images/D.png')}}" class="" alt="" />
                                        <p class="">Nous contacter</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="nw_sc__4boxes">
                                        <img src="{{ asset('public/assets/images/E.png')}}" class="" alt="" />
                                        <p class="">Mes questions</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 nw_dskp_hd_mbl_shw">
                                    <div class="nw_sc__4boxes nw_sc__4boxesblack">
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
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 col-12 nw_sc__4_infobox">
                    <div class="row m-0 p-0 nw_dskp_hd_mbl_shw">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="screen__dsplyflexstart m-0">
                                <a href="{{ url('screen_4v2') }}" class="screen-btn-cross font-16" id="">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <h1 class="screen__4infoheading">Informations personnelles</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0 nw_sc__4_infoboxyellow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                            <div class="screen__4Circle">M</div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                            <h2 class="">Bonjour Matéo</h2>
                        </div>
                        <a href="{{ route('logout') }}" class="nw_sc__4_logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <p class="">Déconnexion</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                    <form class="" id="infoPersonnellesForm" name="inforPersonnellesForm">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0">
                                <h1 class="nw_sc__4_infoheading">Informations personnelles</h1>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3 nw_sc__nwlabel px-0">
                                <div class="form-group">
                                    <label for="">Gérer les informations personnelles de votre compte Parkme</label>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-12 px-md-3 px-0">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="firstname">Prénom</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="firstname" value="Matéo Dal maso" name="firstname" placeholder="Prénom*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="name">Nom</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="name" value="Dalmaso" name="name" placeholder="Nom*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-1">
                                        <div class="form-group">
                                            <label for="number">Numéro de téléphone</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="number" value="07 78 68 22 57" name="number" placeholder="Numéro de téléphone*" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4infobtndiv">
                                <a href="javascript:void(0);" class="nw_sc__4enregistrer" id="">Enregistrer</a>
                            </div>
                        </div>
                    </form>
                    <form class="" id="identifiantConnexionForm" name="identifiantConnexionForm">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0">
                                <h1 class="nw_sc__4_infoheading">Identifiant connexion</h1>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3 nw_sc__nwlabel px-0">
                                <div class="form-group">
                                    <label for="">Gérer les identifiants de connexions de votre compte Parkme</label>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-12 px-md-3 px-0">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-1">
                                        <div class="form-group">
                                            <label for="email">Adresse e-mail</label>
                                            <input type="email" class="form-control form-control-lg form-check-input" id="email" value="dalmasomateo@gmail.com" name="email" placeholder="Adresse e-mail*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="newpassword">Nouveau mot de passe</label>
                                            <input type="password" class="form-control form-control-lg form-check-input" id="newpassword" value="" name="newpassword" placeholder="Nouveau mot de passe*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="passwordconfirmation">Confirmation mot de passe</label>
                                            <input type="password" class="form-control form-control-lg form-check-input" id="passwordconfirmation" value="" name="passwordconfirmation" placeholder="Confirmation mot de passe*" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4infobtndiv">
                                <a href="javascript:void(0);" class="nw_sc__4enregistrer" id="">Enregistrer</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    var screen_width = screen.width;
    var screen_height = screen.height;
    $(window).resize(function() {
        screen_width = $(window).width();
        screen_height = $(window).height();
        if (screen_width <= 767) {
            if (screen_width > screen_height) {
                $("body").removeClass('screen_bodyclass_white');
                $(".navbar").attr('style', 'display: block;');
                $('.nw_sc__4_infobox').removeClass('nw_sc__4_infobox_mbl');
            }
        } else {
            $("body").removeClass('screen_bodyclass_white');
            $(".navbar").attr('style', 'display: block;');
            $('.nw_sc__4_infobox').removeClass('nw_sc__4_infobox_mbl');
        }
    });

    function openPersonalInfoModal() {
        if (screen_width <= 767) {
            if (screen_width < screen_height) {
                $("body").addClass('screen_bodyclass_white');
                $(".navbar").attr('style', 'display: none;');
                $('.nw_sc__4_infobox').addClass('nw_sc__4_infobox_mbl');
            }
        }
    }
</script>
@endsection
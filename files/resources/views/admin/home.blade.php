@extends('layouts.app')
@section('content')
<style>
    body {
        background: #fff !important;
    }

    @media(max-width:767px) {
        body {
            background: #fff !important;
        }
    }

    @media(max-width:767px) and (orientation:portrait) {
        .navbar-brand {
            visibility: hidden;
        }
    }

    @media(max-width:767px) and (orientation:landscape) {
        .screenmaxw-80 {
            max-width: 90%;
        }
    }

    @media (max-width: 600px) and (max-height: 600px) {

        /* #demo_timer,
        .navbar {
            display: none !important;
        } */

        .nw_sc__4_infobox_mbl {
            display: block !important;
            padding: 1em 1em 1em 1em;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1024;
            margin-top: 0;
            box-shadow: none;
        }

        .nw_dskp_hd_mbl_shw {
            display: block;
        }

        .nw_sc__4_infobox,
        .nw_sc__4_infoboxyellow {
            display: none;
        }

        .nw_sc__nwlabel {
            display: none;
        }
    }
</style>
<main>
    @if(Auth::user()->role_id == 1)
    <section id="screen__1" class="">
        <div class="container m-auto p-0 screen__4container screen__4maincontainer">
            <div class="row m-0 p-0 screen__3_mbl_change">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-0">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-4 px-md-3 px-0">
                            <div class="screen__3_headdiv m-0">
                                <h1 class="screen-heading">Admin Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                            <div class="screen__4Circle"><?= substr(Auth::user()->name, 0, 1) . substr(Auth::user()->lname, 0, 1); ?></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                            <h2 class="">{{ Auth::user()->name.' '.Auth::user()->lname }}</h2>
                            <p class="">{{ Auth::user()->email }}</p>
                            <p class="">{{ Auth::user()->phone }}</p>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0 pt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('users') }}" class="screen__4boxes screen4_brdrbtmmbl txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/A.png')}}" class="" alt="" />
                                        <p class="">Active Users</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('orders') }}" class="screen__4boxes screen4_brdrbtmmbl txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/B.png')}}" class="" alt="" />
                                        <p class="">All Reservations</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('support-tickets') }}" class="screen__4boxes screen4_brdrbtmmbl txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/D.png')}}" class="" alt="" />
                                        <p class="">Support Tickets</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0 pt-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('services-settings') }}" class="screen__4boxes txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/C.png')}}" class="" alt="" />
                                        <p class="">Services Settings</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('general-settings') }}" class="screen__4boxes txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/E.png')}}" class="" alt="" />
                                        <p class="">General Settings</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ url('admin/helpcenter') }}" class="screen__4boxes txtdeco_nn_blk">
                                        <img src="{{ asset('public/assets/images/E.png')}}" class="" alt="" />
                                        <p class="">Help Center</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0 pt-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{ route('logout') }}" class="screen__4boxes screen__4boxesblack txtdeco_nn_wht" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <p class="">Déconnexion</p>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
    </section>

    @else
    <!-- Screen 1 Starts -->
    <style>
        @media (max-width: 600px) and (max-height: 600px) {

            #demo_timer,
            .navbar {
                display: none !important;
            }
        }
    </style>
    <section id="screen__1" class="nw_sc__4_background">
        <input type="hidden" id="screen__infopersonall_inp" value="0" />
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
            <div class="row m-0 p-0" id="kkk">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12" id="kk">
                    <div class="row m-0 p-0 nw_dskp_hd_mbl_shw_flex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                            <div class="screen__4Circle"><?= substr(Auth::user()->name, 0, 1); ?></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                            <h2 class="">Bonjour {{ Auth::user()->name }}</h2>
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
                                    <a href="{{ url('help-center') }}" class="nw_sc__4boxes">
                                        <img src="{{ asset('public/assets/images/E.png')}}" class="" alt="" />
                                        <p class="">Mes questions</p>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 nw_dskp_hd_mbl_shw">
                                    <a href="{{ route('logout') }}" class="nw_sc__4boxes nw_sc__4boxesblack" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <p class="">Déconnexion</p>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
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
                                <a href="{{ url('home') }}" class="screen-btn-cross font-16" id="">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <h1 class="screen__4infoheading">Informations personnelles</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0 nw_sc__4_infoboxyellow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-3 px-md-3 px-0 screen__dsplyflexcenter">
                            <div class="screen__4Circle"><?= substr(Auth::user()->name, 0, 1); ?></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-9 px-md-3 px-0 screen__4infodiv">
                            <h2 class="">Bonjour {{ Auth::user()->name }}</h2>
                        </div>
                        <a href="{{ route('logout') }}" class="nw_sc__4_logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <p class="">Déconnexion</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                    <form class="" id="infoPersonnellesForm" name="infoPersonnellesForm">
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
                                            <label for="name">Prénom</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="name" value="{{ Auth::user()->name }}" name="name" placeholder="Prénom*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="lname">Nom</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="lname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Nom*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-1">
                                        <div class="form-group">
                                            <label for="phone">Numéro de téléphone</label>
                                            <input type="text" class="form-control form-control-lg form-check-input" id="phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Numéro de téléphone*" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4infobtndiv">
                                <button type="submit" class="nw_sc__4enregistrer">Enregistrer</button>
                                <div class="alert alert-success text-left mt-1" id="infoPersonnellesSuccess" style="display:none">
                                    <p>Information Personnelles updated successfuly.</p>
                                </div>
                                <div class="alert alert-danger text-left mt-1" id="infoPersonnellesFailed" style="display:none">
                                    <p>Error! cannot update information personnelles, please contact system administrator.</p>
                                </div>
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
                                            <input type="email" class="form-control form-control-lg form-check-input" id="email" value="{{ Auth::user()->email }}" name="email" placeholder="Adresse e-mail*" readonly required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="password">Nouveau mot de passe</label>
                                            <input type="password" class="form-control form-control-lg form-check-input" id="password" value="" name="password" placeholder="Nouveau mot de passe*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-1">
                                        <div class="form-group">
                                            <label for="confirm">Confirmation mot de passe</label>
                                            <input type="password" class="form-control form-control-lg form-check-input" id="confirm" value="" name="confirm" placeholder="Confirmation mot de passe*" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4infobtndiv">
                                <button type="submit" class="nw_sc__4enregistrer">Enregistrer</button>
                                <div class="alert alert-success text-left mt-1" id="identifiantConnexionSuccess" style="display:none">
                                    <p>Information Personnelles updated successfuly.</p>
                                </div>
                                <div class="alert alert-danger text-left mt-1" id="identifiantConnexionFailed" style="display:none">
                                    <p>Error! cannot update information personnelles, please contact system administrator.</p>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                <div class="row m-0" id="addedData">

                                    @if(isset($cars))
                                    @foreach($cars as $k=>$v)
                                    <div class="col-12 screen__4vlistdiv" id="{{ 'car_id_'.$v->id }}">
                                        <div class="screen__4Mdlrows row" onclick="openVehicleEditModal({{json_encode($v)}})">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-3 pr-0">
                                                <img src="{{ asset('public/assets/images/F.png')}}" class="screen__4vlist_img" alt="" />
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-7 col-7 pl-0">
                                                <h2 class="screen__4vlisthead">{{ $v->car_brand }} {{ $v->car_model }}</h2>
                                                <p class="screen__4vlistp">{{ $v->car_number }}</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-2 dsflex-justify-align-center">
                                                <a href="javascript:void(0);" class="screen3-detail-btn" id="">
                                                    <i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif


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
                                            <p class="screen__3Mdlhead"> <span id="car_brand">Peugeot</span> <span id="car_model">208</span> <span id="car_number">111 ABC 31</span>
                                            </p>
                                            <a href="javascript:void(0);" onclick="closeVehicleEditModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="removeVehicle()" class="screen__4delete" id="">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form class="w-100" id="editVehicleForm">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclebrand">Marque véhicule</label>
                                                <input type="hidden" name="user_id" value="{{\Auth::user()->id}}" />
                                                <input type="hidden" id="edit_id" name="id" value="0" />
                                                <input type="text" id="edit_car_brand" autocomplete="off" class="form-control form-control-lg form-check-input" value="Peugeot" name="car_brand" placeholder="Marque véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclemodel">Modèle véhicule</label>
                                                <input type="text" id="edit_car_model" autocomplete="off" class="form-control form-control-lg form-check-input" value="208" name="car_model" placeholder="Modèle véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="licenseplate">Plaque immatriculation</label>
                                                <input type="text" id="edit_car_number" autocomplete="off" class="form-control form-control-lg form-check-input" value="07 78 68 22 57" name="car_number" placeholder="Plaque immatriculation*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer" id="">Enregistrer</button>
                                            <div class="alert alert-success text-left" id="editFormSuccess" style="display:none">
                                                <p>Vechile added successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left" id="editFormFailed" style="display:none">
                                                <p>Error! cannot update vehicle, please contact system administrator.</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <form class="w-100" id="addVehicleForm">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclebrand">Marque véhicule</label>
                                                <input type="hidden" name="user_id" value="{{\Auth::user()->id}}" />
                                                <input type="text" class="form-control form-control-lg form-check-input" autocomplete="off" name="car_brand" placeholder="Marque véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="vehiclemodel">Modèle véhicule</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" autocomplete="off" name="car_model" placeholder="Modèle véhicule*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="licenseplate">Plaque immatriculation</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" autocomplete="off" name="car_number" placeholder="Plaque immatriculation*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Ajouter</button>
                                            <div class="alert alert-success text-left" id="addFormSuccess" style="display:none">
                                                <p>Véhicule ajoute avec succès.</p>
                                            </div>
                                            <div class="alert alert-danger text-left" id="addFormFailed" style="display:none">
                                                <p>Error! cannot update vehicle, please contact system administrator.</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                            <p class="screen__3Mdlhead">Nous contacter</p>
                                            <a href="javascript:void(0);" onclick="closeContactorModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0 screen__4contactordiv">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-md-3 screen__dsplyflexcenter mbx1em screen__pstrelv">
                                        <a href="tel:+0768288671" class="screen__4copybtns" id=""><input type="text" value="05 31 60 25 25" class="screen__4contactorinputs" id="screen__4contactnumber" readonly /></a><a href="javascript:void(0);" class="screen__4copybtnsicon" onclick="copyContact('screen__4contactnumber')" id=""></a>
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
    @endif
</main>
<script>
    var screen_width = screen.width;
    var screen_height = screen.height;
    $user_roleid = <?= Auth::user()->role_id; ?>;
    $(window).resize(function() {
        if ($user_roleid == 2) {
            screen_width = $(window).width();
            screen_height = $(window).height();
            if ($('#screen__infopersonall_inp').val() == '1') {
                if (screen_width <= 767) {
                    if (screen_width > screen_height) {
                        $("body").removeClass('screen_bodyclass_white');
                        $(".navbar").attr('style', 'display: block;');
                        $('.nw_sc__4_infobox').removeClass('nw_sc__4_infobox_mbl');
                    }
                    if (screen_width <= 600 && screen_height <= 600) {
                        $("body").addClass('screen_bodyclass_white');
                        $(".navbar").attr('style', 'display: none;');
                        $('.nw_sc__4_infobox').addClass('nw_sc__4_infobox_mbl');
                    }
                } else {
                    $("body").removeClass('screen_bodyclass_white');
                    $(".navbar").attr('style', 'display: block;');
                    $('.nw_sc__4_infobox').removeClass('nw_sc__4_infobox_mbl');
                }
            }
        }
    });

    function openPersonalInfoModal() {
        if (screen_width <= 767) {
            if (screen_width < screen_height) {
                $('#screen__infopersonall_inp').val('1');
                $("body").addClass('screen_bodyclass_white');
                $(".navbar").attr('style', 'display: none;');
                $('.nw_sc__4_infobox').addClass('nw_sc__4_infobox_mbl');
            }
        }
    }
    $('#infoPersonnellesForm').on('submit', function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "{{url('update-info-personnelles')}}",
            data: form,
            dataType: "json",
            success: function(data) {
                console.log('data');
                console.log(data);
                $('#infoPersonnellesSuccess').show();
                $('#infoPersonnellesFailed').hide();
                if (data['result']) {
                    $('#infoPersonnellesSuccess').show();
                    $('#infoPersonnellesFailed').hide();
                    $('#infoPersonnellesSuccess').html(data['errormsg']);
                    setTimeout(function() {
                        location.reload();
                    }, 1400);
                    setTimeout(function() {
                        $("#infoPersonnellesSuccess").hide('blind', {}, 500)
                    }, 1000);
                } else {
                    $('#infoPersonnellesFailed').show();
                    $('#infoPersonnellesSuccess').hide();
                    $('#infoPersonnellesFailed').html(data['errormsg']);
                    setTimeout(function() {
                        $("#infoPersonnellesFailed").hide('blind', {}, 500)
                    }, 5000);
                }
            },
            error: function() {
                $('#infoPersonnellesFailed').show();
                $('#infoPersonnellesSuccess').hide();
                $('#infoPersonnellesFailed').html(data['errormsg']);
                setTimeout(function() {
                    $("#infoPersonnellesFailed").hide('blind', {}, 500)
                }, 5000);
            }
        });
    });
    $('#identifiantConnexionForm').on('submit', function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        console.log(form);
        $.ajax({
            type: "POST",
            url: "{{url('update-identifiant-connexion')}}",
            data: form,
            dataType: "json",
            success: function(data) {
                if (data['result']) {
                    $('#identifiantConnexionSuccess').show();
                    $('#identifiantConnexionFailed').hide();
                    $('#identifiantConnexionSuccess').html(data['errormsg']);
                    $('input[name="password"]').val("");
                    $('input[name="confirm"]').val("");
                    setTimeout(function() {
                        $("#identifiantConnexionSuccess").hide('blind', {}, 500)
                    }, 5000);
                } else {
                    $('#identifiantConnexionFailed').show();
                    $('#identifiantConnexionSuccess').hide();
                    $('#identifiantConnexionFailed').html(data['errormsg']);
                    $('input[name="password"]').val("");
                    $('input[name="confirm"]').val("");
                    setTimeout(function() {
                        $("#identifiantConnexionFailed").hide('blind', {}, 500)
                    }, 5000);
                }
            },
            error: function() {
                $('#identifiantConnexionFailed').show();
                $('#identifiantConnexionSuccess').hide();
                $('#identifiantConnexionFailed').html(data['errormsg']);
                $('input[name="password"]').val("");
                $('input[name="confirm"]').val("");
                setTimeout(function() {
                    $("#identifiantConnexionFailed").hide('blind', {}, 500)
                }, 5000);
            }
        });
    });
    $('#addVehicleForm').on('submit', function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "{{url('post-add-vehicle')}}",
            data: form,
            dataType: "json",
            success: function(data) {
                //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
                // do what ever you want with the server response
                $('#addVehicleForm').trigger("reset");
                $('#addFormSuccess').show();
                $('#addFormFailed').hide();
                $('#addedData').html($('#addedData').html() + '<div class="col-12 screen__4vlistdiv" id="car_id_' + data.id + '"><div class="screen__4Mdlrows row" onclick="openVehicleEditModal(' + JSON.stringify(data) + ')"><div class="col-lg-2 col-md-2 col-sm-3 col-3 pr-0"><img src="{{ asset('public/assets/images/F.png ')}}" class="screen__4vlist_img" alt="" /></div><div class="col-lg-9 col-md-9 col-sm-7 col-7 pl-0"><h2 class="screen__4vlisthead">' + data.car_brand + ' ' + data.car_model + '</h2><p class="screen__4vlistp">' + data.car_number + '</p></div><div class="col-lg-1 col-md-1 col-sm-2 col-2 dsflex-justify-align-center"><a href="javascript:void(0);" class="screen3-detail-btn" id=""><i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i></a></div></div></div>');
            },
            error: function() {
                $('#addFormSuccess').hide();
                $('#addFormFailed').show();
            }
        });
    })
    $('#editVehicleForm').on('submit', function(e) {
        e.preventDefault();
        console.log('post_ edit')
        let form = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "{{url('post-edit-vehicle')}}",
            data: form,
            dataType: "json",
            success: function(data) {
                //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
                // do what ever you want with the server response
                $('#edit_car_brand').val(data.car_brand);
                $('#edit_car_model').val(data.car_model);
                $('#edit_car_number').val(data.car_number);
                $('#car_brand').html(data.car_brand);
                $('#car_model').html(data.car_model);
                $('#car_number').html(data.car_number);
                $('#editFormSuccess').show();
                $('#editFormFailed').hide();
                $('#car_id_' + data.id + ' .screen__4vlisthead').html(data.car_brand + " " + data.car_model);
                $('#car_id_' + data.id + ' .screen__4vlistp').html(data.car_number);
            },
            error: function() {
                $('#editFormSuccess').hide();
                $('#editFormFailed').show();
            }
        });
    })

    function openVehiclesListModal() {
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
    }

    function closeVehiclesListModal() {
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
    }

    function removeVehicle() {
        $.ajax({
            type: "POST",
            url: "{{url('delete-vehicle')}}",
            data: {
                id: $('#edit_id').val()
            },
            dataType: "json",
            success: function(data) {
                //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
                // do what ever you want with the server response
                closeVehicleEditModal();
                $('#car_id_' + $('#edit_id').val()).fadeOut();
            },
            error: function() {
                // $('#editFormSuccess').hide();
                // $('#editFormFailed').show();
            }
        });
    }

    function openVehicleEditModal(data) {
        $('#edit_id').val(data.id);
        $('#edit_car_brand').val(data.car_brand);
        $('#edit_car_model').val(data.car_model);
        $('#edit_car_number').val(data.car_number);
        $('#car_brand').html(data.car_brand);
        $('#car_model').html(data.car_model);
        $('#car_number').html(data.car_number);
        $(".screen__4Mdl_vehiclesedit").attr('style', 'visibility: visible;');
        $(".screen__4vehicleedit_custommodal").attr('style', 'transform: translateY(0%);');
        $(".footer-buttons-div").attr('style', 'display: none !important');
        // Vehicles List modal hide
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
    }

    function closeVehicleEditModal() {
        $(".screen__4Mdl_vehiclesedit").attr('style', 'visibility: hidden;');
        $(".screen__4vehicleedit_custommodal").attr('style', 'transform: translateY(100%);');
        // Vehicles List Modal show
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
    }

    function openVehicleAddModal() {
        $(".screen__4Mdl_vehiclesadd").attr('style', 'visibility: visible;');
        $(".screen__4vehicleadd_custommodal").attr('style', 'transform: translateY(0%);');
        $(".footer-buttons-div").attr('style', 'display: none !important');
        // Vehicles List modal hide
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
    }

    function closeVehicleAddModal() {
        $(".screen__4Mdl_vehiclesadd").attr('style', 'visibility: hidden;');
        $(".screen__4vehicleadd_custommodal").attr('style', 'transform: translateY(100%);');
        // Vehicles List Modal show
        $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
        $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
    }

    function openContactorModal() {
        $(".screen__4Mdl_contactor").attr('style', 'visibility: visible;');
        $(".screen__4contactor_custommodal").attr('style', 'transform: translateY(0%);');
    }

    function closeContactorModal() {
        $(".screen__4Mdl_contactor").attr('style', 'visibility: hidden;');
        $(".screen__4contactor_custommodal").attr('style', 'transform: translateY(100%);');
    }
    $('input#screen__4contactnumber').attr('readonly', true);
    $('input#screen__4contactemail').attr('readonly', true);

    function copyContact(value) {
        var copyText = document.getElementById(value);
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>
@endsection
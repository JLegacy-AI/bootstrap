@extends('layouts.app')
@section('content')
<style>
.navbar{
    background:#000 !important;
}
@media(max-width:767px) and (orientation:portrait) {
        .navbar-brand{
            visibility: hidden;
        }
        .navbar{
        background:transparent !important;
    }
    }
@media(max-width:767px){
    .hompage_bg {
        background: #fff !important;
    }
}
</style>
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
                                        <h1 class="screen01-heading">Compte222</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="screen01-p mb-4">Gérer votre compte, vos véhicules</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><a href="{{ url('login') }}" class="screen01-btn1 mb-3" onclick="openConnexionModal()" id="">Connexion</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><a href="{{ url('register') }}" class="screen01-btn2" onclick="openCreerCompteModal()" id="">Créer
                                            un compte</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
    </main>
@endsection
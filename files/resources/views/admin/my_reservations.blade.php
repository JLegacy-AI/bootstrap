@extends('layouts.app')
@section('content')
<style>
    .navbar {
        background: #000 !important;
    }

    @media(max-width:767px) {
        .hompage_bg {
            background: #fff !important;
        }
    }
    @media(max-width:767px) and (orientation:portrait) {
        .navbar-brand{
            visibility: hidden;
        }
        .navbar {
            background: transparent !important;
        }
    }
</style>
<main>
    <!-- Screen 1 Starts -->
    <section id="screen_01" class="">
        <div class="container screenmaxw-100 screen__1container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 screen01-mbl-middle">
                    <div class="row screen01-header-pd">
                        <div class="col-sm-6 col-12 text-center screen01-pd-right">
                            <img src="{{ asset('public/assets/images/illustration-parkme.png')}}" alt="" class="screen01-img">
                        </div>
                        <div class="col-sm-6 col-12 screen01-pd-left">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="screen01-heading">Mes réservations</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="screen01-p mb-4">Connectez-vous ou ajouter votre réservation</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><a href="{{ url('login') }}" onclick="openConnexionModal()" class="screen01-btn1 mb-3" id="">Connexion</a></div>
                            </div>
                            <div class="row">
                                <div class="col-12"><a href="javascript:void(0);" onclick="openAjouterModal()" class="screen01-btn2" id="">+
                                        Ajouter
                                        numéro réservation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container screenmaxw-100">
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
                                                    <input type="number" class="form-control form-control-lg form-check-input" id="addreservation_number" name="number" placeholder="Numéro de réservation*" required />
                                                    <p id="error" style="color:red"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="screen4-tabs row">
                                            <div class="col-12 screen4-tabs-div">
                                                <div class="form-group">
                                                    <label for="email">Adresse e-mail</label>
                                                    <input type="email" class="form-control form-control-lg form-check-input" id="addreservation_email" name="phone" placeholder="Adresse e-mail*" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 screen03-modalbtndiv text-center">
                                        <a href="javascript:void(0);" onclick="addreservation_function()" class="screen-btn" id="">Ajouter</a>
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
<script>
    function addreservation_function(){
        $.ajax({
        type: "GET",
        url: "{{url('add-booking-by-id')}}/" + $('#addreservation_number').val() + '/' + $('#addreservation_email').val(),
        success: function(data) {
            var obj = jQuery.parseJSON(data); 
            if(obj.error == true){
                $('#error').html(obj.message);
                // alert(obj.message);
            }else{
                // alert('added to the list');
                location.href = "{{ url('reservations') }}";
            }
        },
        error: function(data) {
            alert('Unable to add this order - Please contact system administrator');
        }
        });
    }

    // Screen_1 Mes Reservation
    function openAjouterModal() {
        $(".screen__ajouter_main").attr('style', 'visibility: visible;');
        $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(0%);');
    }

    function closeAjouterModal() {
        $(".screen__ajouter_main").attr('style', 'visibility: hidden;');
        $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(100%);');
    }
</script>
@endsection
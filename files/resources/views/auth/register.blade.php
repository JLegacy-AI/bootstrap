@extends('layouts.app')
@section('content')
<style>
.navbar{
    display:none;
}
#demo_timer{
    display:none;
}
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <div class="container screen__creercompte_main d-block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Créer un compte</h1>
                            <div class="screen__crossicon">
                                <a onclick="window.history.back()" style="cursor:pointer" class="screen-btn-cross" id="">
                                    <i class="fa fa-times screen-back-cross" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Créer un compte</h1>
                            </div>
                            <form method="POST" id="myForm" action="{{ route('register') }}">
                            @csrf

                            <div class="screen02-body-mbl" id="screen__2_1by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Comment vous
                                                    appelez-vous ?</p>
                                                <a  onclick="window.history.back()" style="cursor:pointer" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(1/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="name">Nom *</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('lname') is-invalid @enderror" id="lname" name="lname" placeholder="Nom*"  value="{{ session()->get('lname')??old('lname') }}" autocomplete="lname" autofocus />
                                                        @error('lname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="firstname">Prénom *</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('name') is-invalid @enderror" id="name" name="name" placeholder="Prénom*"  value="{{ session()->get('name')??old('name') }}" autocomplete="name" />
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="continue_screen2_1by3">Continuer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="screen02-body-mbl" id="screen__2_2by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Quel est votre véhicule
                                                    ?</p>
                                                <a href="javascript:void(0);" onclick="backCreerCompteModal('1')" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(2/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="marque">Marque *</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('car_brand') is-invalid @enderror" id="car_brand" name="car_brand" placeholder="Marque*" value="{{ session()->get('car_brand')??old('car_brand') }}" autocomplete="car_brand" />
                                                        @error('car_brand')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="modele">Modèle *</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('car_model') is-invalid @enderror" id="car_model" name="car_model" placeholder="Modèle*"   value="{{ session()->get('car_model')??old('car_model') }}" autocomplete="car_model" />
                                                        @error('car_model')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="licenseplate">Plaque immatriculation</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input" id="car_number" name="car_number" placeholder="Plaque immatriculation (facultatif)" value="{{ session()->get('car_number')??old('car_number') }}" autocomplete="car_number" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" class="screen-btn" id="continue_screen2_2by3">Continuer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="screen02-body-mbl" id="screen__2_3by3">
                                <div class="pd-screen screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Quel seront vos
                                                    identifiants ?</p>
                                                <a href="javascript:void(0);" onclick="backCreerCompteModal('2')" class="screen-btn-back screen__backicon_mbls" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="screen1-fontwt-600 screenfont-size-20 screen__2_num">(3/3)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="phonenumber">Numéro de téléphone *</label>
                                                        <input type="text" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Numéro de téléphone*"   value="{{ session()->get('phone')??old('phone') }}" autocomplete="phone" />
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail *</label>
                                                        <input type="email" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Adresse e-mail*"  value="{{ session()->get('email')??old('email') }}" autocomplete="email" />
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="password">Mot de passe *</label>
                                                        <input type="password" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mot de passe*"  autocomplete="new-password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="password">Confirm mot de passe *</label>
                                                        <input type="password" oninput="$(this).removeClass('alert-danger')" class="form-control form-control-lg form-check-input" id="password-confirm" placeholder="Mot de passe*" name="password_confirmation" autocomplete="new-password" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="alert alert-danger" style="display:none" id="email-error">
                                                * L'adresse e-mail est déjà utilisée.
                                            </p>
                                            <p class="alert alert-danger" style="display:none" id="password-error">
                                                * Veuillez vous assurer que vos mots de passe correspondent.
                                            </p>
                                            <p class="alert alert-danger" style="display:none" id="length-error">
                                             * Le mot de passe doit comporter au moins 8 caractères.
                                            </p>

                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <button type="button" class="screen-btn" id="submit-btn">Créer compte</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
    </main>
    <script>
    $("#screen__2_1by3").attr('style', 'display: block !important');
    $("#screen__2_2by3").attr('style', 'display: none !important');
    $("#screen__2_3by3").attr('style', 'display: none !important');
    $("#continue_screen2_1by3").click(function () {
        if($('#lname').val() !== '' && $('#name').val() !== ''){
            $("#screen__2_1by3").attr('style', 'display: none !important');
            $("#screen__2_2by3").attr('style', 'display: block !important');
            $("#screen__2_3by3").attr('style', 'display: none !important');
        }else{
            if($('#lname').val() == ''){
                $('#lname').addClass('alert-danger'); 
            }else{
                $('#name').addClass('alert-danger'); 
            }
        }
    });
    $("#continue_screen2_2by3").click(function () {
        if($('#car_brand').val() !== '' && $('#car_model').val() !== ''){
            $("#screen__2_1by3").attr('style', 'display: none !important');
            $("#screen__2_2by3").attr('style', 'display: none !important');
            $("#screen__2_3by3").attr('style', 'display: block !important');
        }else{
            if($('#car_brand').val() == ''){
                $('#car_brand').addClass('alert-danger'); 
            }else{
                $('#car_model').addClass('alert-danger'); 
            }
        }
    });
    function backCreerCompteModal(id) {
        if (id == '1') {
            $("#screen__2_1by3").attr('style', 'display: block !important');
            $("#screen__2_2by3").attr('style', 'display: none !important');
            $("#screen__2_3by3").attr('style', 'display: none !important');
        }
        if (id == '2') {
            $("#screen__2_1by3").attr('style', 'display: none !important');
            $("#screen__2_2by3").attr('style', 'display: block !important');
            $("#screen__2_3by3").attr('style', 'display: none !important');
        }
    }
    $('#submit-btn').on('click',function(e){
        if($('#phone').val() !== '' && $('#email').val() !== '' && $('#password').val() !== '' && $('#password-confirm').val() !== ''){
            if($('#password').val() !== $('#password-confirm').val()){
                $('#password-confirm').addClass('alert-danger'); 
                $('#password-error').show(); 
            }else{
                if($('#password').val().length < 8){
                    $('#length-error').show();
                }else{
                    $('#length-error').hide();
                    $('#password-error').hide(); 
                    $.ajax({
                        type: "GET",
                        url: "{{url('check-if-email-exists')}}/"+$('#email').val(),
                        success: function(data) {
                            //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
                            // do what ever you want with the server response
                            data = JSON.parse(data);
                            if(data.exists){
                                $('#email').addClass('alert-danger'); 
                                $('#email-error').show(); 
                            }else{
                                $('#email-error').hide(); 
                                $('#length-error').hide();
                                $('#myForm').submit();
                            }
                        },
                        error: function() {
                            console.log('error checking email-address');
                        }
                    });
                }
            }
        }else{
            $('#password-error').hide(); 
            $('#email-error').hide(); 
            if($('#phone').val() == ''){
                $('#phone').addClass('alert-danger'); 
            }else if($('#email').val() == ''){
                $('#email').addClass('alert-danger'); 
            }else if($('#password').val() == ''){
                $('#password').addClass('alert-danger'); 
            }else{
                $('#password-confirm').addClass('alert-danger'); 
            }
        }
    })

    @if(isset($_REQUEST['change-email']))
    $("#continue_screen2_2by3").click();
    @endif
    
    </script>
@endsection
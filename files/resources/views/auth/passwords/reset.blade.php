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
        <section id="screen_01" class="">
            <div class="container screen__resetpass_main d-block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Nouveau mot de passe</h1>
                            <div class="screen__crossicon">
                                <a href="{{ url('') }}" onclick="closeResetPassModal()" class="screen-btn-cross" id="">
                                    <i class="fa fa-arrow-left screen-yellow-back-arrow" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Nouveau mot de passe</h1>
                            </div>
                            <div class="screen02-body-mbl">
                                <div class="pd-screen screen1page-new m-0">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-pass-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Réinitialiser mot de passe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Adresse e-mail*"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="newpassword">Mot de passe <span class="screen_min8_span">Minimum 8 caractères</span></label>
                                                        <input type="password" class="form-control form-control-lg form-check-input  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mot de passe*"  required autocomplete="new-password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="confirmnewpassword">Confirmer mot de passe</label>
                                                        <input type="password" class="form-control form-control-lg form-check-input" id="password-confirm" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer mot de passe*" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen-pass-btndiv text-center">
                                            <button type="submit" name="submit" id="submit" class="screen-btn">Réinitialliser mot de passe</button>
                                        </div>
                                    </div>
                                    </form>
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
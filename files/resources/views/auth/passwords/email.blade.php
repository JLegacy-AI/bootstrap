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
            <div class="container screen__forgotpass_main d-block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Mot de passe oublié</h1>
                            <div class="screen__crossicon">
                                <a href="{{ url('') }}" onclick="closeForgotPassModal()" class="screen-btn-cross" id="">
                                    <i class="fa fa-arrow-left screen-yellow-back-arrow" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Mot de passe oublié</h1>
                            </div>
                            <div class="screen02-body-mbl">
                                <div class="pd-screen screen1page-new m-0">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-pass-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Réinitialiser mot de
                                                    passe</p>
                                                <a href="{{ url('') }}" onclick="closeForgotPassModal()" class="screen-btn-back screen__backicon_mbl" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('password.email') }}" onsubmit="console.log('submit');document.getElementById('submit').disabled=true">
                                    @csrf
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <p class="screen_frgt_p">Saisissez l'e-mail associée à votre compte
                                                        et nous vous
                                                        enverrons un e-mail contenant les instructions pour
                                                        réinitialiser votre mot de passe.</p>
                                                </div>
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Adresse e-mail*" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen-pass-btndiv text-center">
                                            <button type="submit"  class="screen-btn" name="submit" id="submit">Envoyer les
                                                instructions</a>
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
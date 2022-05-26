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
        <div class="container screen__connexion_main d-block">
        <form method="POST" action="{{ route('login') }}">
                    @csrf    
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                    <div class="screen__connx_yellow">
                        <h1 class="">Connexion</h1>
                        <div class="screen__crossicon">
                            <a  onclick="window.history.back()" style="cursor:pointer" class="screen-btn-cross" id="">
                                <i class="fa fa-times screen-back-cross" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="screen__connx_white">
                        <div class="screen02-head-mbl">
                            <h1 class="">Connexion</h1>
                        </div>
                        <div class="screen02-body-mbl">
                            <div class="pd-screen screen1page-new m-0">
                                <div class="row mb-screen-head">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen1-fontwt-600 screenfont-size-20">Connectez-vous</p>
                                            <a  onclick="window.history.back()" style="cursor:pointer" class="screen-btn-back screen__backicon_mbl" id="">
                                                <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="">
                                    <div class="col-12 screen4-info-div">
                                        <div class="screen4-tabs row">
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
                                        <div class="screen4-tabs row">
                                            <div class="col-12 screen4-tabs-div">
                                                <div class="form-group">
                                                    <label for="password">Mot de passe</label>
                                                    <input type="password" class="form-control form-control-lg form-check-input  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mot de passe*" required  autocomplete="current-password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="screen4-tabs row">
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
                                        <button type="submit" class="screen-btn" id="submit" name="submit">Connexion</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
        </div>
    </section>
    <!-- Screen 1 Ends -->
</main>
@endsection
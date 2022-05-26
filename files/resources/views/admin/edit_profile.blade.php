@extends('layouts.app')
@section('content')
<style>
body{
    background:#fff !important;
}
@media(max-width:767px) and (orientation:portrait) {

.navbar,
.footer-buttons-div {
    display: none !important;
}
}

@media(max-width:767px) and (orientation:landscape) {

#demo_timer,
.new_navbar_desktop {
    display: flex !important;
}

.new_navbar_mobile {
    display: none !important;
}

.navbar {
    background: #000 !important;
}
}
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <!-- Personal Information Modal -->
            <div class="container m-auto p-0 screen__4container screen__4infocontainer d-block">
                <div class="row m-0 p-0">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 p-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                <div class="screen__dsplyflexstart m-0">
                                    <a href="{{ url('home') }}" onclick="closePersonalInfoModal()" class="screen-btn-cross" id="">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </a>
                                    <h1 class="screen__4infoheading">Informations personnelles</h1>
                                </div>
                            </div>
                        </div>
                        
            <form method="POST" action="{{ url('post-profile') }}">
                        @csrf    
                        <div class="row m-0 p-0 screen__4infoformrow">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="name" value="{{ Auth::user()->name }}" name="name" placeholder="Prénom*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="lname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Nom*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="number">Numéro de téléphone</label>
                                    <input type="text" class="form-control form-control-lg form-check-input" id="phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Numéro de téléphone*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="email" class="form-control form-control-lg form-check-input" id="email" value="{{ Auth::user()->email }}" name="email" placeholder="Adresse e-mail*" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="newpassword">Nouveau mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-check-input" id="password" value="" name="password" placeholder="Nouveau mot de passe*" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                <div class="form-group">
                                    <label for="passwordconfirmation">Confirmation mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-check-input" id="confirm" value="" name="confirm" placeholder="Confirmation mot de passe*" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv">
                                <button type="submit" class="screen__4enregistrer" name="submit">Enregistrer</button>
                            </div>
                        </div>
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                                <ul style="list-style:none">
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <ul style="list-style:none">
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
            </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
    </main>
@endsection
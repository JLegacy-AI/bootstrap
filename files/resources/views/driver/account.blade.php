@extends('driver.app')
@section('content')
<main>
    <!-- Screen 1 Starts -->
    <section id="screen_1" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 driver__acountDiv1">
                    <div class="driver__imgdiv">
                        <div class="driver__imgsquare"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 driver__acountDiv2">
                    <h2>{{ Auth::user()->name}}</h2>
                    <h3>{{ Auth::user()->email}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 driver__accountDiv3">
                    <a href="#" class="driver__account_a">
                        <h2>Planning</h2>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="driver__account_a">
                        <h2>Informations personnelles</h2>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="driver__account_a">
                        <h2>Appeler l’assistance</h2>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('logout') }}" class="driver__account_disconn" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <h2>Déconnexion</h2>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Screen 1 Ends -->
</main>
@endsection
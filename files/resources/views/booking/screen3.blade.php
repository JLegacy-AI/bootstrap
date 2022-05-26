@include('layouts.yellow_header')
<style>
    #demo_timer {
        display: none !important;
    }
</style>
<!-- Screen 3 Starts -->
<section id="screen_3" class="screenbg-grey screens-div">
    <div class="container m-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-1">
                <div class="row m-0 screen-heading-pd">
                    <div class="col-sm-12 col-12 px-0 pl-sm-0">
                        <h1 class="screen-heading">Paiement</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-0">
                <div class="row m-0 screen-body-pd">
                    <div class="col-sm-12 col-12 px-0 pl-sm-0">
                        <div class="pd-screen screen1page-new m-0">
                            <div class="row mb-screen3-head">
                                <div class="col-sm-12 col-12" id="">

                                    <div class="screen-header-main justify-content-end">
                                        @if(\Auth::user())
                                            @if (session('error'))
                                                    <p class="screen1-fontwt-600 w-100 text-center text-danger">Carte incorrect</p>
                                            @endif
                                        @else
                                            @if (session('error'))
                                                <p class="screen1-fontwt-600 w-100 text-center text-danger">Carte incorrect</p>
                                            @else
                                                <p class="screen1-fontwt-600">Déjà un compte ? <a onclick="openConnectezModal()" style="color:#ffd520; cursor:pointer;">Connectez-vous</a></p>
                                            @endif
                                        @endif
                                        <a href="{{ url('book') }}" class="screen-btn-back">
                                            <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="">
                                <div class="col-12 screen3-info-div">
                                    <a class="screen3-detail-btn" id="btn-screen4" style="cursor:pointer">
                                        <div class="screen3-tabs row">
                                            <div class="col-3 screen3-tabs-div">
                                                <p class="screen3-p-heads">CONTACT</p>
                                            </div>
                                            <div class="col-8 screen3-tabs-div">
                                                <p class="screen3-p-details"><span id='contact_name'>{{ \Auth::user()->name?? session()->get('checkout_name')??'NOM' }}</span></p>
                                                <p class="screen3-p-details"><span id='contact_email'>{{ \Auth::user()->email?? session()->get('checkout_email')??'MAIL' }}</span></p>
                                                <p class="screen3-p-details"><span id='contact_telephone'>{{ \Auth::user()->phone?? session()->get('checkout_phone')??'NUMÉRO DE TÉLÉPHONE' }}</span></p>
                                            </div>
                                            <div class="col-1 screen3-tabs-div dsflex-justify-align-center">
                                                <i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="screen3-detail-btn" id="btn-screen5" style="cursor:pointer">
                                        <div class="screen3-tabs row">
                                            <div class="col-3 screen3-tabs-div">
                                                <p class="screen3-p-heads">VÉHICULE</p>
                                            </div>
                                            <div class="col-8 screen3-tabs-div">
                                                <p class="screen3-p-details"><span id='vehicle_brand'>{{ $myvechiles[0]->car_brand?? session()->get('checkout_vehicle')?session()->get('checkout_vehicle').' '.session()->get('checkout_model'):'MARQUE VÉHICULE' }}</span> &nbsp; <span id='vehicle_model'>{{ $myvechiles[0]->car_model??'' }}</span></p>
                                                <p class="screen3-p-details"><span id='vehicle_number'>{{ $myvechiles[0]->car_number?? session()->get('checkout_number')??'PLAQUE IMMATRICULATION' }}</span></p>
                                            </div>
                                            <div class="col-1 screen3-tabs-div dsflex-justify-align-center">
                                                <i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="screen3-detail-btn" id="btn-screen6" style="cursor:pointer">
                                        <div class="screen3-tabs row">
                                            <div class="col-3 screen3-tabs-div">
                                                <p class="screen3-p-heads @if (session('error')) text-danger @endif">CARTE BANCAIRE</p>
                                            </div>
                                            <div class="col-8 screen3-tabs-div">
                                                <p class="screen3-p-details @if (session('error')) text-danger @endif"><span id='payment_cardname'>{{  session()->get('checkout_cardholder')??'NOM SUR LA CARTE' }}</span></p>
                                                <p class="screen3-p-details @if (session('error')) text-danger @endif"><span id='payment_cardnumber'>{{  session()->get('checkout_cardnumber')??'NUMÉRO SUR LA CARTE' }}</span></p>
                                                <p class="screen3-p-details @if (session('error')) text-danger @endif"><span id='payment_cardexpiry'>{{  session()->get('checkout_cardexpirymonth')?session()->get('checkout_cardexpirymonth').'/'.session()->get('checkout_cardexpiryyear') :'DATE EXPIRATION' }}</span></p>
                                                <p class="screen3-p-details @if (session('error')) text-danger @endif"><span id='payment_cardcvc'>{{  session()->get('checkout_cardsecurity')??'CVC' }}</span></p>
                                            </div>
                                            <div class="col-1 screen3-tabs-div dsflex-justify-align-center">
                                                <i class="fa fa-chevron-right screen3-go-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="alert alert-danger w-100 m-3" style="display:none" role="alert" id="submitFormError">

                                    Please fill all the required details for contact, vehicle details & payment Method to continue..

                                </div>

                                <div class="col-12 screens-btndiv text-center">
                                    <button class="screen3-btn w-100" id='btn-screen7' type="button" style="cursor:pointer; position: relative;">Payer (<span class="total-price" style="color:#fff !important;">{{ session()->get('services_charges')+session()->get('parking_charges') }} €</span>)<img src="{{ asset('public/assets/gif/payment-loader-3.gif') }}" id='btn-screen7-loader' class="paymentLoader" style="display: none;"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Screen 3 Ends -->
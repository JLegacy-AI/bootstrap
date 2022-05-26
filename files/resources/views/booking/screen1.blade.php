@include('layouts.yellow_header')
<style>
    #demo_timer{
        display: none !important;
    }
    @media(max-width:767px) and (orientation:portrait) {

        .new-navbar .newmenu_navbars,
        .new-navbar .newmenu_navbars:hover,
        .new-navbar .newmenu_navbars:focus {
            color: #fff;
        }

        .new-navbar .newmenu_navbars span {
            -webkit-text-stroke: 1px #000;
        }
    }
</style>
<!-- Screen 1 Starts -->
<section id="screen_1" class="screenbg-grey screens-div">
    <div class="container m-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-1 col-12 px-md-3 px-1">
                <div class="row m-0 screen-heading-pd">
                    <div class="col-sm-12 col-12 px-0 pl-sm-0">
                        <h1 class="screen-heading">Votre réservation</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-1 col-12 px-md-3 px-0">
                <div class="row m-0 screen-body-pd">
                    <div class="col-sm-12 col-12 px-0 pl-sm-0">
                        <div class="pd-screen screen1page-new m-0">
                            <div class="row mb-screen-head">
                                <div class="col-sm-12 col-12" id="">
                                    <div class="screen-header-main">
                                        <p class="screen1-fontwt-600">Ce qui est inclus..</p>
                                        <a href="{{ url('') }}" class="screen-btn-back">
                                            <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="">
                                <div class="col-12">
                                    <div class="screen1-tabs">
                                        <div class="screen1-divtabs mb-1">
                                            <div class="screen1-pricetabs">
                                                <p>Parkme <span class="screen1-price-span">(<span class="parkingtotalcharged"><?= session()->get('parking_charges') ?? '0.00' ?></span>€)</span></p>
                                            </div>
                                            <div class="screen-iconsdiv">
                                                <img src="{{ asset('public/assets/images/parkme_black.png')}}" class="screen1-img screen1-img-dsk" alt="parking aeroport toulouse" />
                                                <img src="{{ asset('public/assets/images/parkme_black.png')}}" class="screen1-img screen1-img-mbl" alt="parking aeroport toulouse" />
                                            </div>
                                        </div>
                                        <div class="screen1-divtabs mb-1">
                                            <div class="screen1-pricetabs">
                                                <p>Navette <span class="screen1-price-span">(0€)</span></p>
                                            </div>
                                            <div class="screen-iconsdiv">
                                                <img src="{{ asset('public/assets/images/navettenew.png')}}" class="screen1-img screen1-img-dsk" alt="parking aeroport toulouse" />
                                                <img src="{{ asset('public/assets/images/navettenew.png')}}" class="screen1-img screen1-img-mbl" alt="parking aeroport toulouse" />
                                            </div>
                                        </div>
                                        <div class="screen1-overlay screen1-divtabs mb-1" id="btn-screen2" style="cursor:pointer">
                                            <div class="screen1-pricetabs">
                                                <p>Lavage (<span class="lavage_total"><?= session()->get('services_charges') ?  session()->get('services_charges').'€':'?' ?></span>)</p>
                                            </div>
                                            <div class="screen-iconsdiv">
                                                <img src="{{ asset('public/assets/images/selectservice.png')}}" class="screen1-img screen1-img-dsk" alt="parking aeroport toulouse" />
                                                <img src="{{ asset('public/assets/images/selectservice.png')}}" class="screen1-img screen1-img-mbl" alt="parking aeroport toulouse" />
                                            </div>
                                            <div class="screen1-icon {{ session()->get('service_type')?'d-none':'' }}" id="addServiceBtn">
                                                <a class="screen1-icon-back">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="screen1-icon_edit  {{ session()->get('service_type')?'':'d-none' }}" id="addServiceBtn2">
                                                <a class="screen1-icon-back">
                                                    <img src="{{ asset('public/assets/images/edit_pencil.png') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 text-center">
                                    <a href="{{ url('book/details') }}" class="screen-btn" style="cursor:pointer;">Continuer vers
                                        paiement</a>
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
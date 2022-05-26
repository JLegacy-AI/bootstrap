@include('layouts.yellow_header')
<!-- Screen 4 Starts -->
<section id="screen_4" class="screenbg-grey screens-div">
    <div class="container m-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-1 col-12 px-md-3 px-1">
                <div class="row m-0 screen-heading-pd">
                    <div class="col-sm-12 col-12 px-0 pl-sm-0">
                        <h1 class="screen-heading">Paiement</h1>
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
                                        <p class="screen1-fontwt-600 screenfont-size-20">Contact</p>
                                        <a href="javascript:void(0);" class="screen-btn-back" id="page4Prev-btn">
                                            <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12 screen7-p-mbl" id="">
                                    <div class="screen-header-main text-center">
                                        <p class="screen1-fontwt-600">Vous recevrez un e-mail de votre réservation après le paiement</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="">
                                <div class="col-12 screen4-info-div">
                                    <div class="screen4-tabs row">
                                        <div class="col-12 screen4-tabs-div">
                                            <div class="form-group">
                                                <label for="name">Nom*</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="name" name="name" aria-describedby="nameError" placeholder="Nom" value="{{ \Auth::user()->name?? session()->get('checkout_name')??'' }}" />
                                                <label id="nameError" style="display: none; color: #fb0000; font-size: 12px; text-transform: capitalize; letter-spacing: 1px;">Champ obligatoire*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="screen4-tabs row">
                                        <div class="col-12 screen4-tabs-div">
                                            <div class="form-group">
                                                <label for="telephoneNumber">Numéro téléphone*</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" id="telephoneNumber" name="phone" aria-describedby="telephoneNumberError" placeholder="Numéro téléphone" value="{{ \Auth::user()->phone?? session()->get('checkout_phone')??'' }}" />
                                                <label id="telephoneError" style="display: none; color: #fb0000; font-size: 12px; text-transform: capitalize; letter-spacing: 1px;">Champ obligatoire*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="screen4-tabs row">
                                        <div class="col-12 screen4-tabs-div">
                                            <div class="form-group">
                                                <label for="_email">Adresse e-mail*</label>
                                                <input type="email" class="form-control form-control-lg form-check-input" id="_email" name="email" aria-describedby="emailError" placeholder="Adresse e-mail" value="{{ \Auth::user()->email?? session()->get('checkout_email')??'' }}" />
                                                <label id="emailError" style="display: none; color: #fb0000; font-size: 12px; text-transform: capitalize; letter-spacing: 1px;">Champ obligatoire*</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 screens-btndiv text-center">
                                    <a class="screen-btn" id="btn-screen3_1">Confirmer contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Screen 4 Ends -->
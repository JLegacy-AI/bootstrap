@include('layouts.yellow_header')
        <!-- Screen 6 Starts -->
        <section id="screen_6" class="screenbg-grey screens-div">
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
                                                <p class="screen1-fontwt-600 screenfont-size-20" id="cardError">Carte Bancaire</p>
                                                <a href="javascript:void(0);" class="screen-btn-back"
                                                    id="page6Prev-btn">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12 screen7-p-mbl" id="">
                                            <div class="screen-header-main text-center">
                                                <p class="screen1-fontwt-600">Toutes les transactions sont sécurisées et cryptées</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="cardname">Nom sur la carte*</label>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="cardname" name="card_holder" aria-describedby="cardnameError"
                                                            placeholder="Nom sur la carte" value="{{ session()->get('checkout_cardholder')??'' }}" />
                                                            <label id="cardnameError" style="display: none;
    color: #fb0000;
    font-size: 12px;
    text-transform: capitalize;
    letter-spacing: 1px;">Champ obligatoire*</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="cardnumber">Numéro sur la carte*</label>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="cardnumber" name="card_number"
                                                            aria-describedby="cardnumberError"
                                                            value="{{  session()->get('checkout_cardnumber')??'' }}"
                                                            placeholder="Numéro sur la carte" onkeyup="cc_format('cardnumber','cstCCardType');" />
                                                            <label id="cardnumberError" style="display: none;
    color: #fb0000;
    font-size: 12px;
    text-transform: capitalize;
    letter-spacing: 1px;">Champ obligatoire*</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="carddateexpiry">Date expiration*</label>
                                                        <div class="row">
                                                            <div class="col-6" style="position:relative;">
                                                                <input type="text"
                                                                class="form-control form-control-lg form-check-input"
                                                                id="carddateexpirymonth" name="exp_month" aria-describedby="carddateexpiryError"
                                                                value="{{ session()->get('checkout_cardexpirymonth')??'' }}"
                                                                 placeholder="Mois (MM)" onkeyup="mm_format('carddateexpirymonth');" />
                                                                 <span class="seperator" style="
                                                                    position: absolute;
                                                                    right: 0;
                                                                    top: 22%;
                                                                    font-size: medium;
                                                                ">/</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-check-input"
                                                                    id="carddateexpiry" name="exp_year" aria-describedby="carddateexpiryError"
                                                                    value="{{ session()->get('checkout_cardexpiryyear')??'' }}"
                                                                     placeholder="Année (YYYY)" onkeyup="yyyy_format('carddateexpiry');" />  
                                                            </div>
                                                        </div>
                                                            <label id="carddateexpiryError" style="display: none;
    color: #fb0000;
    font-size: 12px;
    text-transform: capitalize;
    letter-spacing: 1px;">Champ obligatoire*</label>
                                                    </div>
                                                </div>
                                                <div class="col-6 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="cardcvc">CVC*</label>
                                                        <input type="number"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="cardcvc" name="cvc" aria-describedby="cardcvcError"
                                                            value="{{  session()->get('checkout_cardsecurity')??'' }}"
                                                            placeholder="CVC (3 chiffres)" onkeyup="cvc_format('cardcvc');" />
                                                            <label id="cardcvcError" style="display: none;
    color: #fb0000;
    font-size: 12px;
    text-transform: capitalize;
    letter-spacing: 1px;">Champ obligatoire*</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a class="screen-btn" style="cursor:pointer;" id="btn-screen3_3">Confirmer carte</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Screen 5 Ends -->

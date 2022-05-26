@include('layouts.yellow_header')
<!-- Screen 5 Starts -->
        <section id="screen_5" class="screenbg-grey screens-div">
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
                                                <p class="screen1-fontwt-600 screenfont-size-20">Véhicule</p>
                                                <a href="javascript:void(0);" class="screen-btn-back"
                                                    id="page5Prev-btn">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12 screen7-p-mbl" id="">
                                            <div class="screen-header-main text-center">
                                                <p class="screen1-fontwt-600">Ajouter votre véhicule</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-3">
                                        <div class="col-12">
                                            <select name="" class="form-control" id="">
                                                @foreach($myvechiles as $vehicle)
                                                <option value="{{ $vehicle->id }}">{{ $vehicle->car_number }} / {{ $vehicle->car_brand }} {{ $vehicle->car_model }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="vehicle">Marque véhicule*</label>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="vehicle" name="vehicle" aria-describedby="vehicleError"
                                                            placeholder="Marque véhicule (ex: Peugeot)" value="{{ $myvechiles[0]->car_brand??session()->get('checkout_vehicle')??'' }}" />
                                                            <label id="vehicleError" style="display: none;
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
                                                        <label for="vehiclemodel">Modèle véhicule*</label>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="vehiclemodel" name="vehiclemodel"
                                                            aria-describedby="vehiclemodelError"
                                                            placeholder="Modèle véhicule (ex: 208)" value="{{ $myvechiles[0]->car_model??session()->get('checkout_model')??'' }}" />
                                                            <label id="vehiclemodelError" style="display: none;
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
                                                        <label for="vehiclefaculty">Plaque immatriculation</label>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-check-input"
                                                            id="vehiclefaculty" name="vehiclefaculty" aria-describedby="vehiclefacultyError"
                                                            placeholder="Plaque immatriculation (facultatif)" value="{{ $myvechiles[0]->car_number??session()->get('checkout_number')??'' }}" />
    <!--                                                        <label id="vehiclefacultyError" style="display: none;-->
    <!--color: #fb0000;-->
    <!--font-size: 12px;-->
    <!--text-transform: capitalize;-->
    <!--letter-spacing: 1px;">Champ obligatoire*</label>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a class="screen-btn" id="btn-screen3_2">Confirmer véhicule</a>
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

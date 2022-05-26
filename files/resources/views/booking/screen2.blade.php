@include('layouts.yellow_header')
        <!-- Screen 2 Starts -->
        <section id="screen_2" class="screenbg-grey screens-div">
            <div class="container m-auto p-0 screen2">
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                        <div class="row m-0 screen-heading-pd">
                            <div class="col-sm-12 col-12 px-0 pl-sm-0">
                                <h1 class="screen-heading">Sélectionner un lavage</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 screen-body-pd">
                            <div class="col-sm-12 col-12 px-0 pl-sm-0">
                                <div class="pd-screen screen1page-new m-0">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600">Je souhaite..</p>
                                                <a href="javascript:void(0);" class="screen-btn-back"
                                                    id="page2Prev-btn">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="carousel-service"
                                                    style="background-color: #fff; position: unset;margin-top: 15px;">
                                                <a class="carousel-item-service" id="one_serv" href="#two!"><img
                                                        src="{{ asset('public/assets/dist/service22.png') }}">
                                                    <h3
                                                        style="color:#000;font-weight:600;text-align:center;margin-bottom: 0px;">
                                                        EXTÉRIEUR</h3>
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio001" name="service[]"
                                                            class="custom-control-input"
                                                            value="Lavage EXTÉRIEUR-15" 
                                                            <?php if(session()->get('service_type') == 'Lavage EXTÉRIEUR'){ ?>
                                                                checked
                                                            <?php } ?>>
                                                        <label for="customRadio001"
                                                            class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">15
                                                                €</span></label>
                                                    </div>
                                                </a>
                                                <a class="carousel-item-service" id="two_serv" href="#one!"><img
                                                        src="{{ asset('public/assets/dist/service11.png') }}">
                                                    <h3
                                                        style="color:#000;font-weight:600;text-align:center;margin-bottom: 0px;">
                                                        INTERIEUR</h3>
                                        
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio111" name="service[]"
                                                            class="custom-control-input"
                                                            value="Lavage INTERIEUR-40" 
                                                            <?php if(session()->get('service_type') == 'Lavage INTERIEUR'){ ?>
                                                                checked
                                                            <?php } ?>>
                                                        <label for="customRadio111"
                                                            class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">40
                                                                €</span></label>
                                                    </div>
                                                </a>
                                                <a class="carousel-item-service" id="three_serv" href="#three!"><img
                                                        src="{{ asset('public/assets/dist/service33.png') }}">
                                                    <h3
                                                        style="color:#000;font-weight:600;text-align:center;margin-bottom: 0px;">
                                                        COMPLET</h3>
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio222" name="service[]"
                                                            class="custom-control-input" value="Lavage COMPLET-50" 
                                                            <?php if(session()->get('service_type') == 'Lavage COMPLET'){ ?>
                                                                checked
                                                            <?php } ?>>
                                                        <label for="customRadio222"
                                                            class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">50
                                                                €</span></label>
                                                    </div>
                                                </a>
                                            </div>

                                            
                                            </div>
                                        </div>
                                        <div class="col-12 screen2-hidediv-mbl">
                                            <div class="screen2-tabs row" id="servicesWithUpCar">
                                                <div class="col-4 screen2-divtabs mb-1">
                                                    <div class="screen2-image">
                                                        <img src="{{ asset('public/assets/images/service1.png')}}" class="screen2-img "
                                                            alt="parking aeroport toulouse" />
                                                    </div>
                                                    <p>EXTÉRIEUR</p>
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio0" name="service[]"
                                                            class="custom-control-input" value="Lavage EXTÉRIEUR-15"
                                                            <?php if(session()->get('service_type') == 'Lavage EXTÉRIEUR'){ ?>
                                                                checked
                                                            <?php } ?>
                                                            >
                                                        <label for="customRadio0" class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">15
                                                                €</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-4 screen2-divtabs mb-1">
                                                    <div class="screen2-image">
                                                        <img src="{{ asset('public/assets/images/service2.png')}}" class="screen2-img "
                                                            alt="parking aeroport toulouse" />
                                                    </div>
                                                    <p>INTERIEUR</p>
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio1" name="service[]"
                                                            class="custom-control-input" value="Lavage INTERIEUR-40" 
                                                            <?php if(session()->get('service_type') == 'Lavage INTERIEUR'){ ?>
                                                                checked
                                                            <?php } ?>>
                                                        <label for="customRadio1" class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">40
                                                                €</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-4 screen2-divtabs mb-1">
                                                    <div class="screen2-image">
                                                        <img src="{{ asset('public/assets/images/service3.png')}}" class="screen2-img "
                                                            alt="parking aeroport toulouse" />
                                                    </div>
                                                    <p>COMPLET</p>
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" onchange="setSelectedValues(this)"
                                                            id="customRadio2" name="service[]"
                                                            class="custom-control-input" value="Lavage COMPLET-50" 
                                                            <?php if(session()->get('service_type') == 'Lavage COMPLET'){ ?>
                                                                checked
                                                            <?php } ?>>
                                                        <label for="customRadio2" class="custom-control-label"><span
                                                                style="font-weight:600;color:green;">50
                                                                €</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a class="screen2-btn" id="btn-screen1_1" style="cursor:pointer;">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <script type="text/javascript">
		$( document ).ready(function() {
		  $('.carousel-service').carousel();
		});
		</script>
        <!-- Screen 2 Ends -->

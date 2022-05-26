@extends('driver.app')
@section('content')
<style>
    .driver__reserv_div{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .remove_btn{
        top: 10px;
        right: 10px;
        background: rgba(255,255,255,0.7);
        padding: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }
    .remove_btn:hover{
        background: rgba(255,0,0,0.7);
    }
</style>
<main>
    <!-- Screen 1 Starts -->
    <section id="screen_1" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 driver-bonjour">
                    <h2>Bonjour {{ Auth::user()->name}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 driver-reservation">
                    <h3>Réservations du jour</h3>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="input-group driver__inputgroup">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="{{ asset('public/assets/images/driver-search-icon.png') }}" class="driver__hcinputimg" /></span>
                        </div>
                        <input type="text" class="form-control form-control-lg form-check-input" autocomplete="off" placeholder="Rechercher une réservation" id="screen_hs_inputsearch" name="search">
                        <div class="driver__searchbox">
                            <a href="#" class="row driver__searchboxrow">
                                <div class="col-12 p-0 driver__searchboxdiv">
                                    <div class="driver__searchboximg">
                                        <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                    </div>
                                    <div class="driver__searchboxpdiv">
                                        <p class="driver__searchboxp1">(Aujourd’hui)</p>
                                        <p class="driver__searchboxp2">10 Sept, 2021</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="row driver__searchboxrow">
                                <div class="col-12 p-0 driver__searchboxdiv">
                                    <div class="driver__searchboximg">
                                        <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                    </div>
                                    <div class="driver__searchboxpdiv">
                                        <p class="driver__searchboxp1">(Demain)</p>
                                        <p class="driver__searchboxp2">11 Sept, 2021</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="row driver__searchboxrow">
                                <div class="col-12 p-0 driver__searchboxdiv">
                                    <div class="driver__searchboximg">
                                        <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                    </div>
                                    <div class="driver__searchboxpdiv">
                                        <p class="driver__searchboxp1">--</p>
                                        <p class="driver__searchboxp2">12 Sept, 2021</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 p-0 driver_tabsdiv">
                    <div class="driver__tabs_anim">
                        <ul class="nav nav-tabs driver__tabs_ul">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_aujourd_hui " role="tab">Aujourd’hui</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_demain" role="tab">Demain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_7_prochains_jours" role="tab">7 prochains jours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_14_prochains_jour" role="tab">14 prochains jour</a>
                            </li>
                        </ul>
                        <div class="tab-content driver__tabs_details">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab_aujourd_hui">
                                <div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        @foreach($bookingsToday as $booking)
                                        @php 

                                        $date = str_replace('/','-',$booking->start_date);
                                        $date = @date_create($date);

                                        $date = @date_format($date, "d M Y");
                                        $date = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $date
                                        );
                                        $booking->start_date = $date;
                                        $booking->start_time = str_replace('      ', ':', $booking->start_time);

                                        $edate = str_replace('/','-',$booking->end_date);
                                        $edate = @date_create($edate);

                                        $edate = @date_format($edate, "d M Y");
                                        $edate = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $edate
                                        );
                                        $booking->end_date = $edate;
                                        $booking->end_time = str_replace('      ', ':', $booking->end_time);

                                        $dateRecord = @date_format(@date_create($booking->dateRecord), 'd M, Y');
                                        @endphp
                                        <div class="panel driver-reserv-panel">
                                            <div class="panel-heading" role="tab" id="aujourd_hui_heading_{{ $booking->id }}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aujourd_hui_{{ $booking->id }}" aria-expanded="false" aria-controls="aujourd_hui__{{ $booking->id }}">{{ $dateRecord }} (Aujourd’hui)</a>
                                                </h4>
                                            </div>
                                            <div id="aujourd_hui_{{ $booking->id }}" class="panel-collapse collapse driver__reserv_box" role="tabpanel" aria-labelledby="aujourd_hui_heading_{{ $booking->id }}">
                                            @if($booking->driver_status == 0)    
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 1)
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_icondiv">
                                                        <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundblue"></i>
                                                    </div>
                                                </div>
                                                @elseif($booking->driver_status == 2)  
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 3)
                                                    <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                        <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                        <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                        <div class="driver__reserv_parking_space">A</div>
                                                        <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                        <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                        <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                        <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                        <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                        <div class="driver__reserv_icondiv">
                                                            <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundred"></i>
                                                        </div>
                                                    </div>
                                                @else
                                                <!-- <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_msg">
                                                        <span class="driver__reserv_msg__ driver__reserv_msg__green">10€ à payer</span>
                                                    </div>
                                                </div> -->
                                                @endif
                                           </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_demain">
                                <div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($bookingsTomorrow as $booking)
                                        @php 

                                        $date = str_replace('/','-',$booking->start_date);
                                        $date = @date_create($date);

                                        $date = @date_format($date, "d M Y");
                                        $date = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $date
                                        );
                                        $booking->start_date = $date;
                                        $booking->start_time = str_replace('      ', ':', $booking->start_time);

                                        $edate = str_replace('/','-',$booking->end_date);
                                        $edate = @date_create($edate);

                                        $edate = @date_format($edate, "d M Y");
                                        $edate = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $edate
                                        );
                                        $booking->end_date = $edate;
                                        $booking->end_time = str_replace('      ', ':', $booking->end_time);

                                            $dateRecord = @date_format(@date_create($booking->dateRecord), 'd M, Y');
                                        @endphp
                                        <div class="panel driver-reserv-panel">
                                            <div class="panel-heading" role="tab" id="aujourd_hui_heading_{{ $booking->id }}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aujourd_hui_{{ $booking->id }}" aria-expanded="false" aria-controls="aujourd_hui__{{ $booking->id }}">{{ $dateRecord }} (Aujourd’hui)</a>
                                                </h4>
                                            </div>
                                            <div id="aujourd_hui_{{ $booking->id }}" class="panel-collapse collapse driver__reserv_box" role="tabpanel" aria-labelledby="aujourd_hui_heading_{{ $booking->id }}">
                                                @if($booking->driver_status == 0)    
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 1)
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_icondiv">
                                                        <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundblue"></i>
                                                    </div>
                                                </div>
                                                @elseif($booking->driver_status == 2)  
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 3)
                                                    <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                        <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                        <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                        <div class="driver__reserv_parking_space">A</div>
                                                        <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                        <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                        <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                        <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                        <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                        <div class="driver__reserv_icondiv">
                                                            <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundred"></i>
                                                        </div>
                                                    </div>
                                                @else
                                                <!-- <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_msg">
                                                        <span class="driver__reserv_msg__ driver__reserv_msg__green">10€ à payer</span>
                                                    </div>
                                                </div> -->
                                                @endif                                            
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_7_prochains_jours">
                                <div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($bookingsSevenDays as $booking)
                                        @php 


                                        $date = str_replace('/','-',$booking->start_date);
                                        $date = @date_create($date);

                                        $date = @date_format($date, "d M Y");
                                        $date = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $date
                                        );
                                        $booking->start_date = $date;
                                        $booking->start_time = str_replace('      ', ':', $booking->start_time);

                                        $edate = str_replace('/','-',$booking->end_date);
                                        $edate = @date_create($edate);

                                        $edate = @date_format($edate, "d M Y");
                                        $edate = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $edate
                                        );
                                        $booking->end_date = $edate;
                                        $booking->end_time = str_replace('      ', ':', $booking->end_time);


                                            $dateRecord = @date_format(@date_create($booking->dateRecord), 'd M, Y');
                                        @endphp
                                        <div class="panel driver-reserv-panel">
                                            <div class="panel-heading" role="tab" id="aujourd_hui_heading_{{ $booking->id }}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aujourd_hui_{{ $booking->id }}" aria-expanded="false" aria-controls="aujourd_hui__{{ $booking->id }}">{{ $dateRecord }} (Aujourd’hui)</a>
                                                </h4>
                                            </div>
                                            <div id="aujourd_hui_{{ $booking->id }}" class="panel-collapse collapse driver__reserv_box" role="tabpanel" aria-labelledby="aujourd_hui_heading_{{ $booking->id }}">
                                            
                                            @if($booking->driver_status == 0)    
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 1)
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_icondiv">
                                                        <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundblue"></i>
                                                    </div>
                                                </div>
                                                @elseif($booking->driver_status == 2)  
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 3)
                                                    <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                        <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                        <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                        <div class="driver__reserv_parking_space">A</div>
                                                        <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                        <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                        <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                        <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                        <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                        <div class="driver__reserv_icondiv">
                                                            <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundred"></i>
                                                        </div>
                                                    </div>
                                                @else
                                                <!-- <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_msg">
                                                        <span class="driver__reserv_msg__ driver__reserv_msg__green">10€ à payer</span>
                                                    </div>
                                                </div> -->
                                                @endif                                             
                                                
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_14_prochains_jour">
                                <div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($bookingsFourteenDays as $booking)
                                        @php 


                                        $date = str_replace('/','-',$booking->start_date);
                                        $date = @date_create($date);

                                        $date = @date_format($date, "d M Y");
                                        $date = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $date
                                        );
                                        $booking->start_date = $date;
                                        $booking->start_time = str_replace('      ', ':', $booking->start_time);

                                        $edate = str_replace('/','-',$booking->end_date);
                                        $edate = @date_create($edate);

                                        $edate = @date_format($edate, "d M Y");
                                        $edate = str_replace(
                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                        $edate
                                        );
                                        $booking->end_date = $edate;
                                        $booking->end_time = str_replace('      ', ':', $booking->end_time);

                                            $dateRecord = @date_format(@date_create($booking->dateRecord), 'd M, Y');
                                        @endphp
                                        <div class="panel driver-reserv-panel">
                                            <div class="panel-heading" role="tab" id="aujourd_hui_heading_{{ $booking->id }}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aujourd_hui_{{ $booking->id }}" aria-expanded="false" aria-controls="aujourd_hui__{{ $booking->id }}">{{ $dateRecord }} (Aujourd’hui)</a>
                                                </h4>
                                            </div>
                                            <div id="aujourd_hui_{{ $booking->id }}" class="panel-collapse collapse driver__reserv_box" role="tabpanel" aria-labelledby="aujourd_hui_heading_{{ $booking->id }}">
                                            @if($booking->driver_status == 0)    
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 1)
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textblue driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_icondiv">
                                                        <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundblue"></i>
                                                    </div>
                                                </div>
                                                @elseif($booking->driver_status == 2)  
                                                <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                </div>
                                                @elseif($booking->driver_status == 3)
                                                    <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred driver__reserv_border driver__reserv_opacity" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                        <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                        <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                        <div class="driver__reserv_parking_space">A</div>
                                                        <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                        <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                        <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                        <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                        <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                        <div class="driver__reserv_icondiv">
                                                            <i class="fa fa-check driver__reserv_icon driver__reserv_backgroundred"></i>
                                                        </div>
                                                    </div>
                                                @else
                                                <!-- <div class="driver__reserv_div order__reserv_div_{{ $booking->id }} driver__reserv_textred" onclick="openDriverReservModal({{json_encode($booking)}}, {{json_encode($booking->images)}});">
                                                    <div class="driver__reserv_hour_arrival">{{ $booking->start_time }}</div>
                                                    <div class="driver__reserv_name">{{ $booking->name }}</div>
                                                    <div class="driver__reserv_parking_space">A</div>
                                                    <div class="driver__reserv_vehicle_pic"><img src="{{ asset('public/assets/images/driver_img.png')}}" alt=""></div>
                                                    <div class="driver__reserv_mark_model_vehicle">{{ $booking->vehicle }}</div>
                                                    <div class="driver__reserv_plate_num_vehicle">{{ $booking->vehiclefaculty }}</div>
                                                    <div class="driver__reserv_phone">{{ $booking->phone }}</div>
                                                    <div class="driver__reserv_date_hour_return">{{ $booking->end_date }}<br />{{ $booking->end_time }}</div>
                                                    <div class="driver__reserv_msg">
                                                        <span class="driver__reserv_msg__ driver__reserv_msg__green">10€ à payer</span>
                                                    </div>
                                                </div> -->
                                                @endif                                           
                                    
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POPUP -->
    <div class="container m-auto p-0">
        <div class="row driver__reserv_mdl__ driver__reserv_modal">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 driver__reserv_custommodal">
                <div class="row m-0 p-0">
                    <div class="col-sm-12 col-12">
                        <div class="screen__3Modalpd_mod screen1page-new">
                            <div class="row driver__reserv_mdl__pdtop">
                                <div class="col-sm-12 col-12 driver__reserv_mdl__dlfex">
                                    <div class="driver__reserv_mdl__dash"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 driver__reserv_mdl__headflex">
                                    <div>
                                        <h2 class="driver__reserv_mdl__h2"><span id="vehicle">Magali Rambert-Bugeria</span></h2>
                                        <p class="driver__reserv_mdl__p"><span id="vehiclefaculty">#2020 -</span> <span id="vehiclemodel">P1 extérieur B</span></p>
                                        <!-- <span class="driver__reserv_mdl__msg driver__reserv_msg__green">10€ à payer</span> -->
                                    </div>
                                    <div>
                                        <div class="driver__reserv_mdl__tick driver__reserv_backgroundgray" id="driver__reserv__parkingstatus" onclick="changeStatus();">
                                            <img src="{{ asset('public/assets/images/driver_tick.png')}}" class="driver__reserv_mdl__tick" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 driver__reserv_mbl_mediabox">
                                    <div class="driver__reserv_mdl__mediaupload">
                                        <div class="driver__reserv_mdl__uploadwrapper">
                                            <button class="driver__reserv_mdl__uploadwrapperBtn">+ Ajouter photo</button>
                                            <form id="file_upload_form" method="post" enctype="multipart/form-data">
                                                <input type="file" name="myfile" id="myfiles" multiple />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="driver__reserv_mdl__media" id="uploaded_images">
                                        <!-- <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt="">
                                        <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt="">
                                        <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt="">
                                        <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt="">
                                        <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt="">
                                        <img src="{{ asset('public/assets/images/driver_img.png')}}" class="driver__reserv_mdl__imgs" alt=""> -->
                                    </div>
                                </div>
                                <div class="col-12 screens-btndiv">
                                    <a href="javascript:void(0);" class="driver__reserv_mdl__a" onclick="openDriverInfoModal()">
                                        <h2>Informations réservations</h2>
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="driver__reserv_mdl__a">
                                        <h2>Modifier date, service supplémentaire</h2>
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- POPUP - Informations réservations -->
    <div class="container m-auto p-0">
        <div class="row driver__info_mdl__ driver__reserv_modal">
            <form class="" id="infoReservationForm" name="infoReservationForm">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 driver__info_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-sm-12 col-12">
                            <div class="driver1page-new">
                                <div class="row p-0 m-0">
                                    <div class="col-12 driver__infoheader">
                                        <a href="javascript:void(0);" onclick="backToDriverReservModal()" class="driver__infobtn_back" id="">
                                            <i class="fa fa-arrow-left driver__info_back_icon" aria-hidden="true"></i>
                                        </a>
                                        <h2>Informations réservations</h2>
                                    </div>
                                </div>
                                <div class="row p-0 m-0 driver__inforeservdiv">
                                    <div class="col-12 driver__inforeservhead">
                                        <h2>Réservations</h2>
                                        <a href="javascript:void(0);" class="driver__infomodifier" id="">Modifier</a>
                                    </div>
                                    <div class="col-12 driver__inforeservboxdiv">
                                        <div class="row p-0 m-0 driver__inforeservbox">
                                            <div class="col-12 driver__inforeserveborderbtm">
                                                <div class="row screen__3Mdl_dflx driver__inforeservedetails">
                                                    <div class="col-1 driver__mblmark"></div>
                                                    <div class="col-11 driver_inforeserv_markinfo pl-0">
                                                        <h2 class=""><span id="date_start">18 septembre 2021</span> - <span id="time_start">12:00</span></h2>
                                                        <h2 class=""><span id="date_end">20 septembre 2021</span> - <span id="time_end">08:00</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="driver__inforeservsep"></div>
                                            <div class="col-12 driver__inforeservedetailfooter">
                                                <p><span id="service_type">Aucun lavage</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0 driver__infoformdiv">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                        <h1 class="driver__infoheadingh1">Information client</h1>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 px-md-3 px-0">
                                        <div class="row m-0 p-0">
                                            <div class="col-12 p-0">
                                                <div class="driver__infoinputdiv">
                                                    <input type="hidden" id="form_id" value="0" name="id">
                                                    <label for="contact_name">Nom</label>
                                                    <input type="text" id="form_name" value="Matéo" name="contact_name" placeholder="Nom*" required />
                                                </div>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="driver__infoinputdiv">
                                                            <label for="vehicle">Marque véhicule</label>
                                                            <input type="text" id="form_vehicle" value="Mercedes" name="vehicle" placeholder="Marque véhicule*" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="driver__infoinputdiv">
                                                            <label for="vehiclemodel">Modèle véhicule</label>
                                                            <input type="text" id="form_vehiclemodel" value="Sprinter" name="vehiclemodel" placeholder="Modèle véhicule*" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="driver__infoinputdiv">
                                                    <label for="vehiclefaculty">Plaque immatriculation</label>
                                                    <input type="text" id="form_vehiclefaculty" value="545 ABC 12" name="vehiclefaculty" placeholder="Plaque immatriculation*" required />
                                                </div>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="driver__infoinputdiv">
                                                    <label for="contact_telephone">Numéro de téléphone</label>
                                                    <input type="text" id="form_phone" value="0655887744" name="contact_telephone" placeholder="Numéro de téléphone*" required />
                                                </div>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="driver__infoinputdiv">
                                                    <label for="contact_email">Adresse e-mail</label>
                                                    <input type="email" id="form_email" value="dalmasomateo@gmail.com" name="contact_email" placeholder="Adresse e-mail*" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 driver_modal_infofooter">
                    <button type="submit" class="driver_info_btn">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Screen 1 Ends -->
</main>
<script>
    $("#screen_hs_inputsearch").click(function(e) {
        e.stopPropagation();
        $(".driver__searchbox").attr('style', 'display: block');
    });
    $(document).on('click', function(e) {
        if (($(e.target).attr('class') != $(".driver__searchbox").attr('class'))) {
            $(".driver__searchbox").attr('style', 'display: none');
        }
    });
    var screen_width = screen.width;
    var screen_height = screen.height;
    $(document).ready(function() {
        if (screen_width <= 767) {
            $('.driver__tabs_ul a[data-toggle="tab"]').on('hide.bs.tab', function(e) {
                var $old_tab = $($(e.target).attr("href"));
                var $new_tab = $($(e.relatedTarget).attr("href"));

                if ($new_tab.index() < $old_tab.index()) {
                    $old_tab.css('position', 'relative').css("right", "0").show();
                    $old_tab.animate({
                        "right": "-100%"
                    }, 300, function() {
                        $old_tab.css("right", 0).removeAttr("style");
                    });
                } else {
                    $old_tab.css('position', 'relative').css("left", "0").show();
                    $old_tab.animate({
                        "left": "-100%"
                    }, 300, function() {
                        $old_tab.css("left", 0).removeAttr("style");
                    });
                }
            });
        }
    });
    $('.driver__tabs_ul a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if ($new_tab.index() > $old_tab.index()) {
            var $menu = $('.driver__tabs_ul');
            var $menuitem = $('.driver__tabs_ul .nav-link.active');
            var elOffset = $menuitem.offset().left;
            var elWidth = $menuitem.outerWidth(true);
            var menuScrollLeft = $menu.scrollLeft();
            var menuWidth = $menu.width();

            var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) + 100;
            $menu.scrollLeft(myScrollPos);
            $new_tab.css('position', 'relative').css("right", "-2500px");
            $new_tab.animate({
                "right": "0"
            }, 500, 'linear');
        } else {
            var $menu = $('.driver__tabs_ul');
            var $menuitem = $old_tab;
            var elOffset = $menuitem.offset().left;
            var elWidth = $menuitem.outerWidth(true);
            var menuScrollLeft = $menu.scrollLeft();
            var menuWidth = $menu.width();

            var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) - 100;
            $menu.scrollLeft(myScrollPos);
            $new_tab.css('position', 'relative').css("left", "-2500px");
            $new_tab.animate({
                "left": "0"
            }, 500, 'linear');
        }
    });

    function openDriverReservModal(data, images){
        var uploaded_images= '';
        images.forEach(element => {
            uploaded_images += '<div class="position-relative"><img src="' + element.path +'" class="driver__reserv_mdl__imgs" alt=""><a class="position-absolute remove_btn" onclick="removeImage('+element.id+')">X</a></div>';
        });
        $('#uploaded_images').html(uploaded_images);
        $('#form_id').val(data.id);
        $('#vehicle').html(data.vehicle);
        $('#form_vehicle').val(data.vehicle);
        if(data.vehiclefaculty !== null){
            $('#vehiclefaculty').html(data.vehiclefaculty + '-');
            $('#form_vehiclefaculty').val(data.vehiclefaculty);
        }
        $('#vehiclemodel').html(data.vehiclemodel);
        $('#form_vehiclemodel').val(data.vehiclemodel);

        $('#date_start').html(data.start_date);
        $('#date_end').html(data.end_date);
        $('#time_start').html(data.start_time);
        $('#time_end').html(data.end_time);
        
        $('#form_name').val(data.name);
        $('#form_phone').val(data.phone);
        $('#form_email').val(data.email);

        $('#service_type').html(data.service_type);
        
        $('body').css('overflow', 'hidden');
        $(".driver-mobile-footer-container").attr('style', 'visibility: hidden;');
        $(".driver__reserv_mdl__").attr('style', 'visibility: visible;');
        $(".driver__reserv_custommodal").attr('style', 'transform: translateY(0%);');
        if(data.driver_status == 0){
            $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundgray');
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundblue');
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
        }
        else if(data.driver_status == 1){
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
            $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundblue');
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
        }
        else if(data.driver_status == 2){
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
            $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundblue');
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
        }
        else{
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
            $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundblue');
            $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundred');
        }
    }
    // auto closing
    $(".driver__reserv_mdl__").click(function(e) {
        var container = $(".driver__reserv_custommodal");
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('body').css('overflow', 'auto');
            $(".driver-mobile-footer-container").attr('style', 'visibility: visible;');
            $(".driver__reserv_mdl__").attr('style', 'visibility: hidden;');
            $(".driver__reserv_custommodal").attr('style', 'transform: translateY(100%);');
        }
    });

    function openDriverInfoModal() {
        $('body').css('overflow', 'hidden');
        $(".driver-mobile-footer-container").attr('style', 'visibility: hidden;');
        $(".driver__info_mdl__").attr('style', 'visibility: visible;');
        $(".driver__info_custommodal").attr('style', 'transform: translateY(0%);');
        $(".driver__reserv_mdl__").attr('style', 'visibility: hidden;');
        $(".driver__reserv_custommodal").attr('style', 'transform: translateY(100%);');
    }
    
    function backToDriverReservModal(){
        $('body').css('overflow', 'hidden');
        $(".driver-mobile-footer-container").attr('style', 'visibility: hidden;');
        $(".driver__info_mdl__").attr('style', 'visibility: hidden;');
        $(".driver__info_custommodal").attr('style', 'transform: translateY(100%);');
        $(".driver__reserv_mdl__").attr('style', 'visibility: visible;');
        $(".driver__reserv_custommodal").attr('style', 'transform: translateY(0%);');
    }

    function changeStatus() {
        var order_id = $('#form_id').val();
        $.ajax({
            type: "GET",
            url: "{{url('/book/update-status')}}/"+order_id,
            success: function(data) {
                if(data == 0){
                    $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundgray');
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundblue');
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_textred');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_border');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_opacity');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_textblue');
                }
                else if(data == 1){
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
                    $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundblue');
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_textred');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_border');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_opacity');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_textblue');
                    $('.order__reserv_div_'+order_id).html($('.order__reserv_div_'+order_id).html()+'<div class="driver__reserv_icondiv"><i class="fa fa-check driver__reserv_icon driver__reserv_backgroundblue"></i></div>')
                }
                else if(data == 2){
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
                    $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundblue');
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundred');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_textblue');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_border');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_opacity');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_textred');
                }
                else{
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
                    $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundblue');
                    $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundred');
                    $('.order__reserv_div_'+order_id).removeClass('driver__reserv_textblue');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_border');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_opacity');
                    $('.order__reserv_div_'+order_id).addClass('driver__reserv_textred');
                    $('.order__reserv_div_'+order_id).html($('.order__reserv_div_'+order_id).html()+'<div class="driver__reserv_icondiv"><i class="fa fa-check driver__reserv_icon driver__reserv_backgroundred"></i></div>')    
                }
            },
            error: function() {
                alert('error');
            }
        });
        // if ($("#driver__reserv__parkingstatus").hasClass("driver__reserv_backgroundgray")) {
        //     $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundgray');
        //     $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundblue');
        
        // } else if ($("#driver__reserv__parkingstatus").hasClass("driver__reserv_backgroundblue")) {
        //     $('#driver__reserv__parkingstatus').removeClass('driver__reserv_backgroundblue');
        //     $('#driver__reserv__parkingstatus').addClass('driver__reserv_backgroundred');
        // } else {}
    }

    $('#infoReservationForm').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        // console.log(form.serialize());
        $.ajax({
            type: "POST",
            url: "{{url('/book/update')}}",
            data: form.serialize(),
            success: function(data) {
                alert('updated');
            },
            error: function() {
                alert('error');
            }
        });
    });

    $("#myfiles").change(function(){
        $('#file_upload_form').submit();
     });
     $('#file_upload_form').on('submit', function(ev){
        ev.preventDefault();
        var form = new FormData();
        var order_id = $('#form_id').val();
        var images = $('#myfiles')[0].files;
        $.each(images,function(idx,elm){
            // console.log(elm);
            form.append('image-'+idx, elm);
        });
        $.ajax({
            type: "POST",
            url: "{{url('/book/upload-image')}}/"+order_id,
            processData: false, 
            contentType: false,
            data: form,
            success: function(data) {
                // alert(data);
                $('#uploaded_images').html(data);
            },
            error: function() {
                alert('error');
            }
        });
     })
     function removeImage(image_id){
        var order_id = $('#form_id').val();
        $.ajax({
            type: "GET",
            url: "{{url('/book/remove-image')}}/"+order_id+"/"+image_id,
            success: function(data) {
                // alert(data);
                $('#uploaded_images').html(data);
            },
            error: function() {
                alert('error');
            }
        });
     }

</script>
@endsection
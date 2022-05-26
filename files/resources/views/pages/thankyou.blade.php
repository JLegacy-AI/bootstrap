@extends('layouts.app')
@section('content')
<style>
    .body {
        background: #f1f2f2 !important;
    }

    .navbar {
        background: #000 !important;
    }

    .footer-buttons-div {
        display: none !important;
    }
    #demo_timer {
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
<main>
    <div class="arrival-time mb-0">
        <div class="container m-auto p-0">
            <div class="row m-0 p-0">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-1">
                    <div class="row newyellowbar">
                        <div class="col-2 newyellowbarline text-center newyellowbar-1">
                            <label>AÉROPORT</label>
                            <h3 class="airport_name"><?= $order->airport ?? 'N/A'; ?></h3>
                        </div>
                        <div class="col-4 newyellowbarline newyellowbar-2">
                            <div class="row no-gutter">
                                <div class="col-6 newyellowbar-2-1">
                                    <label>ARRIVÉE</label>
                                        <?php
                                        $newstartdate = explode('/', $order->start_date);
                                        $newenddate = explode('/', $order->end_date);
                                        ?>
                                    <div class="sdate">{{$newstartdate[0]}}/{{$newstartdate[1]}}</div>
                                    <div class="stime"><?= str_replace('      ', ':', $order->start_time) ?></div>
                                </div>
                                <div class="col-6 newyellowbar-2-2">
                                    <label>RETOUR</label>
                                    <div class="edate">{{$newenddate[0]}}/{{$newenddate[1]}}</div>
                                    <div class="etime"><?= str_replace('      ', ':', $order->end_time) ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 newyellowbarline newyellowbar-3">
                            <label>RÉSERVATION</label>
                            <div class="screentop-font">Parkme (<span class="parkingtotalcharged">{{$order->parking_charges??'00.00'}}€</span>)</div>
                            <div class="screentop-font">Navette (0€)</div>
                            <div class="screentop-font lavage_type_text">
                            @if($order->services_charges !== 0 && isset($order->services_charges))
                            <span><?= $order->service_type??'Lavage' ?></span>(<span><?= $order->services_charges??'0€'; ?></span>)
                            @endif
                            </div>
                        </div>
                        <div class="col-2 text-center newyellowbar-4">
                            <label>TOTAL</label>
                            <div class="total-price"> <?= $order->price ??'0'; ?>€</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Screen 7 Starts -->
    <section id="screen_7" class="screenbg-grey screens-div">
        <div class="container m-auto p-0">
            <div class="row m-0 p-0">
                <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-1 col-12 px-md-3 px-0">
                    <div class="row m-0 screen-successful-pd">
                        <div class="col-sm-12 col-12 px-0 pl-sm-0">
                            <div class="pd-screen screen1page-new m-0">
                                <div class="row" id="">
                                    <div class="col-12 screen7-tabs-div">
                                        <i class="fa fa-check screen7-icon"></i>
                                    </div>
                                    <div class="col-12 screen7-tabs-div">
                                        <h2 class="screen7-heading">Réservation confirmée !</h2>
                                    </div>
                                    <div class="col-12 screen7-tabs-div">
                                        <ul class="screen7-ul">
                                            <li><span>E-mail de confirmation</span> envoyé à <span>{{$order->email}}</span></li>
                                            <li><span>Réservation</span> visible depuis la page <span>mes réservations</span></li>
                                            <li><span>Modifier</span> ou <span>annuler</span> votre réservation <span>gratuitement</span></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 screens-btndiv text-center">
                                        <a href="{{url('reservations')}}" class="screen-btn-success" id="">Mes réservations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screen 7 Ends -->
</main>
@endsection
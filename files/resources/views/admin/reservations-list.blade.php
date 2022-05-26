@extends('layouts.app')
@section('content')
<style>
body{
    background:#fff !important;
}
@media(max-width:767px) and (orientation:landscape) {

.footer-buttons-div {
    display: none !important;
}
}
@media(max-width:767px) and (orientation:portrait) {
        .navbar-brand{
            visibility: hidden;
        }
        .navbar {
            background: transparent !important;
        }
        .footer-buttons-div {
    display: block !important;
}
    }
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <div class="container m-auto p-0 screen__3_container">
                <div class="row m-0 p-0 screen__3_mbl_change">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                        <div class="screen__3_headdiv m-0 screen__3__heading">
                            <h1 class="screen-heading">Mes réservations</h1>
                            <a href="javascript:void(0);" onclick="openAjouterModal()" class="screen__3_topbtn" id="">+
                                Ajouter<span class="screen__3_mblnone"> numéro réservation</span></a>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                        <div class="row m-0 screen-body-pd">
                            <div class="col-sm-12 col-12 px-0 pl-sm-0">
                                <div class="screen__3tabs_anim">
                                    <ul class="nav nav-tabs screen__3tabs_ul">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab_tout_voir" role="tab">Tout voir</a>
                                        </li>
                                        
                                        
                                        @if(isset($bookings))
                                            @if(count($bookings) > 0)
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_a_venir" role="tab">À
                                                venir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_en_cours" role="tab">En
                                                cours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_termine" role="tab">Terminé</a>
                                        </li>
                                        @endif
                                        @endif
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                            @if(isset($bookings))
                                            @if(count($bookings) > 0)
                                            @foreach($bookings as $k=>$v)
                                            @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M");
                                                $date = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $date
                                                );
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M");
                                                $edate = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $edate
                                                );
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                            @endphp
                                            <div>
                                            <a href="{{ url('reservation-details') }}/{{$v->id}}">
                                                <!--  onclick="openBookingDetailsModal({{json_encode($v)}})" -->
                                                <div class="row m-0 screen__3tabs_rowboxouter">
                                                        <div class="col-12">
                                                            <div class="row screen__3tabs_rowboxinner">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                    
                                                                    <div class="row screen__3tabs_rowbox_dsk">
                                                                        <div class="col-3">
                                                                            <h1 class="">Parkme</h1>
                                                                            <p class="">#{{ $v->id }}</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">
                                                                                {{ $date }} - 
                                                                                {{ $edate }}
                                                                                <!-- 27 juin - 5 juilllet -->
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row screen__3tabs_rowbox_mbl">
                                                                        <div class="col-12">
                                                                            <h1 class="">Parkme</h1>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€ | 
                                                                                {{ $date }} - 
                                                                                {{ $edate }}</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="screen__3tabs_ribon">
                                                                    @if($v->status == 1)    
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__green" id="order_id_{{ $v->id }}_status">À VENIR</span>
                                                                    @elseif($v->status == 2)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__orange" id="order_id_{{ $v->id }}_status">EN COURS</span>
                                                                    @elseif($v->status == 3)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red" id="order_id_{{ $v->id }}_status">TERMINÉ</span>
                                                                    @else
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red" id="order_id_{{ $v->id }}_status">Annulé</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                            @endforeach
                                            @else
                                                <div class="row m-0">
                                                    <div class="col-12 text-center">
                                                    <h5 class="font-weight-light">aucune réservation pour le moment, <br /><a 
                                                    class="text-dark font-weight-bold" style="text-decoration:underline !important"
                                                    href="{{ url('') }}">en faire une maintenant</a></h5>
                                                    </div>
                                                </div>
                                            @endif
                                            @endif

                                            @if(\Auth::user())
                                            <div style="margin: auto;display: table;">
                                            {!! $bookings->render() !!}
                                            </div>
                                            @else
                                    
                                                <div class="row m-5">
                                                    <div class="col-12 text-center">
                                                    <h5 class="font-weight-light">pour modifier votre réservation, <br />
                                                    <a 
                                                    class="text-dark font-weight-bold" style="text-decoration:underline !important"
                                                    href="{{ url('register') }}">créer un compte</a>                                                     ou 
                                                    <a 
                                                    class="text-dark font-weight-bold" style="text-decoration:underline !important"
                                                    href="{{ url('login') }}">connectez-vous</a></h5>
                                                    </div>
                                                </div>
                                            @endif


                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_a_venir">
                                            @if(isset($pending_bookings))
                                            @if(count($pending_bookings) > 0)
                                            @foreach($pending_bookings as $k=>$v)
                                            @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M");
                                                $date = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $date
                                                );
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M");
                                                $edate = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $edate
                                                );
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                            @endphp
                                            <div>
                                            <a href="{{ url('reservation-details') }}/{{$v->id}}">
                                            <!-- onclick="openBookingDetailsModal({{json_encode($v)}})" -->
                                                <div class="row m-0 screen__3tabs_rowboxouter" id="order_id_{{ $v->id }}">
                                                        <div class="col-12">
                                                            <div class="row screen__3tabs_rowboxinner">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                    
                                                                    <div class="row screen__3tabs_rowbox_dsk">
                                                                        <div class="col-3">
                                                                            <h1 class="">Parkme</h1>
                                                                            <p class="">#{{ $v->id }}</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">
                                                                                {{ $date }} - 
                                                                                {{ $edate }}
                                                                                <!-- 27 juin - 5 juilllet -->
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row screen__3tabs_rowbox_mbl">
                                                                        <div class="col-12">
                                                                            <h1 class="">Parkme</h1>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€ | 
                                                                                {{ $date }} - 
                                                                                {{ $edate }}</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="screen__3tabs_ribon">
                                                                    @if($v->status == 1)    
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__green">À VENIR</span>
                                                                    @elseif($v->status == 2)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__orange">EN COURS</span>
                                                                    @elseif($v->status == 3)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">TERMINÉ</span>
                                                                    @else
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">Annulé</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </a>

                                            @endforeach
                                            @endif
                                            @endif

                                            @if(\Auth::user())
                                            <div style="margin: auto;display: table;">
                                            {!! $pending_bookings->render() !!}
                                            </div>
                                            @endif
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_cours">                                    
                                            @if(isset($inprogress_bookings))
                                            @if(count($inprogress_bookings) > 0)
                                            @foreach($inprogress_bookings as $k=>$v)
                                            @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M");
                                                $date = str_replace(
                                                    array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $date
                                                );
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M");
                                                $edate = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $edate
                                                );
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                            @endphp
                                            <div>

                                            <a href="{{ url('reservation-details') }}/{{$v->id}}">
                                            <!--  onclick="openBookingDetailsModal({{json_encode($v)}})" -->
                                                <div class="row m-0 screen__3tabs_rowboxouter">
                                                        <div class="col-12">
                                                            <div class="row screen__3tabs_rowboxinner">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                    
                                                                    <div class="row screen__3tabs_rowbox_dsk">
                                                                        <div class="col-3">
                                                                            <h1 class="">Parkme</h1>
                                                                            <p class="">#{{ $v->id }}</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">
                                                                                {{ $date }} - 
                                                                                {{ $edate }}
                                                                                <!-- 27 juin - 5 juilllet -->
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row screen__3tabs_rowbox_mbl">
                                                                        <div class="col-12">
                                                                            <h1 class="">Parkme</h1>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€ | 
                                                                                {{ $date }} - 
                                                                                {{ $edate }}</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="screen__3tabs_ribon">
                                                                    @if($v->status == 1)    
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__green">À VENIR</span>
                                                                    @elseif($v->status == 2)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__orange">EN COURS</span>
                                                                    @elseif($v->status == 3)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">TERMINÉ</span>
                                                                    @else
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">Annulé</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            @endforeach
                                            @endif
                                            @endif

                                            @if(\Auth::user())
                                            <div style="margin: auto;display: table;">
                                            {!! $inprogress_bookings->render() !!}
                                            </div>
                                            @endif
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_termine">
                                            @if(isset($completed_bookings))
                                            @if(count($completed_bookings) > 0)
                                            @foreach($completed_bookings as $k=>$v)
                                            @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M");
                                                $date = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $date
                                                );
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M");
                                                $edate = str_replace(
                                                    array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                    array('janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'),
                                                $edate
                                                );
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                            @endphp
                                            <div>

                                            <a href="{{ url('reservation-details') }}/{{$v->id}}">
                                            <!--  onclick="openBookingDetailsModal({{json_encode($v)}})" -->
                                                <div class="row m-0 screen__3tabs_rowboxouter">
                                                        <div class="col-12">
                                                            <div class="row screen__3tabs_rowboxinner">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-4 px-0 pl-sm-0 screen__3tabs_rowbox_imgdiv">
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-8 px-0 pl-sm-0">
                                                                    
                                                                    <div class="row screen__3tabs_rowbox_dsk">
                                                                        <div class="col-3">
                                                                            <h1 class="">Parkme</h1>
                                                                            <p class="">#{{ $v->id }}</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">
                                                                                {{ $date }} - 
                                                                                {{ $edate }}
                                                                                <!-- 27 juin - 5 juilllet -->
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€</p>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row screen__3tabs_rowbox_mbl">
                                                                        <div class="col-12">
                                                                            <h1 class="">Parkme</h1>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="">{{ str_replace('.',',',$v->price) }}€ | 
                                                                                {{ $date }} - 
                                                                                {{ $edate }}</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <span class="screen__3tabs_rowbox_yellow" id="">Voir</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="screen__3tabs_ribon">
                                                                    @if($v->status == 1)    
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__green">À VENIR</span>
                                                                    @elseif($v->status == 2)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__orange">EN COURS</span>
                                                                    @elseif($v->status == 3)
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">TERMINÉ</span>
                                                                    @else
                                                                    <span class="screen__3tabs_ribon__ screen__3tabs_ribon__red">Annulé</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                            @endforeach
                                            @endif
                                            @endif

                                            @if(\Auth::user())
                                            <div style="margin: auto;display: table;">
                                            {!! $completed_bookings->render() !!}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-auto p-0">
                <div class="row screen__ajouter_main screen__ajouter_dsk_modal">
                    <div class="col-lg-6 offset-lg-3 col-md-12 col-12 screen__ajouter_dsk_custmodal">
                        <div class="row screen-body-pd">
                            <div class="col-sm-12 col-12">
                                <div class="screen03-modalpd screen1page-new">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Ajouter réservation</p>
                                                <a href="javascript:void(0);" onclick="closeAjouterModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="number">Numéro de réservation</label>
                                                        <input type="number" class="form-control form-control-lg form-check-input" id="addreservation_number" name="number" placeholder="Numéro de réservation*" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen4-tabs-div">
                                                    <div class="form-group">
                                                        <label for="email">Adresse e-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" id="addreservation_email" name="phone" placeholder="Adresse e-mail*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen03-modalbtndiv text-center">
                                            <a href="javascript:void(0);" onclick="addreservation_function()" class="screen-btn" id="">Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Details Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_details screen__3detail_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3details_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd screen1page-new">
                                    <div class="row mb-screen-head screen3__Modalpd1">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Détail</p>
                                                <a href="javascript:void(0);" onclick="closeBookingDetailsModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="screen__3facture" id="">Facture</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12">
                                            <div class="screen__3Mdlrows row">
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-4">
                                                    <img src="{{ asset('public/assets/images/parkme_pic.png')}}" class="screen__Mblimg" alt="" />
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-8 col-8 pl-0">
                                                    <h1 class="screen__3Mdlh1">Parkme (#<span id="order_id">1515</span>)</h1>
                                                    <p class="screen__3Mdlp1"><span id="order_airport">Aéroport Toulouse Blagnac</span></p>
                                                </div>
                                            </div>
                                            <div class="row screen3__Mdlhr"></div>
                                            <div class="screen__3Modalpd1 screen__3Mdl_dflx mt-2 row">
                                                <div class="col-1 screen3__Mblmark"></div>
                                                <div class="col-11 screen3__Mblmarkinfo pl-0">
                                                    <h2 class=""><span id="order_date_start">27 juin 2021</span> <span class="" id="order_time_start">05:00</span></h2>
                                                    <h2 class=""><span id="order_date_end">05 juil 2021</span> <span class="" id="order_time_end">15:00</span></h2>
                                                </div>
                                            </div>
                                            <div class="screen__3Modalpd1 mt-4 mb-4 row">
                                                <div class="col-1"></div>
                                                <div class="col-11 pl-0">
                                                    <span class="screen__3Mdltags" id="order_parkme"><img src="images/navette_parkme_pic.png" class="screen__3MdltagsImg1" alt="" />
                                                        Navette Parkme</span>
                                                    <span class="screen__3Mdltags" id="order_service"><img src="images/lavage_exterieur_pic.png" class="screen__3MdltagsImg2" alt="" />
                                                        <span id="order_service_type">Lavage extérieur</span></span>
                                                </div>
                                            </div>
                                            <div class="row screen3__Mdlhr"></div>
                                            <div class="screen__3Modalpd3 row">
                                                <div class="col-1 screen__3dflex"><span class="screen__3Mbldot"></span>
                                                </div>
                                                <div class="col-11 pl-0"><span class="screen__3Mblpric" id="order_total">54,99€</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 screen03-modalbtndiv text-center">
                                            @if(\Auth::user())
                                            <div class="row screen__3Modalpd2">
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" class="screen__3Mblbtn_orange" onclick="openBookingModifierModal()" id="modify_btn">Modifier</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" class="screen__3Mblbtn_red" onclick="openBookingAnnulerModal()" id="cancel_btn">Annuler</a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Modifier Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_modifier screen__3modifier_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3modifier_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd_mod screen1page-new">
                                    <div class="row mb-screen-head screen__3_pd_top">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Modifier</p>
                                                <a href="javascript:void(0);" onclick="closeBookingModifierModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen__3icondiv">
                                            <i class="fa fa-exclamation screen__3icon screen__3iconorange"></i>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="screen__3mod_head">Modifier réservation</h2>
                                        </div>
                                        <div class="col-12">
                                            <ol class="screen__3ol">
                                                <li>Pour modifier, vous devez annuler votre réservation actuelle
                                                    (remboursement 3-5 j)</li>
                                                <li>Faire une nouvelle réservation</li>
                                            </ol>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" onclick="cancelBooking()" class="screen__3Mblbtn_orange" id="">Annuler
                                                réservation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Annuler Modal -->
            <div class="container m-auto p-0">
                <div class="row screen__3Mdl_annuler screen__3annuler_modal">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 screen__3annuler_custommodal">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="screen__3Modalpd_mod screen1page-new">
                                    <div class="row mb-screen-head screen__3_pd_top">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-header-main">
                                                <p class="screen__3Mdlhead">Annuler</p>
                                                <a href="javascript:void(0);" onclick="closeBookingAnnulerModal()" class="screen03-btn-back" id="">
                                                    <i class="fa fa-arrow-left screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen__3icondiv">
                                            <i class="fa fa-exclamation screen__3icon screen__3iconred"></i>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="screen__3mod_head">Annuler réservation</h2>
                                        </div>
                                        <div class="col-12">
                                            <p class="screen__3anu_p">Êtes-vous sur de vouloir annuler votre réservation ? (remboursement 3-5 jours)</p>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" onclick="cancelBooking()" class="screen__3Mblbtn_red" id="">Annuler réservation</a>
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
    </main>
    <script>
        function addreservation_function(){
            $.ajax({
            type: "GET",
            url: "{{url('add-booking-by-id')}}/" + $('#addreservation_number').val() + '/' + $('#addreservation_email').val(),
            success: function(data) {

                var obj = jQuery.parseJSON(data); 
                if(obj.error == true){
                    alert(obj.message);
                }else{
                    // alert('added to the list');
                    location.href = "{{ url('reservations') }}";
                }
            },
            error: function() {
                alert('Unable to add this order - Please contact system administrator');
            }
            });
        }
        // Screen_1 Mes Reservation
        function openAjouterModal() {
            $(".screen__ajouter_main").attr('style', 'visibility: visible;');
            $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(0%);');
        }
        function closeAjouterModal() {
            $(".screen__ajouter_main").attr('style', 'visibility: hidden;');
            $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(100%);');
        }    
        function openBookingDetailsModal(data) {
            console.log(data);
            $('#order_id').html(data.id);
            $('#order_date_start').html(data.start_date);
            $('#order_date_end').html(data.end_date);
            $('#order_time_start').html(data.start_time);
            $('#order_time_end').html(data.end_time);
            if(data.airport == null){
                $('#order_airport').html("N/A");    
            }else{
                $('#order_airport').html(data.airport);
            }
            if(data.service_type == null){
                $('#order_service').hide();
            }else{
                $('#order_service_type').html(data.service_type);
                $('#order_service').show();
            }
            if(data.status == 1){
                $('#modify_btn').show();
                $('#cancel_btn').show();
            }else{
                $('#modify_btn').hide();
                $('#cancel_btn').hide();
            }
            $('#order_total').html(data.price+'€');
            $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
        }
        function closeBookingDetailsModal() {
            $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
        }
        function openBookingModifierModal() {
            $(".screen__3Mdl_modifier").attr('style', 'visibility: visible;');
            $(".screen__3modifier_custommodal").attr('style', 'transform: translateY(0%);');
            // Close the previous details modal
            $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
        }
        function closeBookingModifierModal() {
            $(".screen__3Mdl_modifier").attr('style', 'visibility: hidden;');
            $(".screen__3modifier_custommodal").attr('style', 'transform: translateY(100%);');
            // Again opening the details modal
            $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
        }
        function openBookingAnnulerModal() {
            $(".screen__3Mdl_annuler").attr('style', 'visibility: visible;');
            $(".screen__3annuler_custommodal").attr('style', 'transform: translateY(0%);');
            // Close the previous details modal
            $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
        }
        function closeBookingAnnulerModal() {
            $(".screen__3Mdl_annuler").attr('style', 'visibility: hidden;');
            $(".screen__3annuler_custommodal").attr('style', 'transform: translateY(100%);');
            // Again opening the details modal
            $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
            $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
        }
        function cancelBooking(){
            var order_id = $('#order_id').html();
            $.ajax({
            type: "GET",
            url: "{{url('cancel-booking-by-id')}}/" + order_id,
            success: function(data) {
                var obj = jQuery.parseJSON(data); 
                // if the dataType is not specified as json uncomment this
                // do what ever you want with the server response
                if(obj.error == true){
                    alert(obj.message);
                    closeBookingAnnulerModal();
                    closeBookingDetailsModal();
                    closeBookingModifierModal();
                    closeBookingDetailsModal();
                    document.location.href="";
                }else{
                    $("#order_id_"+ order_id +"_status").html('Annulé');
                    $("#order_id_"+ order_id).fadeOut('slow');
                    closeBookingAnnulerModal();
                    closeBookingDetailsModal();
                    closeBookingModifierModal();
                    closeBookingDetailsModal();
                    document.location.href="";
                }
            },
            error: function() {
                $('#editFormSuccess').hide();
                $('#editFormAnnulé').show();

            document.location.href="";
            }
            });
        }
        var screen_width = screen.width;
        var screen_height = screen.height;
        $(document).ready(function () {
            if (screen_width <= 767) {
                // For Screen__3 tabs animation
            $('.screen__3tabs_ul a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
            var $old_tab = $($(e.target).attr("href"));
            var $new_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() < $old_tab.index()) {
                $old_tab.css('position', 'relative').css("right", "0").show();
                $old_tab.animate({ "right": "-100%" }, 300, function () {
                    $old_tab.css("right", 0).removeAttr("style");
                });
            }
            else {
                $old_tab.css('position', 'relative').css("left", "0").show();
                $old_tab.animate({ "left": "-100%" }, 300, function () {
                    $old_tab.css("left", 0).removeAttr("style");
                });
            }
        });

        $('.screen__3tabs_ul a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $new_tab = $($(e.target).attr("href"));
            var $old_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() > $old_tab.index()) {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $('.screen__3tabs_ul .nav-link.active');
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) + 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("right", "-2500px");
                $new_tab.animate({ "right": "0" }, 500, 'linear');
            }
            else {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $old_tab;
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) - 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("left", "-2500px");
                $new_tab.animate({ "left": "0" }, 500, 'linear');
            }
        });
    }
});
    </script>
@endsection
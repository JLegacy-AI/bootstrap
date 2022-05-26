@extends('layouts.app')
@section('content')
<style>
body{
    background:#fff !important;
}
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <div class="container m-auto p-0 screen__3_container">
                <div class="row m-0 p-0 screen__3_mbl_change">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                        <div class="screen__3_headdiv m-0 screen__3__heading">
                            <h1 class="screen-heading">All Reservations</h1>
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
                                            <a class="nav-link active" data-toggle="tab" href="#tab_tout_voir" role="tab">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_a_venir" role="tab">Pending</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_en_cours" role="tab">In-Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_termine" role="tab">Finished</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_anuler" role="tab">Cancelled</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                        <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                            <th scope="col" width="5%">#</th>
                                            <th scope="col" width="15%">Start Date</th>
                                            <th scope="col" width="15%">End Date</th>
                                            <th scope="col" width="10%">Service</th>
                                            <th scope="col" width="10%">Price</th>
                                            <th scope="col" width="20%">User Details</th>
                                            <th scope="col" width="10%">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($bookings) && count($bookings) > 0)
                                                @foreach($bookings as $k=>$v)
                                                @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M, Y");
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M, Y");
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                                @endphp
                                                    <tr>
                                                    <th scope="row">{{$v['id']}}</th>
                                                    <td>{{$date}}<br />{{ $v->start_time }}</td>
                                                    <td>{{$edate}}<br />{{ $v->end_time }}</td>
                                                    <td>{{$v['service']??'N/A'}}</td>
                                                    <td>&euro; {{$v['price']}}</td>
                                                    <td>{{$v['name']}}<br />{{$v['email']}}<br />{{$v['phone']}}</td>
                                                    <td>
                                                    @if($v['status'] == 1)
                                                        <div class="badge badge-info px-3 py-2">Pending</div>
                                                    @elseif($v['status'] == 2)
                                                        <div class="badge badge-warning px-3 py-2">In-Progress</div>
                                                    @elseif($v['status'] == 3)
                                                        <div class="badge badge-success px-3 py-2">Finished</div>
                                                    @else
                                                        <div class="badge badge-danger px-3 py-2">Cancelled</div>
                                                    @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan=7>No Record Found</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                            </table>
                                        </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_a_venir">
                                        <div class="table-responsive">

                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">User Details</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                    
                                            @if(isset($pending_bookings) && count($pending_bookings) > 0)
                                                @foreach($pending_bookings as $k=>$v)
                                                @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M, Y");
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M, Y");
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                                @endphp
                                                    <tr>
                                                    <th scope="row">{{$v['id']}}</th>
                                                    <td>{{$date}}<br />{{ $v->start_time }}</td>
                                                    <td>{{$edate}}<br />{{ $v->end_time }}</td>
                                                    <td>{{$v['service']??'N/A'}}</td>
                                                    <td>&euro; {{$v['price']}}</td>
                                                    <td>{{$v['name']}}<br />{{$v['email']}}<br />{{$v['phone']}}</td>
                                                    <td>
                                                    @if($v['status'] == 1)
                                                        <div class="badge badge-info px-3 py-2">Pending</div>
                                                    @elseif($v['status'] == 2)
                                                        <div class="badge badge-warning px-3 py-2">In-Progress</div>
                                                    @elseif($v['status'] == 3)
                                                        <div class="badge badge-success px-3 py-2">Finished</div>
                                                    @else
                                                        <div class="badge badge-danger px-3 py-2">Cancelled</div>
                                                    @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan=7>No Record Found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                        </table>
                                        </div>

                                            <div style="margin: auto;display: table;">
                                            {!! $pending_bookings->render() !!}
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_cours">
                                        <div class="table-responsive">

                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">User Details</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                           
                                        @if(isset($inprogress_bookings) && count($inprogress_bookings) > 0)
                                                @foreach($inprogress_bookings as $k=>$v)
                                                @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M, Y");
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M, Y");
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                                @endphp
                                                    <tr>
                                                    <th scope="row">{{$v['id']}}</th>
                                                    <td>{{$date}}<br />{{ $v->start_time }}</td>
                                                    <td>{{$edate}}<br />{{ $v->end_time }}</td>
                                                    <td>{{$v['service']??'N/A'}}</td>
                                                    <td>&euro; {{$v['price']}}</td>
                                                    <td>{{$v['name']}}<br />{{$v['email']}}<br />{{$v['phone']}}</td>
                                                    <td>
                                                    @if($v['status'] == 1)
                                                        <div class="badge badge-info px-3 py-2">Pending</div>
                                                    @elseif($v['status'] == 2)
                                                        <div class="badge badge-warning px-3 py-2">In-Progress</div>
                                                    @elseif($v['status'] == 3)
                                                        <div class="badge badge-success px-3 py-2">Finished</div>
                                                    @else
                                                        <div class="badge badge-danger px-3 py-2">Cancelled</div>
                                                    @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan=7>No Record Found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                        </table>
                                        </div>

                                        <div style="margin: auto;display: table;">
                                            {!! $inprogress_bookings->render() !!}
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_termine">
                                        <div class="table-responsive">

                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">User Details</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                        
                                        @if(isset($completed_bookings) && count($completed_bookings) > 0)
                                                @foreach($completed_bookings as $k=>$v)
                                                @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M, Y");
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M, Y");
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                                @endphp
                                                    <tr>
                                                    <th scope="row">{{$v['id']}}</th>
                                                    <td>{{$date}}<br />{{ $v->start_time }}</td>
                                                    <td>{{$edate}}<br />{{ $v->end_time }}</td>
                                                    <td>{{$v['service']??'N/A'}}</td>
                                                    <td>&euro; {{$v['price']}}</td>
                                                    <td>{{$v['name']}}<br />{{$v['email']}}<br />{{$v['phone']}}</td>
                                                    <td>
                                                    @if($v['status'] == 1)
                                                        <div class="badge badge-info px-3 py-2">Pending</div>
                                                    @elseif($v['status'] == 2)
                                                        <div class="badge badge-warning px-3 py-2">In-Progress</div>
                                                    @elseif($v['status'] == 3)
                                                        <div class="badge badge-success px-3 py-2">Finished</div>
                                                    @else
                                                        <div class="badge badge-danger px-3 py-2">Cancelled</div>
                                                    @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan=7>No Record Found</td>
                                                </tr>
                                            @endif
           
                                        </tbody>
                                        </table>                               
                                        </div>

                                        <div style="margin: auto;display: table;">
                                            {!! $completed_bookings->render() !!}
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="tab_anuler">
                                        <div class="table-responsive">

                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">User Details</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                        
                                        @if(isset($failed_bookings) && count($failed_bookings) > 0)
                                                @foreach($failed_bookings as $k=>$v)
                                                @php 
                                                $date = str_replace('/','-',$v->start_date);
                                                $date = @date_create($date);
                                                $date = @date_format($date, "d M, Y");
                                                $v->start_date = $date;
                                                $v->price = str_replace('.',',',$v->price);
                                                $v->start_time = str_replace('      ', ':', $v->start_time);

                                                $edate = str_replace('/','-',$v->end_date);
                                                $edate = @date_create($edate);
                                                $edate = @date_format($edate, "d M, Y");
                                                $v->end_date = $edate;
                                                $v->end_time = str_replace('      ', ':', $v->end_time);
                                                @endphp
                                                    <tr>
                                                    <th scope="row">{{$v['id']}}</th>
                                                    <td>{{$date}}<br />{{ $v->start_time }}</td>
                                                    <td>{{$edate}}<br />{{ $v->end_time }}</td>
                                                    <td>{{$v['service']??'N/A'}}</td>
                                                    <td>&euro; {{$v['price']}}</td>
                                                    <td>{{$v['name']}}<br />{{$v['email']}}<br />{{$v['phone']}}</td>
                                                    <td>
                                                    @if($v['status'] == 1)
                                                        <div class="badge badge-info px-3 py-2">Pending</div>
                                                    @elseif($v['status'] == 2)
                                                        <div class="badge badge-warning px-3 py-2">In-Progress</div>
                                                    @elseif($v['status'] == 3)
                                                        <div class="badge badge-success px-3 py-2">Finished</div>
                                                    @else
                                                        <div class="badge badge-danger px-3 py-2">Cancelled</div>
                                                    @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan=7>No Record Found</td>
                                                </tr>
                                            @endif
           
                                        </tbody>
                                        </table>                               
                                        </div>

                                        <div style="margin: auto;display: table;">
                                            {!! $failed_bookings->render() !!}
                                            </div>
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
@endsection
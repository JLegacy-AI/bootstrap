@extends('layouts.app')
@section('content')
<style>
body{
    background:#fff !important;
}
.screen__4Mdl_timeslot{
    visibility:hidden;
}
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen__1" class="">
            <div class="container m-auto p-0 screen__3_container">
                <div class="row m-0 p-0 screen__3_mbl_change">
                    <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                        <div class="screen__3_headdiv m-0 screen__3__heading">
                            <h1 class="screen-heading">General Settings</h1>

                            <a href="javascript:void(0);" class="screen__3_topbtn" id="" onclick="openTimeslotModal()" id="">+
                                            Add<span class="screen__3_mblnone"> New Timeslot</span></a>
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
                                            <a class="nav-link" href="{{url('general-settings')}}" role="tab">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="{{url('general-settings/airports')}}" role="tab">Manage Airports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active"  href="{{url('general-settings/timeslots')}}" role="tab">Manage Timeslots</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_en_cours">

                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                                <ul style="list-style:none;padding:0;margin:0">
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <ul style="list-style:none;padding:0;margin:0">
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
                                            <div class="table-responsive">
                                                <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">End Date</th>
                                                    <th scope="col">Total Capacity</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($timeslots) && count($timeslots) > 0)
                                                        @foreach($timeslots as $k=>$v)
                                                            <tr>
                                                            <th scope="row">{{$v['id']}}</th>
                                                            <td>{{$v['start_date']}}</td>
                                                            <td>{{$v['end_date']}}</td>
                                                            <td>{{$v['total_capacity']}}</td>
                                                            <td><a href="{{ url('general-settings/timeslots/delete') }}/{{ $v['id'] }}" onclick="return confirm('Are you sure you want to delete this?')">delete</a></td>
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
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen 1 Ends -->
 
        <div class="row screen__4Mdl_timeslot screen__4contactor_modal">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12 px-md-3 px-0 screen__4timeslot_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Add New Timeslot</p>
                                            <a href="javascript:void(0);" onclick="closeTimeslotModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen03-icon-dsk screen-back-icon" aria-hidden="true"></i>
                                                <i class="fa fa-arrow-left screen03-icon-mbl screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ url('general-settings/timeslots') }}">
                                    @csrf    
                                    <div class="row m-0 p-0 screen__4contactordiv">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="firstname">Total Capacity</label>
                                                <input type="number" class="form-control form-control-lg form-check-input" value="80" name="total_capacity" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                            <div class="form-group">
                                                <label for="name">Start Date</label>
                                                <input type="date" class="form-control form-control-lg form-check-input" name="start_date" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="number">End Date</label>
                                                <input type="date" class="form-control form-control-lg form-check-input" name="end_date" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                                <button type="submit" class="screen__4enregistrer">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <script>
        function openTimeslotModal() {
            $(".screen__4Mdl_timeslot").attr('style', 'visibility: visible;');
            $(".screen__4timeslot_custommodal").attr('style', 'transform: translateY(0%);');
        }
        function closeTimeslotModal() {
            $(".screen__4Mdl_timeslot").attr('style', 'visibility: hidden;');
            $(".screen__4timeslot_custommodal").attr('style', 'transform: translateY(100%);');
        }
        </script>
    </main>
@endsection
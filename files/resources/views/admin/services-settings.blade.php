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
                            <h1 class="screen-heading">Services Settings</h1>
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
                                            <a class="nav-link active" href="{{ url('services-settings') }}" role="tab">Parking Charges</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('services-settings/car-wash') }}" role="tab">Car Wash Charges</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                        
                                            <form method="POST" action="{{ url('post-services-settings') }}">
                                            @csrf    
                                                            <div class="row m-0 p-0">
                                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="firstname">For One Day</label>
                                                                        <input type="number" name="parking_charges" class="form-control form-control-lg form-check-input" value="{{ $settings->parking_charges }}" placeholder="14.99" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="name">For Extra Days ( + Per Day )</label>
                                                                        <input type="number" name="extra_day_charges" class="form-control form-control-lg form-check-input" value="{{ $settings->extra_day_charges }}" placeholder="5.00" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv">
                                                                    <button type="submit" class="screen__4enregistrer" name="submit">Save</button>
                                                                </div>
                                                            </div>
                                                            @if (\Session::has('success'))
                                                            <div class="alert alert-success">
                                                                    <ul style="list-style:none">
                                                                        <li>{!! \Session::get('success') !!}</li>
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            @if (\Session::has('error'))
                                                            <div class="alert alert-danger">
                                                                    <ul style="list-style:none">
                                                                        <li>{!! \Session::get('error') !!}</li>
                                                                    </ul>
                                                                </div>
                                                            @endif
                                            </form>
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
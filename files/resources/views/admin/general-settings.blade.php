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
                            <h1 class="screen-heading">General Settings</h1>
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
                                            <a class="nav-link active" href="{{url('general-settings')}}" role="tab">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="{{url('general-settings/airports')}}" role="tab">Manage Airports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="{{url('general-settings/timeslots')}}" role="tab">Manage Timeslots</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                        
                                            <form method="POST" action="{{ url('general-settings') }}" enctype="multipart/form-data">
                                                            @csrf    
                                                            <div class="row m-0 p-0">
                                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="firstname">Application Name</label>
                                                                        <input  type="text" name="application_name" class="form-control form-control-lg form-check-input" value="{{ $settings->application_name }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="name">Application Logo</label>
                                                                        <input type="file" name="application_logo" class="form-control form-control-lg form-check-input" />

                                                                        <img src="{{$settings->application_logo}}" alt="" width="100" style="background:#000;padding:15px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="number">Admin Email</label>
                                                                        <input  type="email" name="admin_email" class="form-control form-control-lg form-check-input" value="{{ $settings->admin_email }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="number">Contact</label>
                                                                        <input  type="text" name="contact" class="form-control form-control-lg form-check-input" value="{{ $settings->contact }}" />
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="number">Default Currency</label>
                                                                        <input  type="text" name="currency" class="form-control form-control-lg form-check-input" value="{{ $settings->currency }}" />
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="email">Copyright ( Footer )</label>
                                                                        <input  type="text" name="copyright" class="form-control form-control-lg form-check-input" value="{{ $settings->copyright }}" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="number">Facebook Url</label>
                                                                        <input  type="text" name="fb_link" class="form-control form-control-lg form-check-input" value="{{ $settings->fb_link }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="number">Instagram Url</label>
                                                                        <input  type="text" name="insta_link" class="form-control form-control-lg form-check-input" value="{{ $settings->insta_link }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="email">Promo Text ( Header )</label>
                                                                        <input type="text" name="promo_text" class="form-control form-control-lg form-check-input" value="{{ $settings->promo_text }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="email">Description ( SEO )</label>
                                                                        <textarea name="description" class="form-control form-control-lg form-check-input">{{ $settings->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="email">Keywords ( SEO )</label>
                                                                        <input type="text" name="keywords" class="form-control form-control-lg form-check-input" value="{{ $settings->keywords }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 mt-4">
                                                                    <h5>Sharing Settings: </h5>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="firstname">Og:title</label>
                                                                        <input  type="text" name="og_title" class="form-control form-control-lg form-check-input" value="{{ $settings->og_title }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="name">Og:image</label>
                                                                        <input name="og_image" type="file" class="form-control form-control-lg form-check-input" />
                                                                        <img src="{{$settings->og_image}}" alt="" width="100" style="background:#000;padding:15px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                                                    <div class="form-group">
                                                                        <label for="email">Og:description</label>
                                                                        <textarea name="og_description" class="form-control form-control-lg form-check-input">{{ $settings->og_description }}</textarea>
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
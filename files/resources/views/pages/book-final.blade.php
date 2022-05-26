@extends('layouts.app')
@section('content')
<style>
    .hompage_bg {
        background: #f1f2f2 !important;
    }

    .navbar {
        background: #000 !important;
    }

    .footer-buttons-div {
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
<!-- <div class="row">
    <div class="col-sm-12 col-12">
        <div class="section1-header">
            @if(session()->has('success_message'))
            <div class="alert alert-success" id="success_msg" style="background-color:'#fcc916'">
                {{ session()->get('success_message') }}
            </div>
            @endif
            @if(session()->has('failed_message'))
            <div class="alert alert-danger" id="failed_msg" style="background-color:'#fcc916'">
                {{ session()->get('failed_message') }}
            </div>
            @endif
        </div>
    </div>
</div> -->
<main>
    <!-- @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif -->
    <form method="post" class="needs-validation" action="{{route('paypal_payment')}}" id="stripe-form" onSubmit="document.getElementById('btn-screen7').disabled=true; return true;">
        {{csrf_field()}}
        <input type="hidden" name="total" value="{{ session()->get('services_charges')+session()->get('parking_charges') }}" />
        <input type="hidden" name="days_difference" value="{{ session()->get('days_difference') }}" />
        <input type="hidden" name="parking_charges" value="{{ session()->get('parking_charges') }}" />
        <input type="hidden" name="service[]" value="{{ session()->get('service_type') }}" />
        <input type="hidden" name="service_type" value="{{ session()->get('service_type') }}" />
        <input type="hidden" name="services_charges" value="{{ session()->get('services_charges') }}" />
        <input type="hidden" name="airport" value="{{ session()->get('airport') }}" />
        <input type="hidden" name="start_date" value="{{ session()->get('start_date') }}" />
        <input type="hidden" name="start_time" value="{{ session()->get('start_time') }}" />
        <input type="hidden" name="end_date" value="{{ session()->get('end_date') }}" />
        <input type="hidden" name="end_time" value="{{ session()->get('end_time') }}" />

        <section id="screen3">@include('booking.screen3')</section>
        <section id="screen4" style="display:none;">@include('booking.screen4')</section>
        <section id="screen5" style="display:none;">@include('booking.screen5')</section>
        <section id="screen6" style="display:none;">@include('booking.screen6')</section>
    </form>
</main>
@endsection
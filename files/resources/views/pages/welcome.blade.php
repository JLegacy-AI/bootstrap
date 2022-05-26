@extends('layouts.app')
@section('content')

<div class="row">
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
</div>
<main>
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form method="post" class="needs-validation" action="{{route('paypal_payment')}}" id="stripe-form"
            onSubmit="document.getElementById('btn-screen7').disabled=true; return true;"
            >
        {{csrf_field()}}
        <input type="hidden" id="total_amt" name="total" value="0"/>
        <input type="hidden" id="days_difference" name="days_difference" value="0"/>
        <input type="hidden" id="parking_charges" name="parking_charges" value="0"/>
        <input type="hidden" id="service_type" name="service_type" value="0"/>
        <input type="hidden" id="services_charges" name="services_charges" value="0"/>
        <section id="index"  data-aos="fade-up" data-aos-duration="1000" class="index-section-new">@include('booking.index')</section>
            <section id="screen1" style="display:none;">@include('booking.screen1')</section>
            <section id="screen2" style="display:none;">@include('booking.screen2')</section>
            <!-- <form role="form" action="{{ route('stripe.post') }}" method="post"
                    class="require-validation" data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                @csrf -->
                <section id="screen3" style="display:none;">@include('booking.screen3')</section>
                <section id="screen4" style="display:none;">@include('booking.screen4')</section>
                <section id="screen5" style="display:none;">@include('booking.screen5')</section>
                <section id="screen6" style="display:none;">@include('booking.screen6')</section>
            <!-- </form> -->
            <section id="screen7"></section>
            <section id="footer">
                @include('layouts.footer')
            </section>
    </form>
</main>

@endsection


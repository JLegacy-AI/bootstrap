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
    <section id="screen1">@include('booking.screen1')</section>
    <section id="screen2" style="display:none;">@include('booking.screen2')</section>
</main>
@endsection
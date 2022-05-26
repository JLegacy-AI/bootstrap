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
    <form id="mainForm" method="post" action="{{ url('book') }}">
        {{csrf_field()}}
        <section id="index"  data-aos="fade-up" data-aos-duration="1000" class="index-section-new">@include('booking.index')</section>
        <section id="footer">
            @include('layouts.footer')
        </section>
    </form>



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
                                                <a href="javascript:void(0);" onclick="closeBookingAnnulerModal()" class="screen03-btn-back" style="left:unset; right:0; top:5px" id="">
                                                    <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen__3icondiv">
                                            <img src="{{ url('public/img/capture.png') }}" width="55%" alt="">
                                        </div>
                                        <div class="col-12">
                                            <h2 class="screen_mdl_parking_comp_h2">Parking Complet</h2>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="screen_mdl_parking_comp_h4">Nous sommes désolés, Parkme est complet durant vos dates...</h4>
                                        </div>
                                        <div class="col-12 screens-btndiv text-center">
                                            <a href="javascript:void(0);" onclick="closeBookingAnnulerModal()" class="screen__3Mblbtn_red" style="background:black; border:none;" id="">Changer date</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</main>
<script>
$('#validateForm').on('click',function(e){
    // all checks here
    if ($("#airport").val() == null) {
        $("#airportError").show();
        $('.airport_name').html("NULL")
    } else {
        $('.airport_name').html($("#airport").val())
    }
    if ($("#arrivalDate").val() == "") {
        $("#arrivalError").show();
    } else {
        $("#arrivalError").hide();
    }
    if ($("#arriveeTime").val() == null) {
        $("#arrivalTimeError").show();
    } else {
        $("#arrivalTimeError").hide();
    }
    if ($("#departureDate").val() == "") {
        $("#departError").show();
    } else {
        $("#departError").hide();
    }
    if ($("#departTime").val() == null) {
        $("#departTimeError").show();
    } else {
        $("#departTimeError").hide();
    }
    if ($("#departureDate").val() != "" && $("#arrivalDate").val() != "" && $('#airport').val() != null && $('#departTime').val() != null && $('#arriveeTime').val() != null) {
        $.post("book/check-availibility", {
            start_date : $('#arrivalDate').val(),
            start_time: $('#arriveeTime').val(),
            end_date : $('#departureDate').val(),
            end_time: $('#departTime').val()
        }, function(data, status){
            var response = JSON.parse(data);
            if(response.isAvailable){           
                $('#mainForm').submit();     
            }else{
                openBookingAnnulerModal();
            }
        });
    }
})
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
</script>
@endsection


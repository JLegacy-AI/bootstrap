@extends('layouts.app')
@section('content')
<style>
    .navbar {
        background: #000 !important;
    }

    #demo_timer {
        box-shadow: 0px 2px 1px rgb(0 0 0 / 50%);
    }

    @media(max-width:767px) {
        .navbar {
            background: #fbd220 !important;
        }

        .hompage_bg {
            background: #fff !important;
        }
    }

    @media(max-width:767px) and (orientation:portrait) {

        .navbar,
        .footer-buttons-div {
            display: none !important;
        }
    }

    @media(max-width:767px) and (orientation:landscape) {

        #demo_timer,
        .new_navbar_desktop {
            display: flex !important;
        }

        .new_navbar_mobile {
            display: none !important;
        }

        .navbar {
            background: #000 !important;
        }
    }

    @media (max-width: 600px) and (max-height: 600px) {

        #demo_timer,
        .navbar,
        .screen__hcsearchbtn {
            display: none !important;
        }

        .screen__hcheadmbl {
            display: block !important;
        }
    }
</style>

<main>
    <!-- Screen 1 Starts -->
    <section id="screen_01" class="">
        <input type="hidden" id="screen__helpcenterpage_inp" value="1" />
        <div class="container screenhcw-100 m-auto p-0">
            <div class="row m-0 screen__hcyellow">
                <div class="col-lg-12 col-md-12 col-12 px-md-3 px-0">
                    <div class="row m-0 p-0 screen__hcheadmbl">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="screen__dsplyflexcenter m-0 scree__hcs_hmbl">
                                <a href="{{ url('/') }}" onclick="" class="screen__hc_btncross" id="">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <h1 class="screen__hcheadingmbl">Centre d’aide</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 px-md-3">
                            <div class="screen__dsplyflexcenter m-0">
                                <h1 class="screen__hcheading">Comment pouvons-nous vous aider ?</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 px-md-3">
                            <div class="input-group screen__hcinputgroup">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="{{ asset('public/assets/images/helpcenter-search-icon.png') }}" class="screen__hcinputimg" /></span>
                                </div>
                                <input type="text" class="form-control form-control-lg form-check-input" autocomplete="off" placeholder="Essayez «navette»" id="screen_hs_inputsearch" name="search">
                                <button class="screen__hcsearchbtn" id="">RECHERCHER</button>
                                <div class="screen__hcsearchbox">
                                    <a href="#" class="row screen__hcsearchboxrow">
                                        <div class="col-12 p-0 screen__hcsearchboxdiv">
                                            <div class="screen__hcsearchboximg">
                                                <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                            </div>
                                            <div class="screen__hcsearchboxpdiv">
                                                <p class="screen__hcsearchboxp1">Premier pas</p>
                                                <p class="screen__hcsearchboxp2">Parkme, c’est quoi ?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="row screen__hcsearchboxrow">
                                        <div class="col-12 p-0 screen__hcsearchboxdiv">
                                            <div class="screen__hcsearchboximg">
                                                <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                            </div>
                                            <div class="screen__hcsearchboxpdiv">
                                                <p class="screen__hcsearchboxp1">Premier pas</p>
                                                <p class="screen__hcsearchboxp2">Comment ça marche ?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="row screen__hcsearchboxrow">
                                        <div class="col-12 p-0 screen__hcsearchboxdiv">
                                            <div class="screen__hcsearchboximg">
                                                <img src="public/assets/images/HELPCENTER-A.png" class="" />
                                            </div>
                                            <div class="screen__hcsearchboxpdiv">
                                                <p class="screen__hcsearchboxp1">Premier pas</p>
                                                <p class="screen__hcsearchboxp2">Mon véhicule est-il sécurisé à Parkme ?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                            <div class="screen__dsplyflexcenter m-0">
                                <h1 class="screen__hcsujets">Sujets récurrents: <a href="javascript:void(0);" class="" id="">support,</a> <a href="javascript:void(0);" class="" id="">localisation,</a> <a href="javascript:void(0);" class="" id="">annulation</a></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 p-0">
                    <div class="row m-0 p-0 screen__hcheadmbl">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                            <h2 class="screen__hcaccorhead">Tout les sujets</h2>
                        </div>
                    </div>
                    <div class="row m-0 p-0 screen__hcaccordiondiv">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @foreach($helpcentercategories as $k=>$v)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="{{ 'helpcenter'.$k}}">
                                        <h4 class="panel-title">
                                            <a class="collapsed" style="background-image: url({{ url('').'/public/uploads/'.$v->category_icon}});" data-toggle="collapse" data-parent="#accordion" href="{{ '#hc_heading'.$k}}" aria-expanded="false" aria-controls="{{ 'hc_heading'.$k}}">
                                                <span>{{$v->category_name}}</span>
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="{{ 'hc_heading'.$k}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ 'helpcenter'.$k}}">
                                        <div class="panel-body">
                                            <ul class="screen__hcul">
                                                @foreach($helpcentercontent as $kk=>$vv)
                                                @if($vv->helpcentercategory->category_id == $v['category_id'])
                                                <li><a href="{{ url('help-center/'.$v['category_slug'].'/'.$vv['slug'])}}">{{$vv['title']}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
    $("#screen_hs_inputsearch").click(function(e) {
        e.stopPropagation();
        $(".screen__hcsearchbox").attr('style', 'display: block');
    });
    $(document).on('click', function(e) {
        if (($(e.target).attr('class') != $(".screen__hcsearchbox").attr('class'))) {
            $(".screen__hcsearchbox").attr('style', 'display: none');
        }
    });
</script>
@endsection
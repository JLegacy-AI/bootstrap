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
</style>

<main>
    <!-- Screen 1 Starts -->
    <section id="screen_01" class="">
        <input type="hidden" id="screen__helpcenterpage_inp" value="1" />
        <div class="container screenhcw-100 m-auto p-0">
            <div class="row m-0 screen__hcsingleyellow">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="screen__dsplyflexcenter m-0 scree__hcs_hmbl">
                                <a href="{{ url('help-center') }}" class="screen__hcs_btncross" id="">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <h1 class="screen__hcheadingmbl">{{$helpcentercontent['title']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 p-0">
                    <div class="row m-0 p-0 screen__hcsinglediv">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 screen__hccontentdiv">
                            {!! $helpcentercontent['content'] !!}
                        </div>
                        @if($helpcentercontentcount > 1)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <h1 class="screen__hcsingleheading">Questions similaires</h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <ul class="screen__hcsingleul">
                                @foreach($helpcentercontentall as $kk=>$vv)
                                @if($vv->helpcentercategory->category_id == $helpcentercontent['category_id'] && $vv->id != $helpcentercontent['id'])
                                <li><a href="{{ url('help-center/'.$vv->helpcentercategory->category_slug.'/'.$vv['slug'])}}">{{$vv['title']}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screen 1 Ends -->
</main>
@endsection
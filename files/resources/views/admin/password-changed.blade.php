@extends('layouts.app')
@section('content')
<style>
.navbar{
    display:none;
}
#demo_timer{
    display:none;
}
</style>
    <main>
        <!-- Screen 1 Starts -->
        <section id="screen_01" class="">
            <div class="container screen__resetpass_confirm d-block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 screen__connx_div">
                        <div class="screen__connx_yellow">
                            <h1 class="">Confirmer votre e-mail</h1>
                        </div>
                        <div class="screen__connx_white">
                            <div class="screen02-head-mbl">
                                <h1 class="">Confirmer votre e-mail</h1>
                            </div>
                            <div class="screen02-body-mbl">
                                <div class="pd-screen screen1page-new m-0">
                                    <div class="row mb-screen-head">
                                        <div class="col-sm-12 col-12" id="">
                                            <div class="screen-pass-header-main">
                                                <p class="screen1-fontwt-600 screenfont-size-20">Vérifier votre e-mail</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="">
                                        <div class="col-12 screen4-info-div">
                                            <div class="screen4-tabs row">
                                                <div class="col-12 screen-frgt-tabs-div">
                                                    <i class="fa fa-check screen-frgtcheck-icon"></i>
                                                </div>
                                                <div class="col-12 screen4-tabs-div">
                                                    <p class="screen_frgtdetails_p1">Nous avons envoyé un mail afin de confirmer votre adresse e-mail.</p>
                                                </div>
                                                <div class="col-12 screen4-tabs-div">
                                                    <p class="screen_frgtdetails_p2">Vous n'avez pas reçu l'e-mail ? Vérifiez votre filtre anti-spam, ou <a href="javascript:void(0);" class="">essayez une autre adresse e-mail</a></p>
                                                </div>
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
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
                            <h1 class="screen-heading">Support Tickets</h1>
                            <a href="javascript:void(0);" class="screen__3_topbtn" id="">+
                                Add<span class="screen__3_mblnone"> New Ticket</span></a>
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
                                            <a class="nav-link active" data-toggle="tab" href="#tab_tout_voir" role="tab">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_a_venir" role="tab">Awaiting Reply</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_en_cours" role="tab">In-Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab_termine" role="tab">Closed</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content screen__3tabs_con">
                                        <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                        
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_a_venir">
                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_cours">
                                            <div></div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_termine">
                                            
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
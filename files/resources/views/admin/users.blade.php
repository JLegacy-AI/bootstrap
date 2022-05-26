@extends('layouts.app')
@section('content')
<style>
    body {
        background: #fff !important;
    }
</style>
<main>
    <!-- Screen 1 Starts -->
    <section id="screen__1" class="">
        <div class="container m-auto p-0 screen__3_container">
            <div class="row m-0 p-0 screen__3_mbl_change">
                <div class="col-lg-12 col-md-12 col-12 px-md-3 px-1">
                    <div class="screen__3_headdiv m-0 screen__3__heading">
                        <h1 class="screen-heading">Active Users</h1>
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
                                        <a class="nav-link" data-toggle="tab" href="#tab_a_venir" role="tab">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_en_cours" role="tab">Pending Verification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_termine" role="tab">Blocked</a>
                                    </li>
                                </ul>

                                <div class="tab-content screen__3tabs_con">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tab_tout_voir">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">User Role</th>
                                                        <th scope="col">Total Orders</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($users) && count($users) > 0)
                                                    @foreach($users as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v['name']}} {{$v['lname']}}</td>
                                                        <td>{{$v['email']}}</td>
                                                        <td>{{$v['phone']}}</td>
                                                        <td>
                                                            @if($v['role_id'] == 1)
                                                            Admin
                                                            @elseif($v['role_id'] == 2)
                                                            User
                                                            @else
                                                            Driver
                                                            @endif
                                                        </td>
                                                        <td>0</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan=7>No Record Found</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_a_venir">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">User Role</th>
                                                        <th scope="col">Total Orders</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($active) && count($active) > 0)
                                                    @foreach($active as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v['name']}} {{$v['lname']}}</td>
                                                        <td>{{$v['email']}}</td>
                                                        <td>{{$v['phone']}}</td>
                                                        <td>
                                                            @if($v['role_id'] == 1)
                                                            Admin
                                                            @elseif($v['role_id'] == 2)
                                                            User
                                                            @else
                                                            Driver
                                                            @endif
                                                        </td>
                                                        <td>0</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan=7>No Record Found</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div style="margin: auto;display: table;">
                                            {!! $active->render() !!}
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_en_cours">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">User Role</th>
                                                        <th scope="col">Total Orders</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if(isset($pending) && count($pending) > 0)
                                                    @foreach($pending as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v['name']}} {{$v['lname']}}</td>
                                                        <td>{{$v['email']}}</td>
                                                        <td>{{$v['phone']}}</td>
                                                        <td>
                                                            @if($v['role_id'] == 1)
                                                            Admin
                                                            @elseif($v['role_id'] == 2)
                                                            User
                                                            @else
                                                            Driver
                                                            @endif
                                                        </td>
                                                        <td>0</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan=7>No Record Found</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div style="margin: auto;display: table;">
                                            {!! $pending->render() !!}
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_termine">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">User Role</th>
                                                        <th scope="col">Total Orders</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($blocked) && count($blocked) > 0)
                                                    @foreach($blocked as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v['name']}} {{$v['lname']}}</td>
                                                        <td>{{$v['email']}}</td>
                                                        <td>{{$v['phone']}}</td>
                                                        <td>
                                                            @if($v['role_id'] == 1)
                                                            Admin
                                                            @elseif($v['role_id'] == 2)
                                                            User
                                                            @else
                                                            Driver
                                                            @endif
                                                        </td>
                                                        <td>0</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan=7>No Record Found</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div style="margin: auto;display: table;">
                                            {!! $blocked->render() !!}
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
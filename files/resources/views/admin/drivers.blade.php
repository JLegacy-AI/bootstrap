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
                        <h1 class="screen-heading">Drivers Panel</h1>
                        <a href="javascript:void(0);" onclick="openAddDriverModal()" class="screen__3_topbtn" id="">+
                            Add<span class="screen__3_mblnone"> Driver</span></a>
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
                                        <a class="nav-link active" data-toggle="tab" href="#tab_all_drivers" role="tab">All Drivers</a>
                                    </li>
                                </ul>
                                <div class="tab-content screen__3tabs_con" id="table_drivers">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tab_all_drivers">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Airport/Location</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Edit</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($driversdata) && count($driversdata) > 0)
                                                    @foreach($driversdata as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v['airport']?$v['airport']->name:'N/A'}}</td>
                                                        <td>{{$v['name']}} {{$v['lname']}}</td>
                                                        <td>{{$v['email']}}</td>
                                                        <td>{{$v['phone']}}</td>
                                                        <td>
                                                            @if($v['status']=='1')
                                                            <div class="badge badge-success px-2 py-1">Active</div>
                                                            @else
                                                            <div class="badge badge-danger px-2 py-1">Inactive</div>
                                                            @endif
                                                        </td>
                                                        <td><a href="javascript:void(0);" onclick="openEditDriverModal({{$v}})"><i class="fa fa-pen table_icon_edit"></i></a></td>
                                                        <td><a href="javascript:void(0);" onclick="deleteDriver({{$v['id']}})"><i class="fa fa-trash table_icon_delete"></i></a></td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Driver-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_driveradd screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4driver_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Add Driver</p>
                                            <a href="javascript:void(0);" onclick="closeAddDriverModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" class="w-100" id="addDriverForm" name="addDriverForm">
                                    @csrf
                                    <input type="hidden" name="role_id" value="3" />
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-12">
                                                        <div class="form-group">
                                                        <label for="name">Airport/Location</label>
                                                                <select class="form-control" name="airport_id" required>
                                                                    <option value="" disabled selected hidden>Aéroport</option>
                                                                    @foreach($airports as $airport)
                                                                    <option value={{ $airport->code }}>{{ $airport->name }} ({{ $airport->code }})</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                </div>    
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="name">First Name</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="name" placeholder="First Name*" required />

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="lname" placeholder="Last Name*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" name="email" placeholder="Email*" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="phone" placeholder="Phone*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="password" placeholder="Password*" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control form-control-lg form-check-input" name="status">
                                                            <option value="1" selected="selected">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Add</button>
                                            <div class="alert alert-success text-left mt-1" id="addFormDriverSuccess" style="display:none">
                                                <p>Driver added successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="addFormDriverFailed" style="display:none">
                                                <p>Error! cannot update driver, please contact system administrator.</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Driver-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_driveredit screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4driver_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Edit Driver</p>
                                            <a href="javascript:void(0);" onclick="closeEditDriverModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" class="w-100" id="editDriverForm" name="editDriverForm">
                                    @csrf
                                    <input type="hidden" name="role_id" value="3" />
                                    <input type="hidden" name="id" id="ed_driverid" />
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-12">
                                                        <div class="form-group">
                                                        <label for="name">Airport/Location</label>
                                                                <select class="form-control" name="airport" id="ed_airport" required>
                                                                    <option value="" disabled selected hidden>Aéroport</option>
                                                                    @foreach($airports as $airport)
                                                                    <option value={{ $airport->code }}>{{ $airport->name }} ({{ $airport->code }})</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                </div>        
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="name">First Name</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="name" id="ed_name" placeholder="First Name*" required />

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="lname" id="ed_lname" placeholder="Last Name*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control form-control-lg form-check-input" name="email" id="ed_email" disabled placeholder="Email*" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="phone" id="ed_phone" placeholder="Phone*" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" class="form-control form-control-lg form-check-input" name="password" placeholder="Password*" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 px-md-3">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control form-control-lg form-check-input" name="status" id="ed_status">
                                                            <option value="1" selected="selected">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Add</button>
                                            <div class="alert alert-success text-left mt-1" id="editFormDriverSuccess" style="display:none">
                                                <p>Driver updated successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="editFormDriverFailed" style="display:none">
                                                <p>Error! cannot update driver, please contact system administrator.</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screen 1 Ends -->
</main>
<script type="text/javascript">
    function openAddDriverModal() {
        $(".screen__4Mdl_driveradd").attr('style', 'visibility: visible;');
        $(".screen__4driver_custommodal").attr('style', 'transform: translateY(0%);');
        $('#addFormDriverSuccess').hide();
        $('#addFormDriverFailed').hide();
    }

    function closeAddDriverModal() {
        $(".screen__4Mdl_driveradd").attr('style', 'visibility: hidden;');
        $(".screen__4driver_custommodal").attr('style', 'transform: translateY(100%);');
        $('#addFormDriverSuccess').hide();
        $('#addFormDriverFailed').hide();
    }
    $('#addDriverForm').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: "POST",
            url: "{{url('admin/driver/add-driver')}}",
            data: form.serialize(),
            success: function(data) {
                $('#addFormDriverSuccess').show();
                $('#addFormDriverFailed').hide();
                location.reload();
            },
            error: function() {
                $('#addFormDriverSuccess').hide();
                $('#addFormDriverFailed').show();
            }
        });
    });

    function openEditDriverModal(data) {
        $("#ed_driverid").val(data.id);
        $('#ed_airport').val(data.airport_id);
        $('#ed_name').val(data.name);
        $('#ed_lname').val(data.lname);
        $('#ed_email').val(data.email);
        $('#ed_phone').val(data.phone);
        $('#ed_status').val(data.status);
        $(".screen__4Mdl_driveredit").attr('style', 'visibility: visible;');
        $(".screen__4driver_custommodal").attr('style', 'transform: translateY(0%);');
        $('#editFormDriverSuccess').hide();
        $('#editFormDriverFailed').hide();
    }

    function closeEditDriverModal() {
        $(".screen__4Mdl_driveredit").attr('style', 'visibility: hidden;');
        $(".screen__4driver_custommodal").attr('style', 'transform: translateY(100%);');
        $('#editFormDriverSuccess').hide();
        $('#editFormDriverFailed').hide();
        $('#editDriverForm').trigger("reset");
    }
    $('#editDriverForm').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: "POST",
            url: "{{url('admin/driver/edit-driver')}}",
            data: form.serialize(),
            success: function(data) {
                $('#editFormDriverSuccess').show();
                $('#editFormDriverFailed').hide();
                location.reload();
            },
            error: function() {
                $('#editFormDriverSuccess').hide();
                $('#editFormDriverFailed').show();
            }
        });
    });

    function deleteDriver(id) {
        $.ajax({
            type: "GET",
            url: "{{url('admin/driver/delete-driver')}}/" + id,
            success: function(data) {
                location.reload();
            },
            error: function(error) {
                alert(error);
            }
        });
    }
</script>
@endsection
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
                        <h1 class="screen-heading">Help Center</h1>
                        <a href="javascript:void(0);" onclick="openAddCategoryModal()" class="screen__3_topbtn helpcentercat_btn" id="">+
                            Add<span class="screen__3_mblnone"> Category</span></a>
                        <a href="javascript:void(0);" onclick="openAddContentModal()" class="screen__3_topbtn helpcentercon_btn" id="">+
                            Add<span class="screen__3_mblnone"> Content</span></a>
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
                                        <a class="nav-link active" data-toggle="tab" href="#tab_help_center_category" role="tab">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_help_center_content" role="tab">Content</a>
                                    </li>
                                </ul>

                                <div class="tab-content screen__3tabs_con" id="table_helpcentercategory">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tab_help_center_category">
                                        <div class="table-responsive">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Edit</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($helpcentercategories) && count($helpcentercategories) > 0)
                                                    @foreach($helpcentercategories as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['category_id']}}</th>
                                                        <td>{{$v['category_name']}}</td>
                                                        <td><img src="{{url('')}}/public/uploads/{{$v['category_icon']}}" width="15%" /></td>
                                                        <td>
                                                            @if($v['status']=='1')
                                                            <div class="badge badge-success px-2 py-1">Active</div>
                                                            @else
                                                            <div class="badge badge-danger px-2 py-1">Inactive</div>
                                                            @endif
                                                        </td>
                                                        <td><a href="javascript:void(0);" onclick="openEditCategoryModal({{$v}})"><i class="fa fa-pen table_icon_edit"></i></a></td>
                                                        <td><a href="javascript:void(0);" onclick="deleteCategory({{$v['category_id']}})"><i class="fa fa-trash table_icon_delete"></i></a></td>
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
                                    <div role="tabpanel" class="tab-pane fade" id="tab_help_center_content">
                                        <div class="table-responsive">
                                            <table class="table datatable" id="table_helpcentercontent">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Content</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Edit</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($helpcentercontent) && count($helpcentercontent) > 0)
                                                    @foreach($helpcentercontent as $k=>$v)
                                                    <tr>
                                                        <th scope="row">{{$v['id']}}</th>
                                                        <td>{{$v->helpcentercategory->category_name}}</td>
                                                        <td>{{$v['title']}}</td>
                                                        <!--<td>{!! str_limit($v['content'], $limit = 150, $end = '...') !!}</td>-->
                                                        <td>{!! $v['content'] !!}</td>
                                                        <td>
                                                            @if($v['status']=='1')
                                                            <div class="badge badge-success px-2 py-1">Active</div>
                                                            @else
                                                            <div class="badge badge-danger px-2 py-1">Inactive</div>
                                                            @endif
                                                        </td>
                                                        <td><a href="javascript:void(0);" onclick="openEditContentModal({{$v}})"><i class="fa fa-pen table_icon_edit"></i></a></td>
                                                        <td><a href="javascript:void(0);" onclick="deleteContent({{$v['id']}})"><i class="fa fa-trash table_icon_delete"></i></a></td>
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
        <!-- Add Category-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_hccategoryadd screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4helpcenter_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Add Help Center Category</p>
                                            <a href="javascript:void(0);" onclick="closeAddCategoryModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form class="w-100" id="addHCCategoryForm" name="addHCCategoryForm" enctype="multipart/form-data">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="categoryname">Name</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" name="category_name" placeholder="Category Name*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="categoryicon">Icon</label>
                                                <input type="file" class="form-control form-control-lg form-check-input" name="category_icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control form-control-lg form-check-input" name="status">
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Add</button>
                                            <div class="alert alert-success text-left mt-1" id="addFormCategorySuccess" style="display:none">
                                                <p>Category added successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="addFormCategoryFailed" style="display:none">
                                                <p>Error! cannot update category, please contact system administrator.</p>
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
        <!-- Edit Category-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_hccategoryedit screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4helpcenter2_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Edit Help Center Category</p>
                                            <a href="javascript:void(0);" onclick="closeEditCategoryModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form class="w-100" id="editHCCategoryForm" name="editHCCategoryForm" enctype="multipart/form-data">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="categoryname">Name</label>
                                                <input type="hidden" name="category_id" id="edit_category_id" />
                                                <input type="text" id="edit_category_name" class="form-control form-control-lg form-check-input" name="category_name" placeholder="Category Name*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="categoryicon">Icon</label>
                                                <input type="file" class="form-control form-control-lg form-check-input" name="category_icon" id="edit_category_icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control form-control-lg form-check-input" name="status" id="edit_status">
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Update</button>
                                            <div class="alert alert-success text-left mt-1" id="editFormCategorySuccess" style="display:none">
                                                <p>Category updated successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="editFormCategoryFailed" style="display:none">
                                                <p>Error! cannot update category, please contact system administrator.</p>
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
        <!-- Add Content-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_hccontentadd screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4helpcenter_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Add Help Center Content</p>
                                            <a href="javascript:void(0);" onclick="closeAddContentModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form class="w-100" id="addHCContentForm" name="addHCContentForm" enctype="multipart/form-data">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group" id="select_helpcentercat_div">
                                                <label for="categories">Categories</label>
                                                <select class="form-control form-control-lg form-check-input" name="category_id" id="select_helpcentercat">
                                                    @foreach($helpcentercategories as $k=>$v)
                                                    <option value="{{$v['category_id']}}" @if($k=0) selected="" @endif>{{$v['category_name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control form-control-lg form-check-input" name="title" placeholder="Title*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea class="ckeditor form-control form-control-lg form-check-input" id="add_content" name="content" placeholder="Content*" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control form-control-lg form-check-input" name="status" id="add_cont_status">
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Add</button>
                                            <div class="alert alert-success text-left mt-1" id="addFormContentSuccess" style="display:none">
                                                <p>Category added successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="addFormContentFailed" style="display:none">
                                                <p>Error! cannot update category, please contact system administrator.</p>
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
        <!-- Edit Category-->
        <div class="container m-auto p-0">
            <div class="row screen__4Mdl_hccontentedit screen__4vehiclesadd_modal">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-12 px-md-3 px-0 screen__4helpcenter2_custommodal">
                    <div class="row m-0 p-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 px-0 screen__4vedit_pd">
                            <div class="screen__3Modalpd screen1page-new">
                                <div class="row mb-screen-head screen3__Modalpd1">
                                    <div class="col-sm-12 col-12" id="">
                                        <div class="screen-header-main">
                                            <p class="screen__3Mdlhead">Edit Help Center Content</p>
                                            <a href="javascript:void(0);" onclick="closeEditContentModal()" class="screen03-btn-back" id="">
                                                <i class="fa fa-times screen-back-icon" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form class="w-100" id="editHCContentForm" name="editHCContentForm" enctype="multipart/form-data">
                                    <div class="row m-0 p-0 screen__4vehicleinfo">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group" id="select_helpcentercat_editdiv">
                                                <label for="categories">Categories</label>
                                                <select class="form-control form-control-lg form-check-input" name="category_id" id="edit_cat_id">
                                                    @foreach($helpcentercategories as $k=>$v)
                                                    <option value="{{$v['category_id']}}">{{$v['category_name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="hidden" name="id" id="edit_id" />
                                                <input type="text" id="edit_title" class="form-control form-control-lg form-check-input" name="title" placeholder="Title*" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea class="ckeditor form-control form-control-lg form-check-input" id="edit_content" name="content" placeholder="Content*" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control form-control-lg form-check-input" name="status" id="edit_cont_status">
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-md-3 screen__4infobtndiv2">
                                            <button type="submit" class="screen__4enregistrer">Update</button>
                                            <div class="alert alert-success text-left mt-1" id="editFormContentSuccess" style="display:none">
                                                <p>Category updated successfuly.</p>
                                            </div>
                                            <div class="alert alert-danger text-left mt-1" id="editFormContentFailed" style="display:none">
                                                <p>Error! cannot update category, please contact system administrator.</p>
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
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $('.nav-tabs a[href="#tab_help_center_category"]').click(function(event) {
        $(".helpcentercon_btn").attr('style', 'display: none !important');
        $(".helpcentercat_btn").attr('style', 'display: block !important');
        $("#table_helpcentercategory").load(" #table_helpcentercategory");
    });
    $('.nav-tabs a[href="#tab_help_center_content"]').click(function(event) {
        $(".helpcentercon_btn").attr('style', 'display: block !important');
        $(".helpcentercat_btn").attr('style', 'display: none !important');
        $("#table_helpcentercontent").load(" #table_helpcentercontent");
    });
    // Help Center Category
    $('#addHCCategoryForm').on('submit', function(e) {
        e.preventDefault();
        var form = document.forms.namedItem("addHCCategoryForm");
        var formData = new FormData(form);
        $.ajax({
            type: "POST",
            url: "{{url('admin/add-helpcenter-category')}}",
            dataType: "json",
            contentType: false,
            data: formData,
            processData: false,
            success: function(data) {
                $("#table_helpcentercategory").load(" #table_helpcentercategory");
                $('#addHCCategoryForm').trigger("reset");
                $('#addFormCategorySuccess').show();
                $('#addFormCategoryFailed').hide();
            },
            error: function() {
                $('#addFormCategorySuccess').hide();
                $('#addFormCategoryFailed').show();
            }
        });
    });
    $('#editHCCategoryForm').on('submit', function(e) {
        e.preventDefault();
        var form = document.forms.namedItem("editHCCategoryForm");
        var formData = new FormData(form);
        $.ajax({
            type: "POST",
            url: "{{url('admin/edit-helpcenter-category')}}",
            dataType: "json",
            contentType: false,
            data: formData,
            processData: false,
            success: function(data) {
                $('#editFormCategorySuccess').show();
                $('#editFormCategoryFailed').hide();
                $("#table_helpcentercategory").load(" #table_helpcentercategory");
            },
            error: function() {
                $('#editFormCategorySuccess').hide();
                $('#editFormCategoryFailed').show();
            }
        });
    });

    function openAddCategoryModal() {
        $(".screen__4Mdl_hccategoryadd").attr('style', 'visibility: visible;');
        $(".screen__4helpcenter_custommodal").attr('style', 'transform: translateY(0%);');
        $('#addFormCategorySuccess').hide();
        $('#addFormCategoryFailed').hide();
    }

    function closeAddCategoryModal() {
        $(".screen__4Mdl_hccategoryadd").attr('style', 'visibility: hidden;');
        $(".screen__4helpcenter_custommodal").attr('style', 'transform: translateY(100%);');
        $('#addFormCategorySuccess').hide();
        $('#addFormCategoryFailed').hide();
    }

    function openEditCategoryModal(data) {
        $('#edit_category_id').val(data.category_id);
        $('#edit_category_name').val(data.category_name);
        $('#edit_status').val(data.status);
        $(".screen__4Mdl_hccategoryedit").attr('style', 'visibility: visible;');
        $(".screen__4helpcenter2_custommodal").attr('style', 'transform: translateY(0%);');
        $('#editFormCategorySuccess').hide();
        $('#editFormCategoryFailed').hide();
    }

    function closeEditCategoryModal() {
        $(".screen__4Mdl_hccategoryedit").attr('style', 'visibility: hidden;');
        $(".screen__4helpcenter2_custommodal").attr('style', 'transform: translateY(100%);');
        $('#editFormCategorySuccess').hide();
        $('#editFormCategoryFailed').hide();
        $('#editHCCategoryForm').trigger("reset");
    }

    function deleteCategory(id) {
        $.ajax({
            type: "GET",
            url: "{{url('admin/delete-helpcenter-category')}}/" + id,
            success: function(data) {
                $("#table_helpcentercategory").load(" #table_helpcentercategory");
            },
            error: function() {}
        });
    }
    // Help Center Content
    $('#addHCContentForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{url('admin/add-helpcenter-content')}}",
            dataType: "json",
            data: {
                "category_id": $('select[name=category_id]').val(),
                "title": $('input[name=title]').val(),
                "content": CKEDITOR.instances['add_content'].getData(),
                "status": $('select[id=add_cont_status]').val()
            },
            success: function(data) {
                $('#addHCContentForm').trigger("reset");
                CKEDITOR.instances['add_content'].setData('');
                $('#addFormContentSuccess').show();
                $('#addFormContentFailed').hide();
                $("#table_helpcentercontent").load(" #table_helpcentercontent");
            },
            error: function() {
                $('#addFormContentSuccess').hide();
                $('#addFormContentFailed').show();
            }
        });
    });
    $('#editHCContentForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{url('admin/edit-helpcenter-content')}}",
            data: {
                "id": $('input[name=id]').val(),
                "category_id": $('select[id=edit_cat_id]').val(),
                "title": $('input[id=edit_title]').val(),
                "content": CKEDITOR.instances['edit_content'].getData(),
                "status": $('select[id=edit_cont_status]').val()
            },
            dataType: "json",
            success: function(data) {
                $('#editFormContentSuccess').show();
                $('#editFormContentFailed').hide();
                $("#table_helpcentercontent").load(" #table_helpcentercontent");
            },
            error: function() {
                $('#editFormContentSuccess').hide();
                $('#editFormContentFailed').show();
            }
        });
    });

    function openAddContentModal() {
        $(".screen__4Mdl_hccontentadd").attr('style', 'visibility: visible;');
        $(".screen__4helpcenter_custommodal").attr('style', 'transform: translateY(0%);');
        $('#add_content').ckeditor();
        $('#addFormContentSuccess').hide();
        $('#addFormContentFailed').hide();
        $.ajax({
            type: "GET",
            url: "{{url('admin/helpcenter')}}",
            success: function(data) {
                $("#select_helpcentercat_div").load(" #select_helpcentercat_div");
            },
            error: function() {}
        });
    }

    function closeAddContentModal() {
        $(".screen__4Mdl_hccontentadd").attr('style', 'visibility: hidden;');
        $(".screen__4helpcenter_custommodal").attr('style', 'transform: translateY(100%);');
        $('#addFormContentSuccess').hide();
        $('#addFormContentFailed').hide();
    }

    function openEditContentModal(data) {
        $('#edit_id').val(data.id);
        $('#edit_cat_id').val(data.category_id);
        $('#edit_title').val(data.title);
        $('#edit_status').val(data.status);
        CKEDITOR.instances['edit_content'].setData(data.content);
        $(".screen__4Mdl_hccontentedit").attr('style', 'visibility: visible;');
        $(".screen__4helpcenter2_custommodal").attr('style', 'transform: translateY(0%);');
        $('#editFormContentSuccess').hide();
        $('#editFormContentFailed').hide();
        $('#edit_content').ckeditor();

    }

    function closeEditContentModal() {
        $(".screen__4Mdl_hccontentedit").attr('style', 'visibility: hidden;');
        $(".screen__4helpcenter2_custommodal").attr('style', 'transform: translateY(100%);');
        $('#editFormContentSuccess').hide();
        $('#editFormContentFailed').hide();
        $('#editHCContentForm').trigger("reset");
    }

    function deleteContent(id) {
        $.ajax({
            type: "GET",
            url: "{{url('admin/delete-helpcenter-content')}}/" + id,
            success: function(data) {
                $("#table_helpcentercontent").load(" #table_helpcentercontent");
            },
            error: function() {}
        });
    }
</script>
@endsection
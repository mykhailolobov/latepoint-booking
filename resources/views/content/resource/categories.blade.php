@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

@section('page-style')
@vite([
'resources/assets/vendor/scss/pages/card-analytics.scss'

])
@endsection

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
'resources/assets/vendor/libs/dropzone/dropzone.scss'

])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
'resources/assets/vendor/libs/sortablejs/sortable.js',
'resources/assets/vendor/libs/dropzone/dropzone.js'

])
@endsection

@section('page-script')
@vite([
'resources/assets/js/extended-ui-drag-and-drop.js',
'resources/assets/js/ui-cards-analytics.js',
'resources/assets/js/forms-selects.js',
'resources/assets/js/forms-file-upload.js'
])
@endsection
@section('content')

<link href="{{asset('/assets/category_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Categories</h4>
            <hr>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-12 col-12 mb-md-0 mb-4">
                    <ul class="location-categories list-group list-group-flush" id="handle-list-1">
                        <li class="list-group-item lh-1 justify-content-between align-items-center mb-3">
                            <div class="row">
                                <span class="d-flex align-items-center">
                                    <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                    <span>General Dentistry</span>
                                </span>
                            </div>
                            <div class="card-body edit_category_section">
                                <div class="col-lg-12 d-flex mb-3">
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Category Name" aria-describedby="defaultFormControlHelp" value="General Dentistry" />
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Short Description</label>
                                        <textarea class="form-control" id="defaultFormControlInput" placeholder="Short Description" aria-describedby="defaultFormControlHelp" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                                        <div class="dz-message needsclick">
                                            Remove Image
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
                                </div>
                                <button type="button" class="btn btn-primary">Save Category</button>
                                <button type="button" class="btn btn-danger">Delete Category</button>
                            </div>
                        </li>
                            
                        <li class="list-group-item lh-1 justify-content-between align-items-center mb-3">
                            <div class="row">
                                <span class="d-flex align-items-center">
                                  <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                  <span>Cosmetic Dentistry</span>
                                </span>
                            </div>

                            <div class="card-body edit_category_section">
                                <div class="col-lg-12 d-flex mb-3">
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Category Name" aria-describedby="defaultFormControlHelp" value="Cosmetic Dentistry" />
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Short Description</label>
                                        <textarea class="form-control" id="defaultFormControlInput" placeholder="Short Description" aria-describedby="defaultFormControlHelp" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic1">
                                        <div class="dz-message needsclick">
                                            Remove Image
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
                                </div>
                                <button type="button" class="btn btn-primary">Save Category</button>
                                <button type="button" class="btn btn-danger">Delete Category</button>
                            </div>
                        </li>

                        <li class="list-group-item lh-1 justify-content-between align-items-center mb-3">
                            <div class="row">
                                <span class="d-flex align-items-center">
                                  <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                  <span>Implants Dentistry</span>
                                </span>
                            </div>

                            <div class="card-body edit_category_section">
                                <div class="col-lg-12 d-flex mb-3">
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Category Name" aria-describedby="defaultFormControlHelp" value="Implants Dentistry" />
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Short Description</label>
                                        <textarea class="form-control" id="defaultFormControlInput" placeholder="Short Description" aria-describedby="defaultFormControlHelp" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic2">
                                        <div class="dz-message needsclick">
                                            Remove Image
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
                                </div>
                                <button type="button" class="btn btn-primary">Save Category</button>
                                <button type="button" class="btn btn-danger">Delete Category</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12 create_new_category mt-2">
            <div class="card mb-4">
                <h5 class="card-header">Create New Service Category</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex mb-3">
                        <div class="col-lg-6 px-3">
                            <label for="selectpickerBasic" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Category Name" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-6 px-3">
                            <label for="selectpickerBasic" class="form-label">Short Description</label>
                            <textarea rows="1" class="form-control" id="defaultFormControlInput" placeholder="Short Description" aria-describedby="defaultFormControlHelp"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3 p-3">
                        <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                            <div class="dz-message needsclick">
                                Category Image
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </div>
                    <button type="button" class="btn btn-primary">Save Category</button>
                    <button type="button" class="btn btn-default cancel_create_category">Cancel</button>
                </div>
            </div>
        </div>

        <div id="add-category-box" class="add-category-box" data-os-action="coupons__new_form" data-os-output-target-do="append" data-os-output-target=".os-coupons-w">
            <div class="add-coupon-graphic-w">
                <div class="add-coupon-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
            </div>
            <div class="add-coupon-label">Create New Category</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.create_new_category').hide();
        $('.edit_category_section').hide();

        $('#add-category-box').click(function() {
            $('.create_new_category').show();
        });

        $('.cancel_create_category').click(function() {
            $('.create_new_category').hide();
        });

        $('.list-group-item').click(function() {
            if($(this).children().next().css('display') == "none") {
                $(this).children().next().show();    
            }
            else{
                $(this).children().next().hide();
            }
        })
    });
</script>

@endsection

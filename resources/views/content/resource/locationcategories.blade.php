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

<link href="{{asset('/assets/css/locationcategories_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-4 d-flex">
            <a href="{{ url('/resource/locations') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">All Locations</h4>
            </a>
            <a href="{{ url('/resource/locationcategories') }}" class="agent-status-active text-center mx-2 service_title">
                <h4 class="m-0 me-2">Categories</h4>
            </a>
            <hr>
        </div>
        <div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12 mb-md-0 mb-4">
                        <ul class="location-categories list-group list-group-flush" id="handle-list-1">
                            <li class="list-group-item lh-1 d-flex justify-content-between align-items-center mb-2">
                                <span class="d-flex justify-content-between align-items-center">
                                  <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                  <span>Los Angeles</span>
                                </span>
                            </li>
                            <li class="list-group-item lh-1 d-flex justify-content-between align-items-center mb-2">
                                <span class="d-flex justify-content-between align-items-center">
                                  <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                  <span>California</span>
                                </span>
                            </li>
                            <li class="list-group-item lh-1 d-flex justify-content-between align-items-center mb-3">
                                <span class="d-flex justify-content-between align-items-center">
                                  <i class="drag-handle cursor-move bx bx-menu align-text-bottom me-2"></i>
                                  <span>New York</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 create_new_location_category">
            <div class="card mb-4">
                <h5 class="card-header">Create New Location Category</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex">
                        <div class="col-lg-6 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Category Name" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-6 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Short Description" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>   
                    <div class="col-lg-12 px-3 mb-4">
                        <form action="/upload" class="dropzone needsclick" id="dropzone-basic1">
                            <div class="dz-message needsclick">
                                Category Image
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </div>

                    <div>
                        <button class="btn btn-primary add-location-category" type="button">Save Category</button>
                        <button class="btn btn-default cancel-location-category" type="button">Cancel</button>
                    </div> 
                </div>
            </div>
        </div>

        <div id="add-category-box" class="add-category-box" data-os-action="coupons__new_form" data-os-output-target-do="append" data-os-output-target=".os-coupons-w">
            <div class="add-category-graphic-w">
                <div class="add-category-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
            </div>
            <div class="add-category-label">Create New Category</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".create_new_location_category").hide();

        $('#add-category-box').click(function() {
            $(".create_new_location_category").show();
        });

        $('.cancel-location-category').click(function() {
            $(".create_new_location_category").hide();
        });
    });
</script>

@endsection

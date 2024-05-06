@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('vendor-style')

@vite([
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
'resources/assets/vendor/libs/select2/select2.scss',


])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/select2/select2.js',



])
@endsection

@section('page-script')
@vite([
'resources/assets/js/tables-datatables-advanced.js',
'resources/assets/js/forms-pickers.js',
'resources/assets/js/forms-selects.js',
'resources/assets/js/form-basic-inputs.js',
])
@endsection

@section('content')

<style type="text/css">
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header flex-column flex-md-row">
        <h5 class="card-header">Customers</h5>
        <div class="text-end">
            <button type="button" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;Download CSV</button>
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add Customer</button>
        </div>
    </div>
    <div class="card-datatable text-nowrap">
        <table class="dt-column-search-2 table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Total Apps</th>
                    <th>Next App</th>
                    <th>Time To Next</th>
                    <th>Laravel User ID</th>
                    <th>Registered On</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection

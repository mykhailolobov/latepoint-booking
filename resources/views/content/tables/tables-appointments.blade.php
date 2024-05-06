@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

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
        <h5 class="card-header">Appointments</h5>
        <div class="text-end">
            <button type="button" class="btn btn-primary">Download CSV</button>
        </div>
    </div>
    <div class="card-datatable text-nowrap">
        <table class="dt-column-search table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service</th>
                    <th>Date/Time</th>
                    <th>Time Left</th>
                    <th>Aganet</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>Crated On</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Code</th>
                    <th>Duration</th>
                    <th>Source ID</th>
                    <th>Payment Method</th>
                    <th>Payment Portion</th>
                    <th>Price</th>
                    <th>Coupon Code</th>
                    <th>Coupon Discount</th>
                    <th>Total Attendees</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection
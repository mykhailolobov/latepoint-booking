<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class Appointments extends Controller
{
  public function index()
  {
    $appointments = Booking::all();

    $jsonData = json_encode(['data' => $appointments]);
    $filePath = public_path('assets/json/table-datatable.json');
    file_put_contents($filePath, $jsonData);

    return view('content.tables.tables-appointments');
  }

  public function store(Request $request)
  {
    $appointment = new Booking();
    $appointment->customer_id = $request->user()['id'];
    $appointment->service_id = "1";
    $appointment->agent_id = "1";
    $appointment->location_id = "1";

    $appointment->booking_code = "1";
    $appointment->start_date = $request->start_date;
    $appointment->start_time = $request->start_time;
    $appointment->end_time = $request->end_time;
    $appointment->buffer_before = $request->buffer_before;
    $appointment->buffer_after = $request->buffer_after;
    $appointment->subtotal = $request->subtotal;
    $appointment->price = $request->price;
    $appointment->status = $request->status;
    $appointment->coupon_code = $request->coupon_code;
    $appointment->customer_comment = $request->customer_comment;

    $appointment->save();
    return redirect('/appointments')->with('success', 'Booking created successfully.');
  }
}

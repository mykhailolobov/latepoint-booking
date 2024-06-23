<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Carbon\Carbon;
use DateTime;

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
    // $users = new User();
    // $users->first_name = $request->first_name;
    // $users->last_name = $request->last_name;
    // $users->email = $request->email;
    // $users->phone = $request->phone;
    $appointment = new Booking();
    $appointment->customer_id = $request->user()['id'];
    $appointment->first_name = $request->first_name;
    $appointment->last_name = $request->last_name; 
    $appointment->service_id = "1";
    $appointment->agent_id = "1";
    $appointment->location_id = "1";
    $appointment->booking_code = "1";
    $appointment->start_date = new DateTime($request->start_date);
    $appointment->start_time = $request->start_time;
    $appointment->end_time = $request->end_time;
    if($request->buffer_before) {
      $appointment->buffer_before = $request->buffer_before;
    } else {
      $appointment->buffer_before = '0';
    }
    if($request->buffer_after) {
      $appointment->buffer_after = $request->buffer_after;
    } else {
      $appointment->buffer_after = '0';

    }
    $appointment->subtotal = $request->subtotal;
    $appointment->price = $request->price;
    $appointment->status = $request->status;
    $appointment->coupon_code = $request->coupon_code;
    $appointment->customer_comment = $request->customer_comment;

    $appointment->save();
    return redirect('/admin/appointments')->with('success', 'Booking created successfully.');
  }
}

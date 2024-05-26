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
}

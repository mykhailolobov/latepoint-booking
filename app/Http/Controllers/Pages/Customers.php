<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class Customers extends Controller
{
  public function index()
  {
    return view('content.tables.tables-customers');
  }

  // Add Customer
  public function add()
  {
    return view('content.resource.addcustomer');
  }

  public function add_customer(Request $request)
  {
    $customer = new Customer();
    $customer->user_id = $request->user()['id'];
    $customer->first_name = $request->input('first_name');
    $customer->last_name = $request->input('last_name');
    $customer->email = $request->input('email');
    $customer->phone = $request->input('phone');
    $customer->status = 'Active'; // TODO
    $customer->notes = $request->input('notes');
    $customer->admin_notes = $request->input('admin_notes');

    $customer->save();
    return response()->json(
      ['message' => 'Customer is saved successfully.'],
      200
    );
  }
}
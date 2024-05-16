<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Image;

class Customers extends Controller
{
  public function index()
  {
    $customers = Customer::paginate(20);
    return view('content.tables.tables-customers', ['customers'=>$customers]);
  }

  // Add Customer
  public function add()
  {
    return view('content.resource.addcustomer');
  }

  public function add_customer(Request $request)
  {
    dd($request);
    $customer = new Customer();
    $customer->user_id = $request->user()['id'];
    $customer->first_name = $request->first_name;
    $customer->last_name = $request->last_name;
    $customer->email = $request->email;
    $customer->phone = $request->phone;
    $customer->status = 'Active'; // TODO
    $customer->notes = $request->notes;
    $customer->admin_notes = $request->admin_notes;

    $photo = $request->customer_avatar;
    if( $photo ) {
      $image = new Image();
      $filename = time() . '_' . $photo->getClientOriginalName();
      $path = $photo->storeAs('public/customer_avatars', $filename);
      $image->path = $path;
    } 

    $customer->save();
    return redirect()->route('app-customers')->with('success', 'Customer created successfully.');
  }
}
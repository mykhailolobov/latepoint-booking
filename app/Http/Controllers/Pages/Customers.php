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
    $customers = Customer::all();
    return view('content.tables.tables-customers', ['customers'=>$customers]);
  }

  public function list() {
    $customers = Customer::all();

    $jsonData = json_encode(['data' => $customers]);
    $filePath = public_path('assets/json/table-datatable2.json');
    file_put_contents($filePath, $jsonData);

    return response()->json(['message' => 'Data written to file successfully']);
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

    $customers = Customer::all();
    

    $photo = $request->customer_avatar;
    if( $photo ) {
      $image = new Image();
      $image->path = $photo;
      $image->save();
      $customer->avatar_image_id = $image->id;
    } 
    
    $customer->save(); 

    $jsonData = json_encode(['data' => $customers]);
    $filePath = public_path('assets/json/table-datatable2.json');
    file_put_contents($filePath, $jsonData);

    return redirect()->route('app-customers')->with('success', 'Customer created successfully.');
  }

  public function edit_customer($id)
  {
    $customer = Customer::findOrFail($id);
    return view('content.resource.editcustomer', compact('customer'));
  }

  public function update_customer(Request $request) {
    // dd($request->id);
    $customer = Customer::findOrFail($request->id);
    $customer->first_name = $request->first_name;
    $customer->last_name = $request->last_name;
    $customer->email = $request->email;
    $customer->phone = $request->phone;
    $customer->status = 'Active'; // TODO
    $customer->notes = $request->notes;
    $customer->admin_notes = $request->admin_notes;

    $customer->save();

    $customers = Customer::all();

    $jsonData = json_encode(['data' => $customers]);
    $filePath = public_path('assets/json/table-datatable2.json');
    file_put_contents($filePath, $jsonData);

    return redirect()->route('app-customers')->with('success', 'Customer updated successfully.');
  }

  public function delete_customer($id)
  {
    // dd($id);
    $customer = Customer::findOrFail($id);
    $customer->delete();

    $customers = Customer::all();

    $jsonData = json_encode(['data' => $customers]);
    $filePath = public_path('assets/json/table-datatable2.json');
    file_put_contents($filePath, $jsonData);
    return redirect()->route('app-customers')->with('success', 'Customer deleted successfully.');

  }


}
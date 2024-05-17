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

    $customers = Customer::all();

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
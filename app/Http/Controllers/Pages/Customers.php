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
    return redirect()->route('app-customers')->with('success', 'Customer updated successfully.');
  }

  public function delete_customer($id)
  {
    // dd($id);
    $customer = Customer::findOrFail($id);
    $customer->delete();
    return redirect()->route('app-customers')->with('success', 'Customer deleted successfully.');

  }

  public function search_customer(Request $request) {
    
    $id_search = $request->id_search;
    $full_name_search = $request-> full_name_search;
    $phone_search = $request->phone_search;
    $email_search = $request->email_search;

    $query = Customer::query();
    // dd($request->id_search);
    if (!empty($id_search)) {
      $query->where('id', 'LIKE', '%' . $id_search . '%');
    }

    if (!empty($full_name_search)) {
      $query->where('first_name', 'LIKE', '%' . $full_name_search . '%');
    }

    if (!empty($full_name_search)) {
      $query->where('last_name', 'LIKE', '%' . $full_name_search . '%');
    }

    if (!empty($phone_search)) {
      $query->where('phone', 'LIKE', '%' . $phone_search . '%');
    }

    if (!empty($email_search)) {
      $query->where('email', 'LIKE', '%' . $email_search . '%');
    }

    $customers = $query->paginate(20);

    // dd($customers);
    return view('content.tables.tables-customers', ['customers'=>$customers]);
  }
}
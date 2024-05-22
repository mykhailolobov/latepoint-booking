<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class Services extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $all = Service::all();
        $services = Service::all();

        $generalServices = $services->where('category_id', 'general');
        $cosmeticServices = $services->where('category_id', 'cosmetic');
        $implantsServices = $services->where('category_id', 'implants');
        return view('content.resource.services',  compact('generalServices', 'cosmeticServices', 'implantsServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.resource.createservices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->input('name');
        $service->short_description = $request->input('short_description');
        $service->price_min = $request->input('price_min');
        $service->price_max = $request->input('price_max');
        $service->charge_amount = $request->input('charge_amount');
        $service->deposit_amount = $request->input('deposit_amount');
        $service->duration_name = $request->input('duration_name');
        $service->duration = $request->input('duration');
        $service->buffer_before = $request->input('buffer_before');
        $service->buffer_after = $request->input('buffer_after');
        $service->category_id = $request->input('category_id');
        $service->selection_image_id = $request->selection_image_id;
        $service->description_image_id = $request->description_image_id;
        $service->bg_color = $request->input('bg_color');
        $service->timeblock_interval = $request->input('timeblock_interval');
        $service->capacity_min = $request->input('capacity_min');
        $service->capacity_max = $request->input('capacity_max');
        $service->status = $request->input('status');
        $service->visibility = $request->input('visibility');
        $service->override_default_booking_status = $request->input('override_default_booking_status');

        $service->save();
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('content.resource.editservices', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {   
        $service = Service::findOrFail($request->id);

        $service->name = $request->input('name');
        $service->short_description = $request->input('short_description');
        $service->price_min = $request->input('price_min');
        $service->price_max = $request->input('price_max');
        $service->charge_amount = $request->input('charge_amount');
        $service->deposit_amount = $request->input('deposit_amount');
        $service->duration_name = $request->input('duration_name');
        $service->duration = $request->input('duration');
        $service->buffer_before = $request->input('buffer_before');
        $service->buffer_after = $request->input('buffer_after');
        $service->category_id = $request->input('category_id');
        $service->bg_color = $request->input('bg_color');
        $service->timeblock_interval = $request->input('timeblock_interval');
        $service->capacity_min = $request->input('capacity_min');
        $service->capacity_max = $request->input('capacity_max');
        $service->status = $request->input('status');
        $service->visibility = $request->input('visibility');
        $service->override_default_booking_status = $request->input('override_default_booking_status');


        if($request->selection_image_id) {
            $service->selection_image_id = $request->selection_image_id;
        }
        if($request->description_image_id) {
            $service->description_image_id = $request->description_image_id;
        }

        $service->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
    }
}

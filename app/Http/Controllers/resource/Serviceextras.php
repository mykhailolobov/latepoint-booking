<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serviceextra;

class Serviceextras extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extras = Serviceextra::all();
        return view('content.resource.serviceextras', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.resource.createserviceextras');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $serviceExtra = new Serviceextra();
        $serviceExtra->name = $request.input('name');
        $serviceExtra->short_description = $request.input('short_description');
        $serviceExtra->charge_amount = $request.input('charge_amount');
        $serviceExtra->duration = $request.input('duration');
        $serviceExtra->maximum_quantity = $request.input('max_quantity');
        $serviceExtra->selection_image_id = $request->selection_image_id;
        // $serviceExtra->description_image_id = $request->description_image_id;
        $serviceExtra->status = $request.input('status');

        $serviceExtra->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $serviceExtra = Serviceextra::fincOrFail($id);
        return view('content.resource.editserviceextras', compact('serviceExtra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $serviceExtra = Serviceextra::findOrFail($request.input('id'));
        $serviceExtra->name = $request.input('name');
        $serviceExtra->short_description = $request.input('short_description');
        $serviceExtra->charge_amount = $request.input('charge_amount');
        $serviceExtra->duration = $request.input('duration');
        $serviceExtra->maximum_quantity = $request.input('max_quantity');
        $serviceExtra->selection_image_id = $request->selection_image_id;
        // $serviceExtra->description_image_id = $request->description_image_id;
        $serviceExtra->status = $request.input('status');

        $serviceExtra->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceExtra = Serviceextra::findOrFail($id);
        $serviceExtra->delete();
    }
}

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Adjust length if needed
            'short_description' => 'string|nullable',
            'charge_amount' => 'nullable|numeric|min:0.0000', // Allow decimals, non-negative
            'duration' => 'required|integer|min:0', // Non-negative integer
            'maximum_quantity' => 'nullable|integer|min:0', // Non-negative integer
            // 'multiplied_by_attendees' => 'nullable|string|in:yes,no', // Validate allowed options
            'status' => 'required|string', // Validate allowed statuses
        ]);
        $serviceExtra = new Serviceextra();
        $serviceExtra->name = $validatedData['name'];
        $serviceExtra->short_description = $validatedData['short_description'];
        $serviceExtra->charge_amount = $validatedData['charge_amount'];
        $serviceExtra->duration = $validatedData['duration'];
        $serviceExtra->maximum_quantity = $validatedData['max_quantity'];
        $serviceExtra->status = $validatedData['status'];
        $serviceExtra->selection_image_id = $request->selection_image_id;
        // $serviceExtra->description_image_id = $request->description_image_id;

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
        $serviceExtra = Serviceextra::findOrFail($id);
        return view('content.resource.editserviceextras', compact('serviceExtra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Adjust length if needed
            'short_description' => 'string|nullable',
            'charge_amount' => 'nullable|numeric|min:0.0000', // Allow decimals, non-negative
            'duration' => 'required|integer|min:0', // Non-negative integer
            'maximum_quantity' => 'nullable|integer|min:0', // Non-negative integer
            // 'multiplied_by_attendees' => 'nullable|string|in:yes,no', // Validate allowed options
            'status' => 'required|string', // Validate allowed statuses
        ]);

        $id = $request->input('id');
        $serviceExtra = Serviceextra::findOrFail($id);
        $serviceExtra->name = $validatedData['name'];
        $serviceExtra->short_description = $validatedData['short_description'];
        $serviceExtra->charge_amount = $validatedData['charge_amount'];
        $serviceExtra->duration = $validatedData['duration'];
        $serviceExtra->maximum_quantity = $validatedData['max_quantity'];
        $serviceExtra->status = $validatedData['status'];
        // $serviceExtra->description_image_id = $request->description_image_id;

        if($request->selection_image_id) {
            $serviceExtra->selection_image_id = $request->selection_image_id;
        }
        $serviceExtra->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceExtra = Serviceextra::findOrFail($id);
        $serviceExtra->delete();

        return redirect('/resource/serviceextras')->with('success', 'Category updated successfully.');
    }
}

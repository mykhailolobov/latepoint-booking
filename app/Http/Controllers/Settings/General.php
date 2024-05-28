<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class General extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        $checkVal = Setting::query()
        ->where('name','LIKE',"default_booking_status")
        ->get();
        return view('content.settings.general', compact('settings', 'checkVal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->get('settings'));
        foreach ($request->get('settings') as $key => $value) {
            $settings = Setting::all();
            $general = new Setting();
            $checkVal = Setting::query()
            ->where('name','LIKE',"%{$key}%")
            ->get();
            $count = $checkVal->count();
            if($count>0) {
                $currentGeneral = $checkVal[0];
                $currentGeneral -> value = $value;
                $currentGeneral->save();
            } else {
                $general->name = $key;
                $general->value = $value;
                $general ->save();
            }            

          }
        return redirect('/settings/general')->with('success', 'Customer created successfully.');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

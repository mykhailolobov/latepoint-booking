<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class Agents extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('content.resource.agents', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.resource.createagents');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $agent = new Agent();
        $agent->user_id = $request->user()['id'];
        $agent->avatar_image_id = $request->avatar_image;
        $agent->bio_image_id = $request->bio_image;
        $agent->first_name = $request->input('first_name');
        $agent->last_name = $request->input('last_name');
        $agent->display_name = $request->input('display_name');
        $agent->title = $request->input('title');
        $agent->bio = $request->input('bio');
        $agent->email = $request->input('email');
        $agent->phone = $request->input('phone');
        $agent->status = $request->input('status');
        $agent->extra_emails = $request->input('extra_email');
        $agent->extra_phones = $request->input('extra_phone');
       
        $agent->save();

        // return redirect('/customers')->with('success', 'Customer created successfully.');
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
        $agent = Agent::findOrFail($id);
        return view('content.resource.editagents', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $agent = Agent::findOrFail($request->input('id'));
        $agent->avatar_image_id = $request->avatar_image;
        $agent->bio_image_id = $request->bio_image;
        $agent->first_name = $request->input('first_name');
        $agent->last_name = $request->input('last_name');
        $agent->display_name = $request->input('display_name');
        $agent->title = $request->input('title');
        $agent->bio = $request->input('bio');
        $agent->email = $request->input('email');
        $agent->phone = $request->input('phone');
        $agent->status = $request->input('status');
        $agent->extra_emails = $request->input('extra_email');
        $agent->extra_phones = $request->input('extra_phone');
       
        $agent->save();
        
        // return redirect('/customers')->with('success', 'Customer created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();
    }
}

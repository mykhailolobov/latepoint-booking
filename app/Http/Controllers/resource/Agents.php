<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Validation\Rule;
use App\Models\Activity;


class Agents extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('content.resource.agents',  ['agents'=>$agents]);
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
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255', // Adjust length as needed
            'last_name' => 'string|nullable|max:255',
            'display_name' => 'string|nullable|max:255',
            'title' => 'string|nullable|max:255',
            
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('customers'), // Unique email validation
            ],
            'phone' => 'string|nullable|max:255',
            'status' => 'string|nullable|max:255',

        ]);

        $agent = new Agent();
        $agent->user_id = $request->user()['id'];
        $agent->avatar_image_id = $request->avatar_image;
        $agent->bio_image_id = $request->bio_image;
        $agent->first_name = $validatedData['first_name'];
        $agent->last_name = $validatedData['last_name'];
        $agent->display_name = $validatedData['display_name'];
        $agent->title = $validatedData['title'];
        $agent->bio = $request->input('bio');
        $agent->email = $validatedData['email'];
        $agent->phone = $validatedData['phone'];
        $agent->status = $validatedData['status'];
        $agent->extra_emails = $request->input('extra_email');
        $agent->extra_phones = $request->input('extra_phone');
       
        $agent->save();

        $activity = new Activity();
        $activity->agent_id = $agent->id;
        $activity->code = "agent_created";
        $activity->description = [
            'agent_data' =>[
                'id' => $agent->id,
                'full_name' => $agent->first_name.$agent->last_name,
                'email' => $agent->email,
                'phone' => $agent->phone
            ]
        ];
        $activity->initiated_by = "admin";
        $activity->initiated_by_id = $request->user()['id'];
        $activity->save();
        
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
    public function update(Request $request, string $id)
    {
        $agent = Agent::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255', // Adjust length as needed
            'last_name' => 'string|nullable|max:255',
            'display_name' => 'string|nullable|max:255',
            'title' => 'string|nullable|max:255',
            
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('customers'), // Unique email validation
            ],
            'phone' => 'string|nullable|max:255',
            'status' => 'string|nullable|max:255',

        ]);
        
        $agent->first_name = $validatedData['first_name'];
        $agent->last_name = $validatedData['last_name'];
        $agent->display_name = $validatedData['display_name'];
        $agent->title = $validatedData['title'];
        $agent->bio = $request->input('bio');
        $agent->email = $validatedData['email'];
        $agent->phone = $validatedData['phone'];
        $agent->status = $validatedData['status'];
        $agent->extra_emails = $request->input('extra_email');
        $agent->extra_phones = $request->input('extra_phone');
        if($request->avatar_image) {
        $agent->avatar_image_id = $request->avatar_image;
        }
        if($request->bio_image) {
        $agent->bio_image_id = $request->bio_image;
        }
       
        $agent->save();

        $activity = new Activity();
        $activity->agent_id = $agent->id;
        $activity->code = "agent_updated";
        $activity->description = [
            'agent_data' =>[
                'id' => $agent->id,
                'full_name' => $agent->first_name.$agent->last_name,
                'email' => $agent->email,
                'phone' => $agent->phone
            ]
        ];
        $activity->initiated_by = "admin";
        $activity->initiated_by_id = $request->user()['id'];
        $activity->save();
        
        return redirect('/resource/agents')->with('success', 'Customer created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::findOrFail($id);
        

        $activity = new Activity();
        $activity->agent_id = $agent->id;
        $activity->code = "agent_deleted";
        $activity->description = [
            'agent_data' =>[
                'id' => $agent->id,
                'full_name' => $agent->first_name.$agent->last_name,
                'email' => $agent->email,
                'phone' => $agent->phone
            ]
        ];
        $activity->initiated_by = "admin";
        $activity->initiated_by_id = $request->user_id;
        $activity->save();

        $agent->delete();
        return redirect('/resource/agents')->with('success', 'Customer created successfully.');
    }
}

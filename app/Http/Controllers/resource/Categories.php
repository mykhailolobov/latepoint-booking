<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ServiceCategory::all();
        return view('content.resource.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new ServiceCategory();
        $category->name = $request->input('name');
        $category->short_description = $request->input('short_description');
        $category->selection_image_id = $request->selection_image_id;
        // $category->parent_id = 1;

        $category->save();
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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = ServiceCategory::findOrFail($id);

        $category->name = $request->name;
        $category->short_description = $request->short_description;

        $category->save();

        return redirect('/resource/categories')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category -> delete();

        return redirect('/resource/categories')->with('success', 'Category updated successfully.');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyJob;

class MyJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return view('my_jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('my_jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:16777215',
            'budget' => 'required|integer',
        ]);
        
        // Create a new FormData model and save the data
        $formData = new MyJob();
        $formData->title = $validatedData['title'];
        $formData->description = $validatedData['description'];
        $formData->budget = $validatedData['budget'];
        $formData->save();				

        // Redirect or return response
        return redirect()->back()->with('success', 'Job created successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

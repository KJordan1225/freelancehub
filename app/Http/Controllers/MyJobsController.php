<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\MyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {      
        $results = MyJob::all();
        return view('my_jobs.index', compact('results'));        
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
        
        $clientRole = Role::where('name','Client');
        
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:16777215',
            'budget' => 'required|integer',
            'job_experience' => 'string',
            'job_pay_type' => 'string',
            'job_duration' => 'string',
        ]);
        
        // Create a new FormData model and save the data
        $formData = new MyJob();
        $formData->title = $validatedData['title'];
        if(empty($validatedData['description'])){
            $formData->description = 'No Description';
        }else{
            $formData->description = $validatedData['description'];  
        }
        $formData->budget = $validatedData['budget'];
        $formData->job_experience = $validatedData['job_experience'];
        $formData->job_pay_type = $validatedData['job_pay_type'];
        $formData->job_duration = $validatedData['job_duration']; 
        if(is_null(Auth::id())){
            $formData->user_id = 1 ;
        }else{
            $formData->user_id = Auth::id();
        }
          
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

@extends('layouts.app')

@section('content')
    <h2>Create a Job</h2>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-9">
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf				
            <!-- Title Textfield -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="">
            </div>

            <!-- Description Textfield -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>

            <!-- Budget Textfield -->
            <div class="form-group">
                <label for="budget">Budget</label>
                <input type="number" class="form-control" id="budget" name="budget">                
            </div>

            <!-- Experience Textfield -->
            <div class="form-group">
                <label for="job_experience">Job Level</label>
                <select name="job_experience" id="job_experience">
                    <option value="professional" selected>Professional</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="entrty_levek">Entry Level</option>
                </select>
            </div>

            <!-- Pay Type Textfield -->
            <div class="form-group">
                <label for="job_pay_type">Job Pay type</label>
                <select name="job_experience" id="job_experience">
                    <option value="fixed" selected>Fixed</option>
                    <option value="hourly">Hourly</option>
                </select>
            </div>

            <!-- Job Duration Textfield -->
            <div class="form-group">
                <label for="title">Duration</label>
                <input type="text" class="form-control" id="job_duration" name="job_duration" value="">
            </div>            

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
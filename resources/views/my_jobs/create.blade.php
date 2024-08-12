@extends('layouts.app')

@section('content')
    <h2>Create a Job</h2>

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

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
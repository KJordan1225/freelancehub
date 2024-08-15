<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function do(Request $request) {

        // dd($request);
        
        return view('my_jobs.index');

    }
}

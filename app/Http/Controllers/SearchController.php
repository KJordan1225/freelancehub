<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MyJob;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function do(Request $request) {

        $searchterm = $request->fullname;
        $searchtype = $request->searchtype;

        // dd($searchtype);

        if (!empty($searchtype)) {

            switch ($searchtype) {
                case "freelancer":
                    $results = DB::table('my_jobs')->where('name','%like%',$searchterm);
                    break;
                case "job":
                    // $results_1 = MyJob::all();
                    $results_1 = MyJob::Paginate(2);
                    // dd($results_1);
                    // return view('my_jobs.index', compact('results'))->with('success','Search results listed below');
                    return redirect()->route('jobs.index', compact('results_1'));                    
                    break;
                case "services":
                    // $results = Service::where('title','%like%',$searchterm);
                    break;
                default:
                    $results = User::where('name','%like%',$searchterm);
                    break;
            }

        }   
    }
}

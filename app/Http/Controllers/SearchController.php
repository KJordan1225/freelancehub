<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Nodels\User;
use App\Models\MyJob;
use App\Models\Service;

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
                    $results = MyJob::all();
                    // $results = MyJob::Paginate(2);
                    return view('my_jobs.index', compact('results'))->with('success','Search results listed below');
                    // return redirect('/jobs', compact('results'));                    
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

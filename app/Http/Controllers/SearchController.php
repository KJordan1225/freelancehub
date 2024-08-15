<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                    $results = User::where('name','%like%',$searchterm);
                    break;
                case "job":
                    $results = MyJob::where('title','%like%',$searchterm);
                    return view('my_jobs.index');
                    break;
                case "services":
                    // $results = Service::where('title','%like%',$searchterm);
                    break;
                default:
                    $results = User::where('name','%like%',$searchterm);
                    break;
            }

        }       
        
        return view('my_jobs.index');

    }
}

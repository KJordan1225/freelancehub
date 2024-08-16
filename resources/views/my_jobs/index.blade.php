@extends('layouts.app')

@section('content')

    @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Jobs</h2>

    <div class="wt-haslayout wt-main-section">
        <!-- User Listing Start-->
        <div class="wt-haslayout">
            <div class="container">
            @foreach ($results as $row)
                <div class="row">
                    <div class="col-md-9">
                        <div class="wt-contenthead">
                            <div class="wt-title">
                                <a href="#"><i class="fa fa-check-circle"></i> Link to Client posting job</a>
                                <h2>{{ $row->title }}</h2>
                            </div>
                            <div class="wt-description">
                                <p>{{ $row->description }}</p>
                            </div>	
                            <div class="wt-description">
                                <p>${{ $row->budget }}</p>
                            </div>													
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wt-viewjobholder">
                            <ul>
                                <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>{{ $row->job_experience }}</span></li>
                                <!-- <li><span><em><img src="{{asset('assets/images/flag/img-04.png') }}" alt="img description"></em>England</span></li> -->
                                <li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: {{ $row->job_pay_type }}</span></li>
                                <li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: {{ $row->job_duration }}</span></li>
                                <!-- <li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li> -->
                                <li><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                <li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
           
            </div>
        </div>
    </div>
    
@endsection
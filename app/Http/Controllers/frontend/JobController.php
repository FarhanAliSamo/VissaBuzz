<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with(['seniority', 'industry', 'jobType', 'experience', 'country', 'city'])->get();
        
        // dd($jobs);
        return view('frontend.jobs',compact('jobs'));
    }
    public function show($id){
        $data = Job::with(['seniority', 'industry', 'jobType', 'experience', 'country', 'city'])->find($id);
        // dd($data);
        return view('frontend.jobsapply',compact('data'));
    }
}

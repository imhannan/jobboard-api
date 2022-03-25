<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobResource;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->paginate(10);
        return JobResource::collection($jobs);
    }

    public function show(Job $job)
    {
        return new JobResource($job);
    }
}

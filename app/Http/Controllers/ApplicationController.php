<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return ApplicationResource::collection(Application::latest()->paginate(10));
    }

    public function show(Application $application)
    {
        $this->authorize('view', $application);

        return ApplicationResource::make($application);
    }

    public function create(Request $request, Job $job)
    {
        $this->authorize('create',Application::class);


        $data = $request->validate([
            'name' => ['required'],
            'salary' => ['required', 'numeric'],
            'email' => ['required'],
            'phone' => ['required', 'numeric'],
            'cover_letter' => ['required']
        ]);

        $application = $job->applications()->create($data);

        return response()->json([
            'message' => 'created successfully',
            'application' => $application
        ], 201);
    }

}

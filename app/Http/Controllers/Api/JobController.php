<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Job\AddJobReservationRequest;
use App\Job;

class JobController extends Controller
{
    public function store(AddJobReservationRequest $request, Job $job)
    {
    	$job = $job->create($request->only([
    		'name',
    		'phone',
    		'service_type',
    		'kilogram',
    		'washer_mode',
    		'dryer_mode',
    		'detergent',
    		'bleach',
    		'fabric_conditioner',
    		'is_press',
    		'is_fold',
    		'status',
    		'reserve_at'
    		]));
    	
    	return response()->json([
    		'message' => 'Reserved',
    		'data' => $job->toArray()
    		]);
    }
}
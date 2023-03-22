<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HospitalResource;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HospitalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Hospital::all();
        return HospitalResource::collection($departments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $doctor = Hospital::create($request->all());

        return new HospitalResource($doctor);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

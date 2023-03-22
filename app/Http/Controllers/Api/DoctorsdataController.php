<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctorsdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;


class DoctorsdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $doctors = Doctorsdata::all();
        return response()->json($doctors);
    }

    public function show(Doctorsdata $doctor)
    {
        return $doctor;
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'adinfo' => 'required',
            'uzmanlik' => 'required',
            'ilinfo' => 'required',
            'klinik' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $doctor = Doctorsdata::create($request->all());
        return response()->json($doctor, 201);
    }

    public function update(Request $request, Doctorsdata $doctor)
    {
        $doctor->update($request->all());
        return response()->json($doctor, 200);
    }

    public function delete(Doctorsdata $doctor)
    {
        $doctor->delete();
        return response()->json(null, 204);
    }
}

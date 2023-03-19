<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\PatientResource;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return DoctorResource::collection($doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
//            'user_id' => 'required|exists:users,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'department_id' => 'required|exists:departments,id',
            'specialty' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'type' => 'required|in:devlet,ozel',
            'likes' => 'integer|min:0',
            'dislikes' => 'integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $doctor = Doctor::create($request->all());

        return new DoctorResource($doctor);
    }

    /**
     * Display the specified resource.
     * @param Doctor $doctor
     * @return DoctorResource
     */
    public function show(Doctor $doctor)
    {
        return new DoctorResource($doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'sometimes|required|exists:users,id',
            'hospital_id' => 'sometimes|required|exists:hospitals,id',
            'department_id' => 'sometimes|required|exists:departments,id',
            'specialty' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'type' => 'sometimes|required|in:devlet,ozel',
            'likes' => 'integer|min:0',
            'dislikes' => 'integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $doctor->update($request->all());

        return new DoctorResource($doctor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response()->json(['message' => 'Doktor başarıyla silindi.']);
    }

    public function patients(Doctor $doctor)
    {
        $patients = $doctor->patients;
        return PatientResource::collection($patients);
    }

    public function appointments(Doctor $doctor)
    {
        $appointments = $doctor->appointments;
        return AppointmentResource::collection($appointments);
    }
}

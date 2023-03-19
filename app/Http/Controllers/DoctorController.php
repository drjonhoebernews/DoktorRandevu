<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorRating;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function like(Request $request, Doctor $doctor)
    {
        $userId = $request->user() ? $request->user()->id : null;
        $ipAddress = $request->ip();

        $rating = DoctorRating::where('doctor_id', $doctor->id)
            ->where(function ($query) use ($userId, $ipAddress) {
                $query->where('user_id', $userId)
                    ->orWhere('ip_address', $ipAddress);
            })->first();

        if ($rating) {
            return response()->json(['message' => 'Zaten oylama yapıldı.']);
        }
        $newRating = new DoctorRating([
            'doctor_id' => $doctor->id,
            'user_id' => $userId,
            'ip_address' => $ipAddress,
            'liked' => true,
        ]);

        $newRating->save();

        return response()->json(['message' => 'Doktor başarıyla beğenildi.']);
    }

    public function dislike(Request $request, Doctor $doctor)
    {
        $userId = $request->user() ? $request->user()->id : null;
        $ipAddress = $request->ip();

        $rating = DoctorRating::where('doctor_id', $doctor->id)
            ->where(function ($query) use ($userId, $ipAddress) {
                $query->where('user_id', $userId)
                    ->orWhere('ip_address', $ipAddress);
            })->first();

        if ($rating) {
            return response()->json(['message' => 'Zaten oylama yapıldı.']);
        }

        $newRating = new DoctorRating([
            'doctor_id' => $doctor->id,
            'user_id' => $userId,
            'ip_address' => $ipAddress,
            'liked' => false,
        ]);

        $newRating->save();

        return response()->json(['message' => 'Doktor başarıyla beğenilmedi.']);
    }



}

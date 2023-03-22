<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HospitalResource;
use App\Models\Doctorsdata;
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

    public function kliniktohospital(){
        $klinikbul = Doctorsdata::select('klinik','address')->get();

        foreach ($klinikbul as $key => $klinik){
            $klinikkontrol = Hospital::where('name',$klinik->name)->where('address', $klinik->adrdress)->first();
            if (empty($klinikkontrol)){
                $olstur = Hospital::create([
                    'name' => $klinik->klinik,
                    'address' => $klinik->address
                ]);
                $olstur->save();
            }else{
                print $klinik->name.'  kilinik ve '. $klinik->address.' adres var zaten';
            }
        }
    }
}

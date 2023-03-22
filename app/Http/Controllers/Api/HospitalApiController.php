<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HospitalResource;
use App\Models\City;
use App\Models\District;
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

    static function parse_il_ilce($ilinfo)
    {
        $il_ilce = explode("\n", $ilinfo);
        $il = trim($il_ilce[0]);
        print $il_ilce[0].' u geldi <br>';
        print !empty($il_ilce[1]) ? $il_ilce[1].' u geldi <br>' :' u geldi <br>';
        if (empty($il_ilce[1] )){
            $ilce = 'MERKEZ';
        }elseif ($il_ilce[1] === 'Diğer'){
            $ilce = 'MERKEZ';
        }elseif ($il_ilce[0] === 'Diğer'){
            $il = 'ANKARA';
            $ilce = 'MERKEZ';
        }else{
            $ilce = trim($il_ilce[1]);
        }

        return [
            'il' => mb_strtoupper(!empty($il) ? $il :'Tanımsız'),
            'ilce' => mb_strtoupper($ilce)
        ];
    }

    public function kliniktohospital()
    {
        ini_set('max_execution_time', 4600); // 120 saniye olarak ayarlayın
        $klinikbul = Doctorsdata::select('id','klinik', 'address','ilinfo')->where('id','>','20582')->get();

        foreach ($klinikbul as $klinik) {
            print $klinik->id.'<br>';
            $klinikkontrol = Hospital::where('name', $klinik->klinik)->where('address', $klinik->address)->first();

            if ($klinikkontrol === null) {
                $sonuc = $this->parse_il_ilce($klinik->ilinfo);
                $ilbul = City::where('name',$sonuc['il'])->first();
                $ilce = District::where('name',$sonuc['ilce'])->where('city_id',$ilbul->id)->first();
                print $ilce.'<br>';
                if (!empty($ilce)){
                    $ilceblog = $ilce->id;
                }else{
                    $ilceildenbul = District::where('city_id', $ilbul->id)->first();
                    $ilceblog = $ilceildenbul->id;
                }
                Hospital::create([
                    'name' => $klinik->klinik,
                    'address' => $klinik->address,
                    'city_id' => $ilbul->id,
                    'district_id' => $ilceblog,
                ]);
            }
//            else {
//                print $klinik->klinik.' klinik ve '. $klinik->address.' adres zaten var <br>';
//            }
        }
    }




    public function sonuc(){
        $ilinfo = "Bursa\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNilüfer";
        $sonuc = $this->parse_il_ilce($ilinfo);

        echo "İl: " . $sonuc['il'] . "\n";  // Çıktı: İl: Bursa
        echo "İlçe: " . $sonuc['ilce'] . "\n";  // Çıktı: İlçe: Nilüfer
    }
}

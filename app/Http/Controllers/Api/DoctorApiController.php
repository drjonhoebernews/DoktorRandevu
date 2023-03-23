<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\PatientResource;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Doctorsdata;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    public function doktorcreate(){
        ini_set('max_execution_time', 4600); // 120 saniye olarak ayarlayın
        $doktorbul = Doctorsdata::select('id', 'adinfo', 'uzmanlik', 'klinik')->where('id','>',5959)->get();

        foreach ($doktorbul as $doktorData) {
            // Yeni bir kullanıcı oluşturun ve şifreyi hash'leyin
            $user = new User([
                'name' => $doktorData->adinfo,
                'email' => str::slug($doktorData->adinfo).'@doktorbilgini.com', // Burada gerçek e-posta adresini kullanmalısınız
                'password' => Hash::make('sifre123'), // Burada gerçek şifreyi kullanmalısınız
                'user_type' => 'doctor',
            ]);

            // Kullanıcıyı kaydedin
            $user->save();

            $uzmanlikAdlari = explode(',', $doktorData->uzmanlik);
            $klinikAdlari = $doktorData->klinik;

            $uzmanlikIds = [];
            foreach ($uzmanlikAdlari as $uzmanlikAdi) {
                $uzmanlik = Department::where('name', $uzmanlikAdi)->first();
                if ($uzmanlik) {
                    $uzmanlikIds[] = $uzmanlik->id;
                }
            }

            $klinikIds = [];
            $klinik = Hospital::where('name', $klinikAdlari)->first();
            if ($klinik) {
                $klinikIds[] = $klinik->id;
            }
            $type = (str_contains($doktorData->klinik, 'devlet hastane') || str_contains($doktorData->klinik, 'şehir hastane')) ? 'mhrs' : 'kayitsiz';

            $doktor = new Doctor([
                'user_id' => $user->id,
                'specialty' => '', // Eğer özel bir değer varsa, buraya ekleyin
                'type' => $type,
            ]);
            // Doktoru kaydedin
            $doktor->save();

            // Doktorun uzmanlık ve klinik ilişkilerini ayarlayın
            $doktor->departments()->attach($uzmanlikIds);
            $doktor->hospitals()->attach($klinikIds);
        }
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

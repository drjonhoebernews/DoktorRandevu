<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'identity_number',
        'date_of_birth',
        'gender',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function photos()
    {
        return $this->hasMany(PatientPhoto::class);
    }

    public function diagnoses()
    {
        return $this->hasManyThrough(
            Diagnosis::class,
            Appointment::class,
            'patient_id', // appointments tablosunda patient_id sütunu
            'appointment_id', // diagnoses tablosunda appointment_id sütunu
            'id', // patients tablosunda id sütunu
            'id'  // appointments tablosunda id sütunu
        );
    }

    //bu kodla erişebiliyoruz hastanın bilgilerini döndürür $patientDiagnoses = $patient->diagnoses;

}

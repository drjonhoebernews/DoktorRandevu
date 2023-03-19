<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'photo_path',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

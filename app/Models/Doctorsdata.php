<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctorsdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'adinfo', 'uzmanlik', 'ilinfo', 'klinik', 'address'
    ];
}

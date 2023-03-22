<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug'
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}

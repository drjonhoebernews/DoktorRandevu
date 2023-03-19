<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;


    protected $fillable = [
        'seoable_id',
        'seoable_type',
        'title',
        'description',
        'keywords',
    ];

    public function seoable()
    {
        return $this->morphTo();
    }
}

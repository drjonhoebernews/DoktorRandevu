<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}

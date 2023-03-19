<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialty',
        'phone',
        'email',
        'type',
        'likes',
        'dislikes',
    ];

    protected static function booted()
    {
        static::creating(function ($doctor) {
            // Yeni bir kullanıcı oluşturun ve şifreyi hash'leyin
            $user = new User([
                'email' => $doctor->email,
                'password' => Hash::make($doctor->password),
                'user_type' => 'doctor',
            ]);

            // Kullanıcıyı kaydedin ve doktorun user_id alanını güncelleyin
            $user->save();
            $doctor->user_id = $user->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function workingHours()
    {
        return $this->hasMany(WorkingHour::class);
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function ratings()
    {
        return $this->hasMany(DoctorRating::class);
    }

}

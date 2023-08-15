<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'business_hours',
        'regular_holiday',
        'phone',
        'payment_method',
        'access_method',
        'postal_code',
        'pref',
        'address',
        'google_map',
        'sns',
        'available_pets',
        'available_feeds',
        'website',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}

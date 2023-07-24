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
        'payment_methods',
        'access_method',
        'postal_code',
        'address',
        'google_map',
        'sns',
        'available_pets',
        'available_feeds',
        'website',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'shop_name',
        'business_hours',
        'regular_holiday',
        'phone',
        'access_method',
        'postal_code',
        'address',
        'map',
        'website',
        'pref',
        'description',
        'animal_handler',
        'shop_image1',
        'shop_image2',
        'shop_image3',
        'shop_image4',
        'public_flag',
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

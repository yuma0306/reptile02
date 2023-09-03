<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'category',
        'species',
        'price',
        'age',
        'title',
        'text',
        'size',
        'pet_image1',
        'pet_image2',
        'pet_image3',
        'pet_image4',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    // public function petImages()
    // {
    //     return $this->hasMany(PetImage::class);
    // }
}

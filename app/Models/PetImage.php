<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetImage extends Model
{
    protected $fillable = [
        'pet_id',
        'pet_image1',
        'pet_image2',
        'pet_image3',
        'pet_image4'
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}

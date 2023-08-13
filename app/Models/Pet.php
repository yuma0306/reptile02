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
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}

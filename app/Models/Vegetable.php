<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;
    protected $table = 'vegetables';

    protected $fillable = [
        'name',
        'rating',
        'price',
        'location',
        'description',
        'image'
        // Add more fields as needed
    ];
}

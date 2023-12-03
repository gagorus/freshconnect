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
        'seller_location',
        'size_in_grams',
        // Add more fields as needed
    ];
}

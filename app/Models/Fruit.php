<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;
    protected $table = 'fruits';

    protected $fillable = [
        'name',
        'rating',
        'price',
        'location',
        'shortdesc',
        'longdesc',
        'image'

        // Add more fields as needed
    ];
}

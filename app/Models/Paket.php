<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'pakets';

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

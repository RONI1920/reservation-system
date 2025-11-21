<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // protected $guarded = []; //mengisi semua kolom dgn cepat

    // Cara paling ketat 
    protected $fillable = [
        'name',
        'capacity',
        'description',
    ];
}

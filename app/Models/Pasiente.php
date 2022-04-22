<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasiente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad'
    ];
}

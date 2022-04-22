<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'establecimientos_id',
        'nombre'
    ];

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class);
    }
}

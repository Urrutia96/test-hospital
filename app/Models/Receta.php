<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicos_id',
        'pasientes_id'
    ];

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    public function pasiente()
    {
        return $this->belongsTo(Pasiente::class);
    }

    public function items()
    {
        return $this->hasMany(RecetaItem::class);
    }
}

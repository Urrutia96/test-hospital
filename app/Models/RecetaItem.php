<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'recetas_id',
        'medicamentos_id',
        'cantidad',
        'dosis'
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}

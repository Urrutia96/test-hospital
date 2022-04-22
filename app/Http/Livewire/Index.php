<?php

namespace App\Http\Livewire;

use App\Models\Establecimiento;
use App\Models\Medico;
use App\Models\Receta;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index', [
            'establecimientos' => Establecimiento::all(),
            'medicos' => Medico::all(),
            'recetas' => Receta::all()
        ]);
    }
}

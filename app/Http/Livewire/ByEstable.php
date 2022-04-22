<?php

namespace App\Http\Livewire;

use App\Models\Establecimiento;
use Livewire\Component;

class ByEstable extends Component
{
    public $establecimiento;

    public function mount(Establecimiento $establecimiento)
    {
        $this->establecimiento = $establecimiento;
    }

    public function render()
    {
        return view('livewire.by-estable', [
            'recetas' => Establecimiento::query()
                ->select('recetas.id', 'recetas.created_at')
                ->join('medicos', 'establecimientos.id', '=', 'medicos.establecimiento_id')
                ->join('recetas', 'medicos.id', '=', 'recetas.medico_id')
                ->where('establecimientos.id', $this->establecimiento->id)
                ->get()
            // 'establecimientos' => Receta::join('medicos', 'medicos.id', '=', 'recetas.medico_id')->groupBy('medicos.establecimiento_id')->get()
        ]);
    }
}

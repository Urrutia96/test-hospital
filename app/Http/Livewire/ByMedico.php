<?php

namespace App\Http\Livewire;

use App\Models\Medico;
use App\Models\Receta;
use Livewire\Component;

class ByMedico extends Component
{
    public $medico;

    public function mount(Medico $medico)
    {
        $this->medico = $medico;
    }

    public function render()
    {
        return view('livewire.by-medico', [
            'recetas' => Receta::query()->select('id', 'created_at')->where('medico_id', '=', $this->medico->id)->get()
        ]);
    }
}

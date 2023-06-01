<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaVacancy;
use Livewire\Component;

class CcsVacancies extends Component
{
    public function render()
    {
        $items = MantaVacancy::where('locale', 'nl')->get();
        return view('livewire.ccs.ccs-vacancies', ['items' => $items])->layout('layouts.ccs');
    }
}

<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsVacancies extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-vacancies')->layout('layouts.ccs');
    }
}

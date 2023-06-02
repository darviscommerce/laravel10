<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaVacancy;
use Illuminate\Http\Request;
use Livewire\Component;

class CcsVacancy extends Component
{

    public MantaVacancy $item;

    public function mount($input)
    {
        $item = MantaVacancy::where('slug', $input)->where('show_from', '<', now())->where('show_till', '>', now())->first();
        if (!$item) {
            return redirect()->to(route('ccs.vacancies.list'));
        }
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.ccs.ccs-vacancy')->layout('layouts.ccs');
    }
}

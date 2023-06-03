<?php

namespace App\Http\Livewire\Ccs\Widgets;

use App\Models\MantaVacancy;
use Livewire\Component;

class CcsNavigation extends Component
{
    public function render()
    {
        $vacancies = count(MantaVacancy::where('locale', app()->getLocale())->where('show_from', '<', now())->where('show_till', '>', now())->get());
        return view('livewire.ccs.widgets.ccs-navigation', ['vacancies' => $vacancies]);
    }
}

<?php

namespace App\Http\Livewire\Ccs\Widgets;

use App\Models\MantaPage;
use Livewire\Component;

class CcsProducts extends Component
{
    public function render()
    {
        $why = MantaPage::find(2);
        $capacity = MantaPage::find(5);
        $service = MantaPage::find(3);
        return view('livewire.ccs.widgets.ccs-products', ['why' => $why, 'capacity' => $capacity, 'service' => $service]);
    }
}

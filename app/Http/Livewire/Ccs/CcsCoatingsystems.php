<?php

namespace App\Http\Livewire\Ccs;

use Manta\LaravelPages\Models\MantaPage;
use Livewire\Component;

class CcsCoatingsystems extends Component
{
    public function render()
    {
        $item = MantaPage::find(4);
        return view('livewire.ccs.ccs-coatingsystems', ['item' => $item])->layout('layouts.ccs');
    }
}

<?php

namespace App\Http\Livewire\Ccs;

use Manta\LaravelPages\Models\MantaPage;
use Livewire\Component;

class CcsAbout extends Component
{
    public function render()
    {
        $item = MantaPage::find(1);
        return view('livewire.ccs.ccs-about', ['item' => $item])->layout('layouts.ccs');
    }
}

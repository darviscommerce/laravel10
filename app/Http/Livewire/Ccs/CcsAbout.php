<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsAbout extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-about')->layout('layouts.ccs');
    }
}

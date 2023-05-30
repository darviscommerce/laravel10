<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsHomepage extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-homepage')->layout('layouts.ccs');
    }
}

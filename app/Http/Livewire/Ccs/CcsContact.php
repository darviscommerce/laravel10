<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsContact extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-contact')->layout('layouts.ccs');
    }
}

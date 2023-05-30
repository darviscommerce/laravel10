<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsView extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-view')->layout('layouts.ccs');
    }
}

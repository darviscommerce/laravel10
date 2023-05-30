<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsNews extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-news')->layout('layouts.ccs');
    }
}

<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsCookiebot extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-cookiebot')->layout('layouts.ccs');
    }
}

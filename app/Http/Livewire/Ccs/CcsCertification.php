<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsCertification extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-certification')->layout('layouts.ccs');
    }
}

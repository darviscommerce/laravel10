<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaPage;
use Livewire\Component;

class CcsCertification extends Component
{
    public function render()
    {
        $item = MantaPage::find(6);
        return view('livewire.ccs.ccs-certification', ['item' => $item])->layout('layouts.ccs');
    }
}

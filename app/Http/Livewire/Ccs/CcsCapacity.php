<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaPage;
use Livewire\Component;

class CcsCapacity extends Component
{
    public function render()
    {
        $item = MantaPage::find(5);
        return view('livewire.ccs.ccs-capacity', ['item' => $item])->layout('layouts.ccs');
    }
}

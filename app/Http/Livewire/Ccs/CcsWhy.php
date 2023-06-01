<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaPage;
use Livewire\Component;

class CcsWhy extends Component
{
    public function render()
    {
        $item = MantaPage::find(2);
        return view('livewire.ccs.ccs-why', ['item' => $item])->layout('layouts.ccs');
    }
}

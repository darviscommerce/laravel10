<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaPage;
use Livewire\Component;

class CcsService extends Component
{
    public function render()
    {
        $item = MantaPage::find(3);
        return view('livewire.ccs.ccs-service', ['item' => $item])->layout('layouts.ccs');
    }
}

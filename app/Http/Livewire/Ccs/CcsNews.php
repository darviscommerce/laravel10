<?php

namespace App\Http\Livewire\Ccs;

use App\Models\MantaBlog;
use Livewire\Component;

class CcsNews extends Component
{
    public function render()
    {
        $items = MantaBlog::where('locale', 'nl')->where('show_from', '<', now())->where('show_till', '>', now())->get();
        return view('livewire.ccs.ccs-news', ['items' => $items])->layout('layouts.ccs');
    }
}

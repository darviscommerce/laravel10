<?php

namespace App\Http\Livewire\Ccs\Widgets;

use App\Models\MantaBlog;
use Livewire\Component;

class CcsNews extends Component
{
    public function render()
    {
        $items = MantaBlog::where('locale', 'nl')->where('show_from', '<', now())->where('show_till', '>', now())->limit(3)->get();
        return view('livewire.ccs.widgets.ccs-news', ['items' => $items])->layout('layouts.ccs');
    }
}

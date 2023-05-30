<?php

namespace App\Http\Livewire\Ccs;

use Livewire\Component;

class CcsNewsView extends Component
{
    public function render()
    {
        return view('livewire.ccs.ccs-news-view')->layout('layouts.ccs');
    }
}

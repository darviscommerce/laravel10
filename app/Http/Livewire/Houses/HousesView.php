<?php

namespace App\Http\Livewire\Houses;

use Livewire\Component;

class HousesView extends Component
{

    public function mount($input)
    {
        dd($input);
    }

    public function render()
    {
        return view('livewire.houses.houses-view')->layout('layouts.otterlo');
    }
}

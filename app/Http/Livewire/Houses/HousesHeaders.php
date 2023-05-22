<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Livewire\Component;

class HousesHeaders extends Component
{
    public MantaHouse $item;

    public string $view = 'headers';

    public function render()
    {
        return view('livewire.houses.houses-headers')->layout('layouts.manta-bootstrap');
    }
}

<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Livewire\Component;

class HousesDetails extends Component
{
    public MantaHouse $item;

    public string $view = 'details';

    public function render()
    {
        return view('livewire.houses.houses-details')->layout('layouts.manta-bootstrap');
    }
}

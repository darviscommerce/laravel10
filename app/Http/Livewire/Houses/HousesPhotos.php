<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Livewire\Component;

class HousesPhotos extends Component
{
    public MantaHouse $item;

    public string $view = 'photos';

    public function render()
    {
        return view('livewire.houses.houses-photos')->layout('layouts.manta-bootstrap');
    }
}

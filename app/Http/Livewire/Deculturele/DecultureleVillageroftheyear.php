<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleVillageroftheyear extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-villageroftheyear')->layout('layouts.deculturele', ['title' => 'Dorper van het jaar']);
    }
}

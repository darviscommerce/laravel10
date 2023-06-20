<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleEvents extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-events')->layout('layouts.deculturele', ['title' => 'Evenement']);
    }
}

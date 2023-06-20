<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleContact extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-contact')->layout('layouts.deculturele', ['title' => 'Contact met de culturele vereniging Julianadorp']);
    }
}

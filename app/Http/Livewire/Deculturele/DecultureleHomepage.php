<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleHomepage extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-homepage')->layout('layouts.deculturele', ['title' => 'Culturele vereniging Julianadorp']);
    }
}

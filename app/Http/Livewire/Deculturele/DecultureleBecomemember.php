<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleBecomemember extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-becomemember')->layout('layouts.deculturele', ['title' => 'Lid worden van de culturele vereniging Julianadorp']);
    }
}

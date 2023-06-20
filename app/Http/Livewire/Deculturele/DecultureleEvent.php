<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleEvent extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-event')->layout('layouts.deculturele', ['title' => 'Evenementen']);
    }
}

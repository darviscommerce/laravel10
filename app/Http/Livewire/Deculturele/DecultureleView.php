<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleView extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-view')->layout('layouts.deculturele', ['title' => 'Informatie']);
    }
}

<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleAlbums extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-albums')->layout('layouts.deculturele', ['title' => 'Foto\'s en Media']);
    }
}

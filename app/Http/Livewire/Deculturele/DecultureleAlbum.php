<?php

namespace App\Http\Livewire\Deculturele;

use Livewire\Component;

class DecultureleAlbum extends Component
{
    public function render()
    {
        return view('livewire.deculturele.deculturele-album')->layout('layouts.deculturele', ['title' => 'Foto\'s en Media']);
    }
}

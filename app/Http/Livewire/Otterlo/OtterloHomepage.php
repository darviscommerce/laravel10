<?php

namespace App\Http\Livewire\Otterlo;

use Livewire\Component;

class OtterloHomepage extends Component
{
    public function render()
    {
        return view('livewire.otterlo.otterlo-homepage')->layout('layouts.otterlo');
    }
}

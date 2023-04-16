<?php

namespace App\Http\Livewire\Otterlo;

use Livewire\Component;

class OtterloPage extends Component
{
    public function render()
    {
        return view('livewire.otterlo.otterlo-page')->layout('layouts.otterlo');
    }
}

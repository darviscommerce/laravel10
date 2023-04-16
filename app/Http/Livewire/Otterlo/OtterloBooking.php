<?php

namespace App\Http\Livewire\Otterlo;

use Livewire\Component;

class OtterloBooking extends Component
{
    public function render()
    {
        return view('livewire.otterlo.otterlo-booking')->layout('layouts.otterlo');
    }
}

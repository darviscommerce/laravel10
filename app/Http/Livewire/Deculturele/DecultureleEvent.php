<?php

namespace App\Http\Livewire\Deculturele;

use App\Models\MantaEvent;
use Livewire\Component;

class DecultureleEvent extends Component
{
    public ?MantaEvent $item = null;

    public function mount($input)
    {
        $item = MantaEvent::where('slug', $input)->first();
        if ($item == null) {
            return redirect()->to(route('manta.event.list'));
        }
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.deculturele.deculturele-event')->layout('layouts.deculturele', ['title' => 'Evenementen']);
    }
}

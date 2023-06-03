<?php

namespace App\Http\Livewire\Ccs;

use Manta\LaravelPages\Models\MantaPage;
use Livewire\Component;

class CcsView extends Component
{

    public MantaPage $item;

    public function mount($input)
    {
        $item = MantaPage::where('slug', $input)->first();
        if (!$item) {
            return abort(404);
        }
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.ccs.ccs-view')->layout('layouts.ccs');
    }
}

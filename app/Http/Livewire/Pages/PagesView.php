<?php

namespace App\Http\Livewire\Pages;

use App\Models\MantaPage;
use Livewire\Component;



class PagesView extends Component
{

    public MantaPage $item;

    public function mount($input)
    {
        $item = MantaPage::where('slug', $input)->first();
        if(!$item){
            return abort(404);
        }
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.pages.pages-view')->layout('layouts.otterlo');
    }
}

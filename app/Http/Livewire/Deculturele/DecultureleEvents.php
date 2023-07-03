<?php

namespace App\Http\Livewire\Deculturele;

use App\Models\MantaEvent;
use Livewire\Component;
use Livewire\WithPagination;
use Manta\LaravelCms\Traits\WithSorting;

class DecultureleEvents extends Component
{
    use WithSorting;

    public function mount()
    {
        $this->sortBy = 'created_at';
        $this->sortDirection = 'DESC';
    }

    public function render()
    {
        $obj = MantaEvent::orderBy($this->sortBy, $this->sortDirection);
        $items = $obj->get();
        return view('livewire.deculturele.deculturele-events', ['items' => $items])->layout('layouts.deculturele', ['title' => 'Evenement']);
    }
}

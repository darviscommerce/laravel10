<?php

namespace App\Http\Livewire\Event;

use App\Models\MantaEvent;
use Illuminate\Http\Request;
use Livewire\Component;

class EventUploads extends Component
{
    public MantaEvent $item;

    public ?string $locale = null;
    public ?string $plugin = null;

    public ?string $show = 'uploads';

    public function mount(Request $request, $input)
    {
        $item = MantaEvent::find($input);
        if ($request->input('locale')) {
            $item = MantaEvent::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if ($item == null) {
                return redirect()->to(route('manta.pages.create', ['locale' => $request->input('locale'), 'pid' => $input]));
            }
        }
        if ($item == null) {
            return redirect()->to(route('manta.pages.list'));
        }
        $this->item = $item;
        $this->locale = $item->locale;
        $this->plugin = 'uploads';
    }

    public function render()
    {
        return view('livewire.event.event-uploads')->layout('layouts.manta-bootstrap');
    }

    public function store($input)
    {
    }
}

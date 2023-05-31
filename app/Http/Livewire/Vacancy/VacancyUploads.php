<?php

namespace App\Http\Livewire\Vacancy;

use App\Models\MantaVacancy;
use Illuminate\Http\Request;
use Livewire\Component;

class VacancyUploads extends Component
{
    public MantaVacancy $item;

    public ?string $locale = null;
    public ?string $plugin = null;

    public function mount(Request $request, $input)
    {
        $item = MantaVacancy::find($input);
        if ($request->input('locale')) {
            $item = MantaVacancy::where('locale', $request->input('locale'))->where('pid', $input)->first();
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
        return view('livewire.vacancy.vacancy-uploads')->layout('layouts.manta-bootstrap');
    }

    public function store($input)
    {
    }
}

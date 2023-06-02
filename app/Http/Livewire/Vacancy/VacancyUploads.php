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

    public string $view = 'list';

    protected $listeners = ['uploadsCreated' => 'uploadsCreated'];

    public function uploadsCreated()
    {
        $this->view = 'list';
    }

    public function mount(Request $request, $input)
    {
        $item = MantaVacancy::find($input);
        // if ($request->input('locale') && $request->input('locale') != 'nl') {
        //     $item = MantaVacancy::where('locale', $request->input('locale'))->where('pid', $input)->first();
        //     if ($item == null) {
        //         return redirect()->to(route('manta.vacancies.create', ['locale' => $request->input('locale'), 'pid' => $input]));
        //     }
        // }
        if ($item == null) {
            return redirect()->to(route('manta.vacancies.list'));
        }
        $this->item = $item;
        $this->locale = $item->locale;
        $this->plugin = 'uploads';
    }

    public function render()
    {
        return view('livewire.vacancy.vacancy-uploads')->layout('layouts.manta-bootstrap');
    }

    public function view($view)
    {
        $this->view = $view;
    }

    public function store($input)
    {
    }
}

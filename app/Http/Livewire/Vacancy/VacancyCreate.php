<?php

namespace App\Http\Livewire\Vacancy;

use App\Models\MantaVacancy;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class VacancyCreate extends Component
{
    public ?MantaVacancy $item = null;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $company_id = '1';
    public ?string $host = null;
    public ?string $pid = null;
    public ?string $locale = null;
    public ?string $title = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public ?string $tags = null;
    public ?string $excerpt = null;
    public ?string $content = null;
    public ?string $characteristics = null;
    public ?string $to_offer = null;

    public function mount(Request $request)
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        if ($request->input('pid') && $request->input('locale')) {
            $this->item = MantaVacancy::find($request->input('pid'));
            if ($this->item) {
                $this->pid = $request->input('pid');
                $this->locale = $request->input('locale');
                $this->title = $this->item->title;
            }
        }
    }

    public function render()
    {
        return view('livewire.vacancy.vacancy-create')->layout('layouts.manta-bootstrap');
    }

    public function updatedTitle()
    {
        $this->slug = Str::of($this->title)->slug('-');
        $this->seo_title = $this->title;
    }

    public function updatedSlug()
    {
        $this->slug = Str::of($this->slug)->slug('-');
    }

    public function store($input)
    {
        $this->validate(
            [
                'title' => 'required|min:1',
            ],
            [
                'title.required' => 'Titel is verplicht',
            ]
        );

        $items = [
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $this->locale,
            'title' => $this->title,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'characteristics' => $this->characteristics,
            'to_offer' => $this->to_offer,
        ];
        MantaVacancy::create($items);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.vacancies.list'));
    }
}
